<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SE\PlatformBundle\Entity\Comment;
use SE\PlatformBundle\Form\CommentType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CommentController extends Controller
{
    /* PRIVATE VAR */
    private $nbPerPage = 20;
    private $em;
    private $state;

    /* PRIVATE FUNCTION */
    private function getDoctrineManager(){
      return $this->getDoctrine()->getManager();
    }

    private function getListUserFilterAttributes(Request $request){
        $this->state = $request->query->get('state');
    }

    private function getCommentState(){
      $em = $this->getDoctrineManager();
      return $em->getRepository('SEPlatformBundle:CommentState')->findAll();
    }
    /* PUBLIC FUNCTION */

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
     public function addAction(Request $request, $advertId, $auctionUserId){

         $em = $this->getDoctrineManager();
         $session = $request->getSession();
         $mailer  = $this->get('se_platform.mailer');

         $advert=$em->find('SEPlatformBundle:Advert', $advertId);
         $advert->setIsPublished(false);
         $userReceiver = $em->find('SEPlatformBundle:User', $auctionUserId);

         $userSender = $this->getUser();

         if ($userSender == $advert->getUser()) {
             $comment = new Comment();

             $form = $this->createForm(CommentType::class, $comment);

             if ($request->isMethod('POST')){
                 $form->handleRequest($request);

                 if ($form->isValid() && $comment->getContent() !== NULL && $comment->getContent() !== ''){

                       $rate = $comment->getRate();

                       $listComment = $em
                                   ->getRepository('SEPlatformBundle:Comment')
                                   ->getComment($userReceiver->getId(), false);
                       $countComment = count($listComment) + 1;

                       foreach ($listComment as $item) {
                           $rate = $rate + $item->getRate();
                       }

                       $rate = $rate / $countComment;

                       $userReceiver->setRate(round($rate));

                       $advert->setCommentState(1);

                       $comment->setSender($userSender);
                       $comment->setAdvert($advert);
                       $comment->setReceiver($userReceiver);

                       $em->persist($advert);
                       $em->persist($comment);
                       $em->flush();

                       $body = $this->renderView(
                              'SEPlatformBundle:Comment:addMail.html.twig',
                              array( 'receiver' => $userReceiver,
                                     'advert'=> $advert)
                          );

                       $mailer->sendEmail('Avis reçu', 'Vous avez reçu un avis', $userReceiver->getEmail(), $body);

                       $session->getFlashBag()->add('addSuccess','Avis bien ajouté.');

                       return $this->redirectToRoute('se_platform_advert_user_list');
                     }
                     else{
                       $session->getFlashBag()->add('warning','Votre message est vide.');
                     }
             }
         }
         else {
             throw new NotFoundHttpException("Oops, Vous n'êtes pas le propriétaire de la demande.");
         }

         return $this->render('SEPlatformBundle:Comment:add.html.twig', array(
             'form' => $form->createView(),
             'advert'=>$advert
         ));
     }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
     public function editAction($id, Request $request){

       $em = $this->getDoctrineManager();
       $session = $request->getSession();
       $comment=$em->find('SEPlatformBundle:Comment', $id);
       $userReceiver = $em->find('SEPlatformBundle:User', $comment->getReceiver()->getId());
       $userSender = $em->find('SEPlatformBundle:User', $comment->getSender()->getId());

       if (null===$comment or null===$userReceiver){
             throw new NotFoundHttpException("Oops, L avis  que vous cherchez n'existe pas.");
         }

         if ($this->getUser() === $userSender) {

             $form = $this->createForm(CommentType::class, $comment);

             if ($request->isMethod('POST')){

                 $form->handleRequest($request);
                 if ($form->isValid()){

                   $rate = $comment->getRate();

                   $listComment = $em
                               ->getRepository('SEPlatformBundle:Comment')
                               ->getComment($userReceiver->getId(), false);

                   $countComment = count($listComment) + 1;

                   foreach ($listComment as $item) {
                       $rate = $rate + $item->getRate();
                   }

                   $rate = $rate / $countComment;

                   $userReceiver->setRate(round($rate));

                     $comment->setDateUpdate(new \DateTime());
                     $em->flush();

                     $session->getFlashBag()->add('editSuccess','Avis modifié avec succes');

                     return $this->redirectToRoute('se_platform_comment_edit',
                                 array('id'=>$comment->getId()));
                 }
               }
           }
           else {
               throw new NotFoundHttpException("Oops, Vous n'êtes pas le propriétaire de la demande.");
           }
         return $this->render('SEPlatformBundle:Comment:edit.html.twig', array(
             'form' => $form->createView(),
             'comment'=>$comment
         ));
     }

     /**
      * @Security("has_role('ROLE_SUPER_ADMIN')")
      */
    public function deleteAction($id, Request $request){
      $em = $this->getDoctrineManager();
      $session = $request->getSession();
      $comment = $em->getRepository('SEPlatformBundle:Comment')->find($id);
      $userSender = $em->find('SEPlatformBundle:User', $comment->getSender()->getId());

       if (null===$comment){
            throw new NotFoundHttpException("Oops, L'avis que vous cherchez n'existe pas.");
        }

        if ($this->getUser() === $userSender) {

        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {

            $comment->setIsDeleted(true);
            $comment->setIsPublished(false);
            $comment->setDateUpdate(new \DateTime());

            $em->flush();

            $request->getSession()->getFlashBag()->add('deleteSuccess', "L avis a bien été supprimée.");

            return $this->redirectToRoute('se_platform_advert_validate', array('action'=>'supprimer'));
        }

      }
      else {
          throw new NotFoundHttpException("Oops, Vous n'êtes pas le propriétaire de la demande.");
      }

        return $this->render('SEPlatformBundle:Comment:delete.html.twig', array(
            'comment' => $comment,
            'form'   => $form->createView()
        ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listUserAction(Request $request, $page){
        $user = $this->getUser();
        $this->getListUserFilterAttributes($request);

        $listComment = $this->getDoctrine()
            ->getManager()
            ->getRepository('SEPlatformBundle:Comment')
            ->getCommentListUser($user->getId(), $this->state, $page, $this->nbPerPage);

        $titleResult = count($listComment) == 0 ? 'Aucun avis' : count($listComment).' avis';

        $nbPages = ceil(count($listComment)/$this->nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }

      return $this->render('SEPlatformBundle:Comment:listUser.html.twig',
          array(
            'nbPages'     => $nbPages,
            'page'        => $page,
            'listComment'=> $listComment,
            'countComment'=> $titleResult,
            'state'=> $this->state,
            'listCommentState'=>$this->getCommentState()
          ));
    }
}
