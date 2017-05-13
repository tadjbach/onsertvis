<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /* PRIVATE VAR */

    /* PRIVATE FUNCTION */

    /* PUBLIC FUNCTION */


    public function addAction(Request $request){
      $content = $this->render('SEPlatformBundle:User:add.html.twig',
              array(
              ));

      return $content;
    }

//Admin
    public function editAction(){
      $content = $this->render('SEPlatformBundle:User:edit.html.twig',
              array(
              ));

      return $content;
    }

//Admin
    public function deleteAction(){
      $content = $this->render('SEPlatformBundle:User:delete.html.twig',
              array(
              ));

      return $content;
    }

    public function viewAction()
    {
      $content = $this->render('SEPlatformBundle:User:view.html.twig',
              array(
              ));

      return $content;
    }

    public function loginAction()
    {
      $content = $this->render('SEPlatformBundle:User:login.html.twig',
              array(
              ));

      return $content;
    }

//Admin
    public function logoutAction()
    {
      $content = $this->render('SEPlatformBundle:User:logout.html.twig',
              array(
              ));

      return $content;
    }

    //Super ADMIN
    public function listAction(Request $request)
    {
      $content = $this->render('SEPlatformBundle:User:list.html.twig',
              array(
              ));
    }
}
