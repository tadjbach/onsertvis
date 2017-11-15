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
use SE\PlatformBundle\Form\PotentialUserType;
use SE\PlatformBundle\Entity\PotentialUser;

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
       public function listUsersPotentialAction(Request $request, $page){
         $em = $this->getDoctrineManager();
         $userNameOrEmail = $request->query->get('userNameOrEmail');

         $listPotentialUsers = $em->getRepository('SEPlatformBundle:PotentialUser')
              ->getUserPotentialListAdmin($page, $userNameOrEmail, $this->nbPerPage);

        $titleResult = count($listPotentialUsers) == 0 ?'Aucun utilisateur' :
                (count($listPotentialUsers) > 1 ? count($listPotentialUsers).' utilisateurs' :
            count($listPotentialUsers).' utilisateur');

         $nbPages = ceil(count($listPotentialUsers)/$this->nbPerPage);

        return $this->render('SEPlatformBundle:Admin:listPotentialUsers.html.twig',
                array(
                  'titleResult'=>$titleResult,
                  'userNameOrEmail'     => $userNameOrEmail,
                  'nbPages'      => $nbPages,
                  'page'         => $page,
                  'listPotentialUsers'    =>$listPotentialUsers
                ));
       }

       /**
        * @Security("has_role('ROLE_SUPER_ADMIN')")
        */
        public function addUsersPotentialAction(Request $request){
          $em = $this->getDoctrineManager();
          $session = $request->getSession();

          $email = $request->request->get('se_platformbundle_potentialuser')['email'];

          $ExistPotentialUser = $em->getRepository('SEPlatformBundle:PotentialUser')->findByMail($email);
          $potentialUser = new PotentialUser();
          $form = $this->createForm(PotentialUserType::class, $potentialUser);


          if ($ExistPotentialUser != null and $ExistPotentialUser[0] != null){
                $request->getSession()->getFlashBag()->add('error', "L'utilisateur existe déja");
            }
            else {

              if ($request->isMethod('POST')){
                  $form->handleRequest($request);

                  if ($form->isValid()){
                     //$advert->getImage()->upload();
                      $em->persist($potentialUser);
                      $em->flush();
                      $request->getSession()->getFlashBag()->add('success', "L'utilisateur ajouté avec succes");
                      return $this->redirectToRoute('se_platform_admin_list_users_portential');
                  }
              }
            }
          return $this->render('SEPlatformBundle:Admin:addUsersPotentiel.html.twig', array(
              'form' => $form->createView()
          ));
        }

        /**
         * @Security("has_role('ROLE_SUPER_ADMIN')")
         */
        public function editUsersPotentialAction($id, Request $request){

          $em = $this->getDoctrineManager();
          $session = $request->getSession();
          $PotentialUser = $em->find('SEPlatformBundle:PotentialUser', $id);

          if (null===$PotentialUser){
                throw new NotFoundHttpException("Oops, user  que vous cherchez n'existe pas.");
            }

                $form = $this->createForm(PotentialUserType::class, $PotentialUser);

                if ($request->isMethod('POST')){

                    $form->handleRequest($request);
                    if ($form->isValid()){

                        $em->flush();

                        $request->getSession()->getFlashBag()->add('info', "L'utilisateur a bien été modifié.");

                        return $this->redirectToRoute('se_platform_users_portential_edit',
                                    array('id'=>$PotentialUser->getId()));
                    }
                  }

            return $this->render('SEPlatformBundle:Admin:editUsersPotentiel.html.twig', array(
                'form' => $form->createView()
            ));
        }

        /**
         * @Security("has_role('ROLE_SUPER_ADMIN')")
         */
        public function mailUsersPotentialAction($id, Request $request){
              $em = $this->getDoctrineManager();
              $mailer  = $this->get('se_platform.mailer');
              $session = $request->getSession();
              $subjectMailing = 'Ce mail est pour vous';

              $PotentialUser = $em->find('SEPlatformBundle:PotentialUser', $id);
              $PotentialUser->setIsSendMail(1);
              $PotentialUser->setDateSendMail(new \DateTime());

              $em->persist($PotentialUser);
              $em->flush();

              if ($PotentialUser->getIsJobber()) {
                $senderMailing = 'Vous proposez vos services ? Service Enchère';
                $body = $this->renderView(
                     'SEPlatformBundle:Admin:mailPotentielJobber.html.twig',
                     array('PotentialUser'=> $PotentialUser)
                 );
              }
              else {
                  $senderMailing = 'Vous cherchez une aide ? Service Enchère';
                  $body = $this->renderView(
                       'SEPlatformBundle:Admin:mailPotentielUser.html.twig',
                       array('PotentialUser'=> $PotentialUser)
                   );
              }

               $mailer->sendAdminEmail($senderMailing, $subjectMailing, $PotentialUser->getEmail(), $body);
               $session->getFlashBag()->add('info','Mail envoyé à '.$PotentialUser->getEmail());

               return $this->redirectToRoute('se_platform_admin_list_users_portential');
        }
        /**
         * @Security("has_role('ROLE_SUPER_ADMIN')")
         */
        public function deleteUsersPotentialAction($id, Request $request){
          $em = $this->getDoctrineManager();
          $session = $request->getSession();
          $PotentialUser = $em->find('SEPlatformBundle:PotentialUser', $id);

          if (null === $PotentialUser) {
            throw new NotFoundHttpException("L'user d'id ".$id." n'existe pas.");
          }

          $form = $this->get('form.factory')->create();

          if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
                  $em->remove($PotentialUser);
                  $em->flush();

                  $request->getSession()->getFlashBag()->add('info', "L'utilisateur a bien été supprimée.");

                return $this->redirectToRoute('se_platform_admin_list_users_portential');
            }

            return $this->render('SEPlatformBundle:Admin:deleteUsersPotentiel.html.twig', array(
              'form'   => $form->createView(),
              'user'=> $PotentialUser
            ));

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

         $titleResult = count($listUsers) == 0 ?'Aucun utilisateur' :
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

          $this->sendMailing($request, $mailer, $userMailing, $bodyMailing);

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
}
