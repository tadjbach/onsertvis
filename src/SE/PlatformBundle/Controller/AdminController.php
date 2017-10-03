<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AdminController extends Controller
{
  /* PRIVATE VAR */
  private $nbPerPage = 30;
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

              $listLoseAuctions = $em
                  ->getRepository('SEPlatformBundle:Auction')
                  ->getStateAuctionUser($id, 3);

           $user=$em->find('SEPlatformBundle:User', $id);

           return $this->render('SEPlatformBundle:Admin:viewUser.html.twig',
                       array(
                         'user'=> $user,
                        'calendar'=>$calendar,
                        'payment'=>$payment,
                       'listComment'=>$listComment,
                       'countReceivedAuction'=>count($listReceivedAuctions),
                       'countProposedAuction'=>count($listProposedAuctions),
                       'countAcceptedAuction'=>count($listAcceptedAuctions),
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

                $body = $this->renderView(
                     'SEPlatformBundle:Advert:deactiveMail.html.twig',
                     array('receiver' => $advert->getUser(),
                          'advert'=> $advert->getTitle())
                 );

                $mailer->sendEmail($advert, "Validation de votre demande", "Votre demande ".$advert->getTitle(), $advert->getUser()->getEmail(), $body);
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

             $mailer  = $this->get('se_platform.mailer');

             $em->persist($advert);
             $em->flush();

             if ($action == 1) {
               $body = $this->renderView(
                      'SEPlatformBundle:Advert:activeMail.html.twig',
                      array('receiver' => $advert->getUser(),
                           'advert'=> $advert->getTitle())
                  );
                  $mailer->sendEmail($advert, "Validation de votre demande", "Votre demande ".$advert->getTitle(), $advert->getUser()->getEmail(), $body);
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
}
