<?php

namespace SE\AuctionBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use SE\AuctionBundle\Form\MessageType;
use SE\AuctionBundle\Entity\Advert;
use SE\AuctionBundle\Entity\User;

use SE\AuctionBundle\Entity\Message;

class MessageController extends Controller
{
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addAction(Request $request, $advertId, $senderId, $receiveId){
      
        $em = $this->getDoctrine()->getManager();
      
        $advert=$em->find('SEAuctionBundle:Advert', $advertId);
        $userSender=$em->find('SEUserBundle:User', $senderId);
        $userReceive=$em->find('SEUserBundle:User', $receiveId);
        
        $message = new Message();
        
        $message->setSender($userSender);
        $message->setAdvert($advert);
        $message->setReceiver($userReceive);
        
        $form = $this->createForm(MessageType::class, $message);

        if ($request->isMethod('POST')){
            $form->handleRequest($request);

            if ($form->isValid()){
               
                $em->persist($message);
                $em->flush();

                //$request->getSession()->getFlashBag()->add('success', 'Message bien envoyé.');
            }
        }

        return $this->render('SEAuctionBundle:Message:add.html.twig', array(
            'form' => $form->createView()
        ));
       
    }
    
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listAction($advertId, $page)
    {
        $nbPerPage = 9;
        $user = $this->getUser();
        /*
        $listReceivers = $this->getDoctrine()
            ->getManager()
            ->getRepository('SEAuctionBundle:Message')
            ->getMessageReceive($user->getId(), $page, $nbPerPage);

        $listSenders = $this->getDoctrine()
            ->getManager()
            ->getRepository('SEAuctionBundle:Message')
            ->getMessageSender($user->getId(), $page, $nbPerPage);
        
         $listConversation = $this->getDoctrine()
            ->getManager()
            ->getRepository('SEAuctionBundle:Message')
            ->getMessageConversation($user->getId(), $page, $nbPerPage);*/
        
        $listMessageByAdvert = $this->getDoctrine()
            ->getManager()
            ->getRepository('SEAuctionBundle:Message')
            ->getMessageByAdvert($advertId, $user->getId(), $page, $nbPerPage);
        
        $countMessage = count($listMessageByAdvert) <= 1 ? count($listMessageByAdvert).' conversation' : count($listMessageByAdvert).' conversations';
        $nbPages = ceil(count($listMessageByAdvert)/$nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }


        return $this->render('SEAuctionBundle:Message:list.html.twig', array(
            'nbPages'     => $nbPages,
            'page'        => $page,
            'listMessage'=> $listMessageByAdvert,
            'countMessage'=> $countMessage.' pour mes demandes'
        ));
    }
    
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listConversationAction($advertId, $senderId)
    {
        $user = $this->getUser();
        
        $listConversation = $this->getDoctrine()
            ->getManager()
            ->getRepository('SEAuctionBundle:Message')
            ->getConversationRecive($advertId, $user->getId(), $senderId);
        
        $countMessage = count($listConversation) <= 1 ? count($listConversation).' message' 
                : count($listConversation).' messages';
        
        return $this->render('SEAuctionBundle:Message:conversation.html.twig', array(
            'listConversation'     => $listConversation,
            'countMessage'=> $countMessage,
            'advertId'=>$advertId,
            'senderId'=>$user->getId(),
            'receiveId'=>$senderId
        ));
    }
    
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listMessageSendAction($page)
    {
        $user = $this->getUser();
         $nbPerPage = 9;
         
        $listConversation = $this->getDoctrine()
            ->getManager()
            ->getRepository('SEAuctionBundle:Message')
            ->getConversationSender($user->getId(), $page, $nbPerPage);
        
        $countMessage = count($listConversation) <= 1 ? count($listConversation).' conversation' 
                : count($listConversation).' conversations';
        
        $nbPages = ceil(count($listConversation)/$nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }
        
        return $this->render('SEAuctionBundle:Message:listMessageSend.html.twig', array(
            'nbPages'     => $nbPages,
            'page'        => $page,
            'listMessage'     => $listConversation,
            'countMessage'=>$countMessage
        ));
    }
}

