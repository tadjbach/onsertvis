<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('SEPlatformBundle:Default:index.html.twig');

        return new Response($content);
    }

    public function cguAction()
   {
       return $this->render('SEPlatformBundle:Default:cgu.html.twig');
   }

   public function helpAction()
   {
       return $this->render('SEPlatformBundle:Default:help.html.twig');
   }

   public function resumAction()
   {
       return $this->render('SEPlatformBundle:Default:resum.html.twig');
   }
}
