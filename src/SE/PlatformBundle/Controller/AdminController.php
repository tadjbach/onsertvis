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
      private $userNameOrEmail;
      private $userRoles;
      private $userState;

      private function getDoctrineManager(){
        return $this->getDoctrine()->getManager();
      }

      private function getListUserFilterAttributes(Request $request){
          $this->userNameOrEmail = $request->query->get('userNameOrEmail');
          $this->userRoles = $request->query->get('userRoles');
          $this->userState = $request->query->get('userState');
      }

      private function getUserState(){

        $list = array(
             array('id'=>1, 'labelNormal'=>'Activé', 'state'=>1),
             array('id'=>2, 'labelNormal'=>'Désactivé', 'state'=>0)
           );
           return $list;
      }

      private function getUserRoles(){

        $list = array(
            array('id'=>1, 'labelNormal'=>'SUPER_ADMIN'),
            array('id'=>2, 'labelNormal'=>'ROLE_AUTEUR'),
            array('id'=>3, 'labelNormal'=>'ROLE_USER')
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
               ->getUserList(
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
        public function listAdvertsAction(){

        }

        /**
         * @Security("has_role('ROLE_SUPER_ADMIN')")
         */
        public function listAuctionsAction(){

        }

        /**
         * @Security("has_role('ROLE_SUPER_ADMIN')")
         */
        public function listMessagesAction(){

        }

        /**
         * @Security("has_role('ROLE_SUPER_ADMIN')")
         */
        public function listCommentsAction(){

        }
}
