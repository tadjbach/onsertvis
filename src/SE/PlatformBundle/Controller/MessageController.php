<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SE\PlatformBundle\Form\MessageType;
use SE\PlatformBundle\Entity\Advert;
use SE\PlatformBundle\Entity\User;
use SE\PlatformBundle\Entity\Message;

class MessageController extends Controller
{
    /* PRIVATE VAR */
    private $nbPerPage = 30;
    private $em;
    private $advert;
    private $state;

    /* PRIVATE FUNCTION */
    private function getDoctrineManager(){
      return $this->getDoctrine()->getManager();
    }

    private function getMessageState(){
        $em = $this->getDoctrineManager();
        return $em->getRepository('SEPlatformBundle:MessageState')->findAll();
    }

    /* PUBLIC FUNCTION */

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addAction(Request $request, $advertSlug, $advertId){
        $em = $this->getDoctrineManager();
        $session = $request->getSession();

        $advert = $em->find('SEPlatformBundle:Advert', $advertId);
        $userSender = $this->getUser();

        $message = new Message();

        $message->setSender($userSender);
        $message->setAdvert($advert);

        $form = $this->createForm(MessageType::class, $message);

        if ($request->isMethod('POST')){
            $form->handleRequest($request);

            if ($form->isValid()){

                $em->persist($message);
                $em->flush();

                $session->getFlashBag()->add('addSuccess','Message bien envoyé.');

                return $this->redirectToRoute('se_platform_advert_validate', array('action'=>'ajouter'));
            }
        }

        return $this->render('SEPlatformBundle:Message:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function editAction($id){

    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function deleteAction($id){

    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function viewAction($slug, $id)
    {

    }

//Super ADMIN
    public function listAction(Request $request)
    {

    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listUserAction(Request $request, $page)
    {
      $advertId = $request->query->get('advert');
      $state = $request->query->get('state');

      $em = $this->getDoctrineManager();
      $user = $this->getUser();

      $listAdverstByUserFilter = $em->getRepository('SEPlatformBundle:Advert')
           ->getAdvertByUser($user->getId());

      $listAdvertsByAuctionFilter = $em->getRepository('SEPlatformBundle:Auction')
                  ->getAdvertByUser($user->getId());

      $listMessageByAdvert = $em->getRepository('SEPlatformBundle:Message')
           ->getMessageByAdvert($advertId, $user->getId(), $state, $page, $this->nbPerPage);

     $countMessage = count($listMessageByAdvert) <= 1 ? count($listMessageByAdvert).' message' : count($listMessageByAdvert).' messages';
     $nbPages = ceil(count($listMessageByAdvert)/$this->nbPerPage);

       if ($page<1){
           throw new NotFoundHttpException('page"'.$page.'" inexistante');
       }

      return $this->render('SEPlatformBundle:Message:listUser.html.twig',
      array(
        'listState'=>$this->getMessageState(),
        'advert'=> $advertId,
        'countMessage'=>$countMessage,
        'nbPages'     => $nbPages,
        'page'        => $page,
        'listAdvertUser'=>$listAdverstByUserFilter,
        'listAdvertAuction'=>$listAdvertsByAuctionFilter,
        'listMessage'=>$listMessageByAdvert
      ));
    }
}
