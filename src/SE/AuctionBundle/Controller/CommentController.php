<?php

namespace SE\AuctionBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use SE\AuctionBundle\Form\CommentType;
use SE\AuctionBundle\Entity\Advert;
use SE\AuctionBundle\Entity\User;

use SE\AuctionBundle\Entity\Comment;

class CommentController extends Controller
{
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addAction(Request $request, $advertId){
      
        $em = $this->getDoctrine()->getManager();
      
        $advert=$em->find('SEAuctionBundle:Advert', $advertId);
        
        $comment = new Comment();
        
        $comment->setSender($this->getUser());
        $comment->setAdvert($advert);
        $comment->setReceiver($advert->getUser());
        
        $form = $this->createForm(CommentType::class, $comment,
                 array('action' => $this->generateUrl('se_auction_auction_list_by_user')));

        if ($request->isMethod('POST')){
            $form->handleRequest($request);

            if ($form->isValid()){
               
                $em->persist($comment);
                $em->flush();

                $request->getSession()->getFlashBag()->add('success', 'Commentaire bien envoyé.');
            }
        }

        return $this->render('SEAuctionBundle:Comment:add.html.twig', array(
            'form' => $form->createView()
        ));
       
    }
    
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listAction($page)
    {
        $nbPerPage = 9;
        $user = $this->getUser();
        
        $listReceivers = $this->getDoctrine()
            ->getManager()
            ->getRepository('SEAuctionBundle:Comment')
            ->getCommentReceive($user->getId(), $page, $nbPerPage);

        $listSenders = $this->getDoctrine()
            ->getManager()
            ->getRepository('SEAuctionBundle:Comment')
            ->getCommentSender($user->getId(), $page, $nbPerPage);
        
         $listComment = $this->getDoctrine()
            ->getManager()
            ->getRepository('SEAuctionBundle:Comment')
            ->getCommentConversation($user->getId(), $page, $nbPerPage);
        
        $nbPages = ceil(count($listSenders)/$nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }


        return $this->render('SEAuctionBundle:Comment:list.html.twig', array(
            'nbPages'     => $nbPages,
            'page'        => $page,
            'listComment'=> $listComment,
            'countComment'=> count($listComment)
        ));
    }
}

