<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MessageController extends Controller
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

//Admin
    public function viewAction($slug, $id)
    {

    }

//Super ADMIN
    public function listAction(Request $request)
    {

    }

//Admin
    public function userListAction(Request $request)
    {
      $content = $this->render('SEPlatformBundle:Message:userList.html.twig',
              array(
              ));

      return $content;
    }
}
