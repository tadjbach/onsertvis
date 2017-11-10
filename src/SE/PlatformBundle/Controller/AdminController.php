<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AdminController extends Controller
{
  /* PRIVATE VAR */
  private $nbPerPage = 40;
  private $em;

      /* Search filter */
        /* User */
          private $userNameOrEmail;
          private $userRoles;
          private $userState;

        /* Advert */
          private $advertTitle;
          private $advertcategory;
          private $advertState;

        /* Auction */
          private $auctionState;

      private function getListAuctionFilterAttributes(Request $request){
          $this->auctionState = $request->query->get('state');
      }

       private function getDoctrineManager(){
        return $this->getDoctrine()->getManager();
      }

      private function getListUserFilterAttributes(Request $request){
          $this->userNameOrEmail = $request->query->get('userNameOrEmail');
          $this->userRoles = $request->query->get('userRoles');
          $this->userState = $request->query->get('userState');
      }

      private function getListAdvertFilterAttributes(Request $request){
          $this->advertTitle = $request->query->get('title');
          $this->advertcategory = $request->query->get('category');
      }

      private function getUserState(){

        $list = array(
             array('id'=>1, 'labelNormal'=>'Activé', 'state'=>1),
             array('id'=>2, 'labelNormal'=>'Désactivé', 'state'=>0)
           );
           return $list;
      }

      private function getAdvertState(){
          $em = $this->getDoctrineManager();
          return $em->getRepository('SEPlatformBundle:AdvertState')->findAll();
      }

      private function getAuctionState(){
          $em = $this->getDoctrineManager();
          return $em->getRepository('SEPlatformBundle:AuctionState')->findAll();
      }

      private function getCategory(){
        $em = $this->getDoctrineManager();
        return $em->getRepository('SEPlatformBundle:Category')->findAll();
      }

      private function getUserRoles(){

        $list = array(
            array('id'=>1, 'labelNormal'=>'SUPER_ADMIN'),
            array('id'=>2, 'labelNormal'=>'ROLE_AUTEUR')
           );
           return $list;
      }

      /**
       * @Security("has_role('ROLE_SUPER_ADMIN')")
       */
        public function listUsersAction(Request $request, $page){
          $em = $this->getDoctrineManager();

          $this->getListUserFilterAttributes($request);

          $listUsers = $em->getRepository('SEPlatformBundle:User')
               ->getUserListAdmin(
                 $this->userNameOrEmail,
                 $this->userRoles,
                 $this->userState,
                 $page,
                 $this->nbPerPage);

         $titleResult = count($listUsers) == 0 ?'Aucune utilisateur' :
                 (count($listUsers) > 1 ? count($listUsers).' utilisateurs' :
             count($listUsers).' utilisateur');

          $nbPages = ceil(count($listUsers)/$this->nbPerPage);

         return $this->render('SEPlatformBundle:Admin:listUsers.html.twig',
                 array(
                   'titleResult'=>$titleResult,
                   'nbPages'      => $nbPages,
                   'page'         => $page,
                   'userNameOrEmail'     => $this->userNameOrEmail,
                   'userRoles'    =>$this->userRoles,
                   'userState'  =>$this->userState,
                   'userState'    =>$this->getUserState(),
                   'userRoles'  =>$this->getUserRoles(),
                   'listUsers'    =>$listUsers
                 ));

        }

        /**
         * @Security("has_role('ROLE_SUPER_ADMIN')")
         */
         public function viewUserAction(Request $request, $id){
           $em = $this->getDoctrineManager();
           $calendar = $em->getRepository('SEPlatformBundle:Calendar')->findAll();
           $payment = $em->getRepository('SEPlatformBundle:payment')->findAll();
           $listComment = $this->getDoctrine()
               ->getManager()
               ->getRepository('SEPlatformBundle:Comment')
               ->getCommentListUser($id, '2', 1, 1000000);

               $listReceivedAuctions = $em
                  ->getRepository('SEPlatformBundle:Auction')
                  ->getStateReceiveAuctionUser($id);

               $listProposedAuctions = $em
                  ->getRepository('SEPlatformBundle:Auction')
                  ->getStateAuctionUser($id, 1);

              $listAcceptedAuctions = $em
                  ->getRepository('SEPlatformBundle:Auction')
                  ->getStateAuctionUser($id, 2);

              $titleAcceptedAuctions = count($listAcceptedAuctions) <= 1 ?'Job fait' : 'Jobs faits';

              $listLoseAuctions = $em
                  ->getRepository('SEPlatformBundle:Auction')
                  ->getStateAuctionUser($id, 3);

            $listPublishAdvert = $em
                      ->getRepository('SEPlatformBundle:Advert')
                      ->getAdvertByUser($id);

            $titlePublishAdvert = count($listPublishAdvert) <= 1 ?'Demande publiées' : 'Demandes publiées';

           $user=$em->find('SEPlatformBundle:User', $id);

           return $this->render('SEPlatformBundle:Admin:viewUser.html.twig',
                       array(
                         'user'=> $user,
                        'calendar'=>$calendar,
                        'payment'=>$payment,
                       'listComment'=>$listComment,
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
         * @Security("has_role('ROLE_SUPER_ADMIN')")
         */
        public function listAdvertsAction(Request $request, $page){
          $em = $this->getDoctrineManager();

          $this->getListAdvertFilterAttributes($request);

          $listAdverts = $em->getRepository('SEPlatformBundle:Advert')
                              ->getAdvertListAdmin(
                                      $this->advertTitle,
                                      $this->advertcategory,
                                      $page,
                                      $this->nbPerPage);

          $titleResult = count($listAdverts) == 0 ?'Aucune demande' :
                  (count($listAdverts) > 1 ? count($listAdverts).' demandes' :
              count($listAdverts).' demande');

          $nbPages = ceil(count($listAdverts)/$this->nbPerPage);

          return $this->render('SEPlatformBundle:Admin:listAdverts.html.twig',
              array(
                  'title'=> $this->advertTitle,
                  'category'=> $this->advertcategory,

                  'titleResult'=>$titleResult,
                  'nbPages'     => $nbPages,
                  'page'        => $page,
                  'listAdverts'=>$listAdverts,
                  'advertCategory'=>$this->getCategory(),
                  'advertState'=>$this->getAdvertState()
              ));
        }

        /**
         * @Security("has_role('ROLE_SUPER_ADMIN')")
         */
         public function viewAdvertAction(Request $request, $id){
           $em = $this->getDoctrineManager();

           $advert = $em->find('SEPlatformBundle:Advert', $id);
           $calendar = $em->getRepository('SEPlatformBundle:Calendar')->findAll();

           return $this->render('SEPlatformBundle:Admin:viewAdvert.html.twig',
                       array(
                           'calendar'=>$calendar,
                         'advert'=> $advert));
         }

         /**
          * @Security("has_role('ROLE_SUPER_ADMIN')")
          */
          public function enableAdvertAction(Request $request, $id, $action){
            $em = $this->getDoctrineManager();
            $mailer  = $this->get('se_platform.mailer');
            $advert = $em->find('SEPlatformBundle:Advert', $id);
            $advert->setIsEnabled($action);
            $advert->setIsPublished($action);

            $em->persist($advert);
            $em->flush();

            if ($action == 0) {
              /*
                $body = $this->renderView(
                     'SEPlatformBundle:Advert:disabledMail.html.twig',
                     array('advert'=> $advert)
                 );

                 if (!$advert->getIsDeleted()) {
                    $mailer->sendEmail("Validation de votre demande", "Votre demande ".$advert->getTitle(), $advert->getUser()->getEmail(), $body);
                 }*/
            }

            return $this->redirectToRoute('se_platform_admin_view_advert', array('id'=>$id));
          }

          /**
           * @Security("has_role('ROLE_SUPER_ADMIN')")
           */
           public function publishAdvertAction(Request $request, $id, $action){
             $em = $this->getDoctrineManager();

             $advert = $em->find('SEPlatformBundle:Advert', $id);
             $advert->setIsPublished($action);
             $advert->setIsEnabled($action);
             $advert->setUserValide($this->getUser());

             $mailer  = $this->get('se_platform.mailer');

             $em->persist($advert);
             $em->flush();

             if ($action == 1) {
               $body = $this->renderView(
                      'SEPlatformBundle:Advert:activeMail.html.twig',
                      array('advert'=> $advert)
                  );

                  if (!$advert->getIsDeleted()) {
                       $mailer->sendEmail("Validation de votre demande", "Votre demande ".$advert->getTitle(), $advert->getUser()->getEmail(), $body);
                  }

             }

             return $this->redirectToRoute('se_platform_admin_view_advert', array('id'=>$id));
           }

           /**
            * @Security("has_role('ROLE_SUPER_ADMIN')")
            */
            public function deleteAdvertAction(Request $request, $id, $action){
              $em = $this->getDoctrineManager();

              $advert = $em->find('SEPlatformBundle:Advert', $id);
              $advert->setIsDeleted($action);

              $em->persist($advert);
              $em->flush();

              return $this->redirectToRoute('se_platform_admin_view_advert', array('id'=>$id));
            }

            /**
             * @Security("has_role('ROLE_SUPER_ADMIN')")
             */
             public function enableUserAction(Request $request, $id, $action){
               $em = $this->getDoctrineManager();

               $user = $em->find('SEPlatformBundle:User', $id);
               $user->setEnabled($action);

               $em->persist($user);
               $em->flush();

               return $this->redirectToRoute('se_platform_admin_view_user', array('id'=>$id));
             }

             /**
              * @Security("has_role('ROLE_SUPER_ADMIN')")
              */
              public function newsletterUserAction(Request $request, $id, $action){
                $em = $this->getDoctrineManager();

                $user = $em->find('SEPlatformBundle:User', $id);
                $user->setIsNewsLetter($action);

                $em->persist($user);
                $em->flush();

                return $this->redirectToRoute('se_platform_admin_view_user', array('id'=>$id));
              }

              /**
               * @Security("has_role('ROLE_SUPER_ADMIN')")
               */
               public function visibleUserAction(Request $request, $id, $action){
                 $em = $this->getDoctrineManager();

                 $user = $em->find('SEPlatformBundle:User', $id);
                 $user->setIsDetailVisible($action);

                 $em->persist($user);
                 $em->flush();

                 return $this->redirectToRoute('se_platform_admin_view_user', array('id'=>$id));
               }

               /**
                * @Security("has_role('ROLE_SUPER_ADMIN')")
                */
                public function jobberUserAction(Request $request, $id, $action){
                  $em = $this->getDoctrineManager();

                  $user = $em->find('SEPlatformBundle:User', $id);
                  $user->setIsJobber($action);

                  $em->persist($user);
                  $em->flush();

                  return $this->redirectToRoute('se_platform_admin_view_user', array('id'=>$id));
                }

                /**
                 * @Security("has_role('ROLE_SUPER_ADMIN')")
                 */
                 public function completeMailUserAction(Request $request, $id){
                   $em = $this->getDoctrineManager();
                   $mailer  = $this->get('se_platform.mailer');
                   $user = $em->find('SEPlatformBundle:User', $id);

                   $body = $this->renderView(
                          'SEPlatformBundle:Admin:completeMail.html.twig',
                          array('user'=> $user)
                      );

                  $mailer->sendAdminEmail("Service Enchère", "Votre profil n'est pas complet", $user->getEmail(), $body);

                   return $this->redirectToRoute('se_platform_admin_view_user', array('id'=>$id));
                 }

                 /**
                  * @Security("has_role('ROLE_SUPER_ADMIN')")
                  */
                  public function activationMailUserAction(Request $request, $id){
                    $em = $this->getDoctrineManager();
                    $mailer  = $this->get('se_platform.mailer');
                    $user = $em->find('SEPlatformBundle:User', $id);

                    $body = $this->renderView(
                           'SEPlatformBundle:Admin:activationMail.html.twig',
                           array('user'=> $user)
                       );

                   $mailer->sendAdminEmail("Service Enchère", "Validation de votre adresse mail", $user->getEmail(), $body);

                    return $this->redirectToRoute('se_platform_admin_view_user', array('id'=>$id));
                  }

        /**
         * @Security("has_role('ROLE_SUPER_ADMIN')")
         */
        public function listAuctionsAction(Request $request, $page){
          $em = $this->getDoctrineManager();

          $this->getListAuctionFilterAttributes($request);

          $listAuctions = $em->getRepository('SEPlatformBundle:Auction')
                              ->getAuctionListAdmin(
                                      $this->auctionState,
                                      $page,
                                      $this->nbPerPage);

          $titleResult = count($listAuctions) == 0 ?'Aucune offre' :
                  (count($listAuctions) > 1 ? count($listAuctions).' offres' : count($listAuctions).' offre');

          $nbPages = ceil(count($listAuctions)/$this->nbPerPage);

          return $this->render('SEPlatformBundle:Admin:listAuctions.html.twig',
              array(
                  'titleResult'=>$titleResult,
                  'nbPages'     => $nbPages,
                  'page'        => $page,
                  'listAuctions'=>$listAuctions,
                  'auctionState'=>$this->getAuctionState()
              ));
        }

        /**
         * @Security("has_role('ROLE_SUPER_ADMIN')")
         */
        public function listMessagesAction(Request $request, $page){
          $em = $this->getDoctrineManager();

          //$this->getListMessageFilterAttributes($request);

          $listMessages = $em->getRepository('SEPlatformBundle:Message')
                              ->getMessageListAdmin(
                                      $page,
                                      $this->nbPerPage);

          $titleResult = count($listMessages) == 0 ?'Aucun message' :
                  (count($listMessages) > 1 ? count($listMessages).' messages' : count($listMessages).' message');

          $nbPages = ceil(count($listMessages)/$this->nbPerPage);

          return $this->render('SEPlatformBundle:Admin:listMessages.html.twig',
              array(
                  'titleResult'=>$titleResult,
                  'nbPages'     => $nbPages,
                  'page'        => $page,
                  'listMessages'=>$listMessages
              ));
        }

        /**
         * @Security("has_role('ROLE_SUPER_ADMIN')")
         */
        public function listCommentsAction(Request $request, $page){
          $em = $this->getDoctrineManager();

          //$this->getListMessageFilterAttributes($request);

          $listComments = $em->getRepository('SEPlatformBundle:Comment')
                              ->getCommentListAdmin(
                                      $page,
                                      $this->nbPerPage);

          $titleResult = count($listComments) == 0 ?'Aucun avis' :
                  (count($listComments) > 1 ? count($listComments).' avis' : count($listComments).' avis');

          $nbPages = ceil(count($listComments)/$this->nbPerPage);

          return $this->render('SEPlatformBundle:Admin:listComments.html.twig',
              array(
                  'titleResult'=>$titleResult,
                  'nbPages'     => $nbPages,
                  'page'        => $page,
                  'listComments'=>$listComments
              ));
        }

        /**
         * @Security("has_role('ROLE_SUPER_ADMIN')")
         */
        public function mailAction(Request $request){
          $mailer  = $this->get('se_platform.mailer');

          $userMailing = $request->query->get('_email_mailing');
          $bodyMailing = $request->query->get('_email_mailing_body');

          $userNoactif = $request->query->get('_email_noactif');
          $bodyNoactif = $request->query->get('_email_noactif_body');

          $userNocomplet = $request->query->get('_email_nocomplet');
          $bodyNocomplet = $request->query->get('_email_nocomplet_body');

          $this->sendMailing($request, $mailer, $userMailing, $bodyMailing);
          $this->sendNoactif($request, $mailer, $userNoactif, $bodyNoactif);
          $this->sendNocomplet($request, $mailer, $userNocomplet, $bodyNocomplet);

          return $this->render('SEPlatformBundle:Admin:mail.html.twig');
        }

        private function sendMailing(Request $request, $mailer, $userMailing, $bodyMailing){
          $session = $request->getSession();

          if ($userMailing !== NULL && $userMailing !== '' && $bodyMailing !== NULL && $bodyMailing !== ''){

            $userMailing =str_replace(' ', '', $userMailing);
            $userMailing = strtolower($userMailing);

            $senderMailing = $request->query->get('_title_mailing');
            $subjectMailing = $request->query->get('_subject_mailing');



            $toList = explode(',' ,$userMailing);
            $mailer->sendAdminEmail($senderMailing, $subjectMailing, $toList, $bodyMailing);
            $session->getFlashBag()->add('sendSuccess','Mailing envoyé OK.');

            return $this->redirectToRoute('se_platform_admin_mail');
            }
        }

        private function sendNoactif(Request $request, $mailer, $userNoactif, $bodyNoactif){
          $session = $request->getSession();

          if ($userNoactif !== NULL && $userNoactif !== '' && $bodyNoactif !== NULL && $bodyNoactif !== ''){

            $userNoactif =str_replace(' ', '', $userNoactif);
            $userNoactif = strtolower($userNoactif);

            $senderNoactif = $request->query->get('_title_noactif');
            $subjectNoactif = $request->query->get('_subject_noactif');

            $toList = explode(',' ,$userNoactif);

            $mailer->sendAdminEmail($senderNoactif, $subjectNoactif, $toList, $bodyNoactif);
            $session->getFlashBag()->add('sendSuccess','No actif mail envoyé OK.');

            return $this->redirectToRoute('se_platform_admin_mail');
            }
        }

        private function sendNocomplet(Request $request, $mailer, $userNocomplet, $bodyNocomplet){
          $session = $request->getSession();

          if ($userNocomplet !== NULL && $userNocomplet !== '' && $bodyNocomplet !== NULL && $bodyNocomplet !== ''){

            $userNocomplet =str_replace(' ', '', $userNocomplet);
            $userNocomplet = strtolower($userNocomplet);

            $senderNocomplet = $request->query->get('_title_nocomplet');
            $subjectNocomplet = $request->query->get('_subject_nocomplet');

            $toList = explode(',' ,$userNocomplet);
            $mailer->sendAdminEmail($senderNocomplet, $subjectNocomplet, $toList, $bodyNocomplet);
            $session->getFlashBag()->add('sendSuccess','Non complet mail envoyé OK.');

            return $this->redirectToRoute('se_platform_admin_mail');
            }
        }
}
