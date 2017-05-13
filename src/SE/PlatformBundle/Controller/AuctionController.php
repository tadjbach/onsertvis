<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuctionController extends Controller
{
    /* PRIVATE VAR */

    /* PRIVATE FUNCTION */

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
              ));

      return $content;
    }

//Admin
    public function userReceiveListAction(Request $request)
    {
      $content = $this->render('SEPlatformBundle:Auction:userReceiveList.html.twig',
              array(
              ));

      return $content;
    }
}
