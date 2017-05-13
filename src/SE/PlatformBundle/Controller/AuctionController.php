<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuctionController extends Controller
{
  /* PRIVATE VAR */
  private $em;
  private $advert;
  private $state;

    /* PRIVATE FUNCTION */
    private function getDoctrineManager(){
      return $this->getDoctrine()->getManager();
    }

    private function getListUserFilterAttributes(Request $request){
        $this->advert = $request->query->get('advert');
        $this->state = $request->query->get('state');
    }

    //TODO
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

    //TODO
    private function getAdvertByAuction(){
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

    //TODO
    private function getAuctionState(){
        $em = $this->getDoctrineManager();
        //return $em->getRepository('SEPlatformBundle:AuctionReceiveState')->findAll();

        $list = array(
          array('id'=>1, 'labelNormal'=>'En cours'),
          array('id'=>2, 'labelNormal'=>'Acceptée'),
          array('id'=>3, 'labelNormal'=>'Déclinée')
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

    public function viewAction($slug, $id)
    {

    }

    //Super ADMIN
    public function listAction(Request $request)
    {
      $content = $this->render('SEPlatformBundle:Auction:list.html.twig',
              array(
              ));

      return $content;
    }

    //Admin
    public function userSendListAction(Request $request)
    {
      $content = $this->render('SEPlatformBundle:Auction:userSendList.html.twig',
      array(
        'advert'=> $this->advert,
        'state'=> $this->state,
        'listAdvertAuction'=>$this->getAdvertByAuction(),
        'listState'=>$this->getAuctionState()
      ));

      return $content;
    }

//Admin
    public function userReceiveListAction(Request $request)
    {
      return $this->render('SEPlatformBundle:Auction:userReceiveList.html.twig',
          array(
            'advert'=> $this->advert,
            'state'=> $this->state,
            'listAdvertUser'=>$this->getAdvertByUser(),
            'listState'=>$this->getAuctionState()
          ));
    }
}
