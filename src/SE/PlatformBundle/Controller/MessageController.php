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
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MessageController extends Controller
{
    /* PRIVATE VAR */
    private $nbPerPage = 20;
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
    public function addAction(Request $request, $advertSlug, $advertId, $receiveId, $isAnswer, $msgId){
        $em = $this->getDoctrineManager();
        $session = $request->getSession();
        $mailer  = $this->get('se_platform.mailer');

        $calendar = $em->getRepository('SEPlatformBundle:Calendar')->findAll();
        $advert = $em->find('SEPlatformBundle:Advert', $advertId);
        $advertSimilarList = $em->getRepository('SEPlatformBundle:Advert')->getAdvertSimilaire($advert->getCategory()->getId(), $advert->getId());
        $userSender = $this->getUser();
        $userReceive=$em->find('SEPlatformBundle:User', $receiveId);

        $answer = 'Message de la part de '.$userSender;
        $answerSender = 'Votre message à '.$userReceive;

        $message = new Message();
        $message->setSender($userSender);
        $message->setReceiver($userReceive);
        $message->setAdvert($advert);

        $listConversation = $this->getDoctrine()
            ->getManager()
            ->getRepository('SEPlatformBundle:Message')
            ->getConversationReceive($advertId,  $receiveId, $userSender->getId());

        $countMessage = count($listConversation) <= 1 ? count($listConversation).' message'
                : count($listConversation).' messages';

        $form = $this->createForm(MessageType::class, $message);

        if ($userReceive != $userSender) {
          if ($request->isMethod('POST')){

              $form->handleRequest($request);

              if ($form->isValid() && $message->getContent() !== NULL && $message->getContent() !== ''){

                $message->setIsNew(1);
                $userReceive->setIsNewMessage(1);
                $advert->setIsNewMessage(1);

                  $em->persist($message);
                  $em->flush();

              /*  $body = $this->renderView(
                       // app/Resources/views/Message/addMail.html.twig
                       'SEPlatformBundle:Message:addMail.html.twig',
                       array('receiver' => $userReceive,
                            'sender'  => $userSender,
                            'advert'=> $advert->getTitle())
                   );*/

                   $bodyReceiver = $this->renderView(
                            // app/Resources/views/Message/addMail.html.twig
                            'SEPlatformBundle:Message:addMailDirectReceiver.html.twig',
                            array('receiver' => $userReceive,
                                 'sender'  => $userSender,
                                 'content' => $message->getContent(),
                                 'advert'=> $advert)
                        );

                  $bodySender = $this->renderView(
                           // app/Resources/views/Message/addMail.html.twig
                           'SEPlatformBundle:Message:addMailDirectSender.html.twig',
                           array('receiver' => $userReceive,
                                'sender'  => $userSender,
                                'content' => $message->getContent(),
                                'advert'=> $advert)
                       );

                  $mailer->sendEmail($answer, $answer, $userReceive->getEmail(), $bodyReceiver);
                  $mailer->sendEmail($answerSender, $answerSender, $userSender->getEmail(), $bodySender);

                  $session->getFlashBag()->add('addSuccess','Message bien envoyé.');

                  if ($isAnswer == 1) {
                          return $this->redirectToRoute('se_platform_message_answer',
                              array('advertId'=>$advert->getId(),
                                  'advertSlug'=> $advert->getSlug(),
                                  'senderId'=> $userSender->getId(),
                                  'isAnswer'=> 1,
                                  'receiveId'=> $userReceive->getId(),
                                  'msgId'=> 0
                                ));
                }
                else {
                  return $this->redirectToRoute('se_platform_advert_view',
                                                array('slug'=> $advert->getSlug(),
                                                      'id'=> $advert->getId()));
                }
              }
              else{
                $session->getFlashBag()->add('warning','Votre message est vide.');
              }
          }
          else{
            $this->getUser()->setIsNewMessage(0);
            $advert->setIsNewMessage(0);

            $em->persist($userReceive);
            $em->persist($advert);
            $em->flush();
          }
        }
        else {
          $session->getFlashBag()->add('error','Vous ne pouvez pas envoyer des messages à vous même.');

          return $this->redirectToRoute('se_platform_advert_view', array('slug'=> $advert->getSlug(),
                                                                        'id'=> $advert->getId()));
        }

        if ($isAnswer == 1) {

            if ($msgId != 0) {
              $newMassage = $em->find('SEPlatformBundle:Message', $msgId);
              $newMassage->setIsNew(0);
              $em->persist($newMassage);
              $em->flush();

            }

          return $this->render('SEPlatformBundle:Message:answer.html.twig', array(
              'form' => $form->createView(),
              'listConversation'     => $listConversation,
              'countMessage'=> $countMessage,
              'calendar' => $calendar,
              'advert'=> $advert
          ));
        }
        else{
          return $this->render('SEPlatformBundle:Message:add.html.twig', array(
              'form' => $form->createView(),
              'listConversation'     => $listConversation,
              'countMessage'=> $countMessage,
              'calendar' => $calendar,
              'advert'=> $advert,
              'advertSimilarList' => $advertSimilarList
          ));
        }
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function listSendConversationAction($advertId, $receiverId){
      $em = $this->getDoctrineManager();
      $advert=$em->find('SEPlatformBundle:Advert', $advertId);
      $sender = $this->getUser();

       $listConversation = $this->getDoctrine()
           ->getManager()
           ->getRepository('SEPlatformBundle:Message')
           ->getConversationSender($advertId, $sender->getId(), $receiverId);

       $countMessage = count($listConversation) <= 1 ? count($listConversation).' message'
               : count($listConversation).' messages';

       return $this->render('SEPlatformBundle:Message:conversation.html.twig', array(
           'listConversation'     => $listConversation,
           'countMessage'=> $countMessage,
           'advert'=>$advert,
           'advertId'=>$advertId,
           'senderId'=>$sender->getId(),
           'receiveId'=>$advert->getUser()->getId(),
       ));
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function listReceiveConversationAction($advertId, $senderId){
      $em = $this->getDoctrineManager();
      $advert=$em->find('SEPlatformBundle:Advert', $advertId);
      $receiver = $this->getUser();

       $listConversation = $this->getDoctrine()
           ->getManager()
           ->getRepository('SEPlatformBundle:Message')
           ->getConversationReceive($advertId, $senderId, $receiver->getId());

       $countMessage = count($listConversation) <= 1 ? count($listConversation).' message'
               : count($listConversation).' messages';

       return $this->render('SEPlatformBundle:Message:conversation.html.twig', array(
           'listConversation'     => $listConversation,
           'countMessage'=> $countMessage,
           'advert'=>$advert,
           'advertId'=>$advertId,
           'senderId'=>$advert->getUser()->getId(),
           'receiveId'=>$senderId
       ));
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
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
     * @Security("has_role('ROLE_SUPER_ADMIN')")
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

    public function lastDateCreationAction($advertId, $receiverId, $senderId){
        $em = $this->getDoctrineManager();
        $lastMessage = $em
          ->getRepository('SEPlatformBundle:Message')
          ->getLastMessage($advertId, $receiverId, $senderId);

            $lastDate = $lastMessage[0]->getDateCreation();
            $lastDateDay = $lastDate->format('d/m/Y');
            $lastDateHour = $lastDate->format('H:i:s');

          return new Response(
              "<h5>".$lastDateDay." - ".$lastDateHour."</h5>"
          );
    }

    public function countMessageAction($advertId, $receiverId, $senderId){
        $em = $this->getDoctrineManager();
        $newMessage = "";

        $lastMessage = $em->getRepository('SEPlatformBundle:Message')
                        ->getLastMessage($advertId, $receiverId, $senderId);

          if (!$lastIsNew = $lastMessage[0]->getIsNew() && $lastMessage[0]->getReceiver() == $this->getUser()) {
            //$newMessage = "<span class='label label-success'>Lu</span>";
          }
          else {
                $newMessage = "<span class='label label-danger'>Non lu</span>";
          }

        return new Response(
          $newMessage
        );
    }

    public function idLastMessageAction($advertId, $receiverId, $senderId){
        $em = $this->getDoctrineManager();

        $lastMessage = $em->getRepository('SEPlatformBundle:Message')
                        ->getLastMessage($advertId, $receiverId, $senderId);

        return new Response(
          $lastMessage[0]->getId()
        );
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function listUserAction(Request $request, $page){
        $user = $this->getUser();
        $listMessage = $this->getDoctrine()
            ->getManager()
            ->getRepository('SEPlatformBundle:Message')
            ->getMessageConversation($user->getId(), $page, $this->nbPerPage);

            $countMessage = count($listMessage) <= 1 ? count($listMessage).' Conversation' : count($listMessage).' Conversations';

        $nbPages = ceil(count($listMessage)/$this->nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }

      return $this->render('SEPlatformBundle:Message:listUser.html.twig',
          array(
            'nbPages'     => $nbPages,
            'page'        => $page,
            'listMessage'=> $listMessage,
            'countMessage'=> $countMessage
          ));
    }
}
