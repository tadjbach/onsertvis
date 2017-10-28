<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SE\PlatformBundle\Controller;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Controller managing the user profile.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ProfileController extends Controller
{
    /**
     * Show the user.
     */
    public function showAction() {
         $user = $this->getUser();

          if (!is_object($user) || !$user instanceof UserInterface) {
                throw new AccessDeniedException('This user does not have access to this section.');
            }

      $em = $this->getDoctrine()
             ->getManager();


       $userId = $user->getId();
       $listComment = $this->getDoctrine()
           ->getManager()
           ->getRepository('SEPlatformBundle:Comment')
           ->getCommentListUser($userId, '2', 1, 1000000);

           $listReceivedAuctions = $em
              ->getRepository('SEPlatformBundle:Auction')
              ->getStateReceiveAuctionUser($userId);

           $listProposedAuctions = $em
              ->getRepository('SEPlatformBundle:Auction')
              ->getStateProposedAuctionUser($userId);

          $listAcceptedAuctions = $em
              ->getRepository('SEPlatformBundle:Auction')
              ->getStateAuctionUser($userId, 2);

          $titleAcceptedAuctions = count($listAcceptedAuctions) <= 1 ?'Job fait' : 'Jobs faits';

          $listLoseAuctions = $em
              ->getRepository('SEPlatformBundle:Auction')
              ->getStateAuctionUser($userId, 3);

         $listPublishAdvert = $em
             ->getRepository('SEPlatformBundle:Advert')
             ->getAdvertByUser($userId);

         $titlePublishAdvert = count($listPublishAdvert) <= 1 ?'Demande publiées' : 'Demandes publiées';

       $user = $em->find('SEPlatformBundle:User', $userId);

       $calendar = $em->getRepository('SEPlatformBundle:Calendar')->findAll();
       $payment = $em->getRepository('SEPlatformBundle:payment')->findAll();

       if (!$user){
           throw new NotFoundHttpException("Cet utilisateur n'existe pas".$userId );
       }

       if (!is_object($user) || !$user instanceof UserInterface) {
           throw new AccessDeniedException('This user does not have access to this section.');
       }

       return $this->render('@FOSUser/Profile/view.html.twig', array(
             'user' => $user,
             'listComment'=>$listComment,
             'calendar' => $calendar,
             'payment' => $payment,
             'countPublishAdvert'=>count($listPublishAdvert),
             'titlePublishAdvert'=>$titlePublishAdvert,
             'countReceivedAuction'=>count($listReceivedAuctions),
             'countProposedAuction'=>count($listProposedAuctions),
             'countAcceptedAuction'=>count($listAcceptedAuctions),
             'titleAcceptedAuctions'=>$titleAcceptedAuctions,
             'countLosedAuction'=>count($listLoseAuctions)
       ));
    }

    /**
     * Edit the user.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function editAction(Request $request){
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var $userManager UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            /*SE PlatformBundle Begin*/
            $em = $this->getDoctrine()->getManager();
            $postalCode=$em->getRepository('SEPlatformBundle:PostalCode')
                   ->getPostalCodeByValue($user->getCpCity());

            $user->setDateUpdate(new \DateTime());
            $user->setIsAcountComplete(true);

            $ip = $request->getClientIp();
            if($ip == 'unknown'){
                $ip = $_SERVER['REMOTE_ADDR'];
            }

            $user->setIpAddress($ip);

            foreach ($postalCode as $pc) {
              $user->setPostalCode($pc);
            }
            //SE PlatformBundle End */

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {

              $this->addFlash(
                               'updateSuccess',
                               "Votre profil vient d'être mis à jour"
                           );

                $url = $this->generateUrl('se_platform_user_edit');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }
        else if($form->isSubmitted() && !$form->isValid()) {
          $this->addFlash(
                           'updateError',
                           "Une erreur s'est produite pendant la mise à jour, vérifiez vos identifiants"
                       );
        }

        return $this->render('@FOSUser/Profile/edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }

  public function viewAction(Request $request, $userId)
   {
     $em = $this->getDoctrine()
            ->getManager();

      $session = $request->getSession();
      $listComment = $this->getDoctrine()
          ->getManager()
          ->getRepository('SEPlatformBundle:Comment')
          ->getCommentListUser($userId, '2', 1, 1000000);

          $listReceivedAuctions = $em
             ->getRepository('SEPlatformBundle:Auction')
             ->getStateReceiveAuctionUser($userId);

          $listProposedAuctions = $em
             ->getRepository('SEPlatformBundle:Auction')
             ->getStateProposedAuctionUser($userId);

         $listAcceptedAuctions = $em
             ->getRepository('SEPlatformBundle:Auction')
             ->getStateAuctionUser($userId, 2);

         $titleAcceptedAuctions = count($listAcceptedAuctions) <= 1 ?'Job fait' : 'Jobs faits';

         $listLoseAuctions = $em
             ->getRepository('SEPlatformBundle:Auction')
             ->getStateAuctionUser($userId, 3);

        $listPublishAdvert = $em
            ->getRepository('SEPlatformBundle:Advert')
            ->getAdvertByUser($userId);

        $titlePublishAdvert = count($listPublishAdvert) <= 1 ?'Demande publiées' : 'Demandes publiées';

      $user = $em->find('SEPlatformBundle:User', $userId);

      $calendar = $em->getRepository('SEPlatformBundle:Calendar')->findAll();
      $payment = $em->getRepository('SEPlatformBundle:payment')->findAll();

      if (!$user){
          throw new NotFoundHttpException("Cet utilisateur n'existe pas".$userId );
      }

      if (!is_object($user) || !$user instanceof UserInterface) {
          throw new AccessDeniedException('This user does not have access to this section.');
      }

      $contentSender = $request->query->get('_profil_message_content');

      if ($contentSender !== NULL && $contentSender !== ''){

                  $mailer  = $this->get('se_platform.mailer');
                  $userSender = $this->getUser();

                  $mailSender = $userSender != null ? $userSender->getEmail() : $request->query->get('_email_sender');
                  $nameSender = $userSender != null ? $userSender->getUserName() : $request->query->get('_name_sender');


                  $titleReceiver = 'Nouveau message de la part '.$nameSender;
                  $titleSender = 'Votre message à '.$user;

                  $bodyReceiver = $this->renderView(
                           'SEPlatformBundle:Profile:addMailDirectReceiver.html.twig',
                           array('receiver' => $user,
                                 'senderMail'  => $mailSender,
                                 'senderName'  => $nameSender,
                                 'content' => $contentSender)
                       );

                  $bodySender = $this->renderView(
                          'SEPlatformBundle:Profile:addMailDirectSender.html.twig',
                          array('receiver' => $user,
                               'senderMail'  => $mailSender,
                               'senderName'  => $nameSender,
                               'content' => $contentSender)
                      );

                  $mailer->sendEmail($titleReceiver, $titleReceiver, $user->getEmail(), $bodyReceiver);
                  $mailer->sendEmail($titleSender, $titleSender, $mailSender, $bodySender);

                  $session->getFlashBag()->add('sendMessageOk','Message bien envoyé.');

                  return $this->redirectToRoute('se_platform_user_view',
                                                array(
                                                      'userId'=> $user->getId()));

            }

            else{
              //$session->getFlashBag()->add('sendMessageError','Une erreur est surnevue, vérifiez le contenu de votre message.');
            }

          return $this->render('@FOSUser/Profile/view.html.twig', array(
                'user' => $user,
                'listComment'=>$listComment,
                'calendar' => $calendar,
                'payment' => $payment,
                'countPublishAdvert'=>count($listPublishAdvert),
                'titlePublishAdvert'=>$titlePublishAdvert,
                'countReceivedAuction'=>count($listReceivedAuctions),
                'countProposedAuction'=>count($listProposedAuctions),
                'countAcceptedAuction'=>count($listAcceptedAuctions),
                'titleAcceptedAuctions'=>$titleAcceptedAuctions,
                'countLosedAuction'=>count($listLoseAuctions)
          ));
   }
}
