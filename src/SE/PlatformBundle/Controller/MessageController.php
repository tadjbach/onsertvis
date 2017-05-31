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

    private function getAdvertState(){
        $em = $this->getDoctrineManager();
        return $em->getRepository('SEPlatformBundle:AdvertState')->findAll();
    }

    /* PUBLIC FUNCTION */

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addAction(Request $request, $advertSlug, $advertId, $receiveId){
        $em = $this->getDoctrineManager();
        $session = $request->getSession();

        $advert = $em->find('SEPlatformBundle:Advert', $advertId);
        $userSender = $this->getUser();
        $userReceive=$em->find('SEPlatformBundle:User', $receiveId);

        $message = new Message();

        $message->setSender($userSender);
        $message->setReceiver($userReceive);
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

    public function listConversationAction($advertId, $senderId, $receiverId){
      $em = $this->getDoctrineManager();
      $advert=$em->find('SEPlatformBundle:Advert', $advertId);
      $sender=$em->find('SEPlatformBundle:User', $senderId);
      $receiver=$em->find('SEPlatformBundle:User', $receiverId);


       $listConversation = $this->getDoctrine()
           ->getManager()
           ->getRepository('SEPlatformBundle:Message')
           ->getConversation($advertId, $senderId, $senderId);

       $countMessage = count($listConversation) <= 1 ? count($listConversation).' message'
               : count($listConversation).' messages';

       return $this->render('SEPlatformBundle:Message:conversation.html.twig', array(
           'listConversation'     => $listConversation,
           'countMessage'=> $countMessage,
           'advert'=>$advert,
           'advertId'=>$advertId,
           'senderId'=>$senderId,
           'receiveId'=>$senderId
       ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function userReceiveListAction(Request $request, $page)
    {
      $advertId = $request->query->get('advert');
      $state = $request->query->get('state');

      $em = $this->getDoctrineManager();
      $user = $this->getUser();

      $listAdverstByUserFilter = $em->getRepository('SEPlatformBundle:Advert')
           ->getAdvertByUser($user->getId());

      $listMessageReceive = $em->getRepository('SEPlatformBundle:Message')
           ->getMessageReceive($advertId, $state, $user->getId(), $page, $this->nbPerPage);

     $countMessage = count($listMessageReceive) <= 1 ? count($listMessageReceive).' conversation' : count($listMessageReceive).' conversations';
     $nbPages = ceil(count($listMessageReceive)/$this->nbPerPage);

       if ($page<1){
           throw new NotFoundHttpException('page"'.$page.'" inexistante');
       }

      return $this->render('SEPlatformBundle:Message:userReceiveList.html.twig',
      array(
        'advert'=> $advertId,
        'state'=> $state,
        'countMessage'=>$countMessage,
        'nbPages'     => $nbPages,
        'page'        => $page,
        'listAdvert'=>$listAdverstByUserFilter,
        'listMessage'=>$listMessageReceive,
        'listState'=>$this->getAdvertState()
      ));
    }

/**
 * @Security("has_role('ROLE_AUTEUR')")
 */
public function userSendListAction(Request $request, $page)
{
  $advertId = $request->query->get('advert');
  $state = $request->query->get('state');

  $em = $this->getDoctrineManager();
  $user = $this->getUser();

  $listAdverstByUserFilter = $em->getRepository('SEPlatformBundle:Message')
              ->getAdvertByUser($user->getId());

  $listMessageSender = $em->getRepository('SEPlatformBundle:Message')
       ->getMessageSender($advertId, $state, $user->getId(), $page, $this->nbPerPage);

 $countMessage = count($listMessageSender) <= 1 ? count($listMessageSender).' conversation' : count($listMessageSender).' conversations';
 $nbPages = ceil(count($listMessageSender)/$this->nbPerPage);

   if ($page<1){
       throw new NotFoundHttpException('page"'.$page.'" inexistante');
   }

  return $this->render('SEPlatformBundle:Message:userSendList.html.twig',
  array(
    'advert'=> $advertId,
    'state'=> $state,
    'countMessage'=>$countMessage,
    'nbPages'     => $nbPages,
    'page'        => $page,
    'listAdvert'=>$listAdverstByUserFilter,
    'listMessage'=>$listMessageSender,
    'listState'=>$this->getAdvertState()
  ));
}
}
