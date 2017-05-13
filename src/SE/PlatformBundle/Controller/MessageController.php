<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MessageController extends Controller
{
    /* PRIVATE VAR */
    private $em;
    private $advert;

    /* PRIVATE FUNCTION */
    private function getDoctrineManager(){
      return $this->getDoctrine()->getManager();
    }

    private function getListUserFilterAttributes(Request $request){
        $this->advert = $request->query->get('advert');
    }

    private function getAdvertByUser(){
      $em = $this->getDoctrineManager();
      $user;
      //return $em->getRepository('SEPlatformBundle:Advert')->findByUser($user);

      $list = array(
        array('id'=>1, 'title'=>'Mon annonce 1', 'state'=>1),
        array('id'=>2, 'title'=>'Mon annonce 2', 'state'=>1),
        array('id'=>3, 'title'=>'Mon annonce 3', 'state'=>2)
      );
      return $list;
    }

    private function getAdvertByMessage(){
      $em = $this->getDoctrineManager();
      $user;
      //return $em->getRepository('SEPlatformBundle:Advert')->findByUser($user);

      $list = array(
        array('id'=>1, 'title'=>'Mon annonce 1', 'state'=>1),
        array('id'=>2, 'title'=>'Mon annonce 2', 'state'=>1),
        array('id'=>3, 'title'=>'Mon annonce 3', 'state'=>2)
      );
      return $list;
    }
    /* PUBLIC FUNCTION */

//Admin
    public function addAction(Request $request){
    }

//Admin
    public function editAction($id){

    }

//Admin
    public function deleteAction($id){

    }

//Admin
    public function viewAction($slug, $id)
    {

    }

//Super ADMIN
    public function listAction(Request $request)
    {

    }

//Admin
    public function listUserAction(Request $request)
    {
      return $this->render('SEPlatformBundle:Message:listUser.html.twig',
      array(
        'advert'=> $this->advert,
        'listAdvertUser'=>$this->getAdvertByUser(),
        'listAdvertMessage'=>$this->getAdvertByMessage()
      ));
    }
}
