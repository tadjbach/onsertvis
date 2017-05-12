<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $listCategory=$this->getDoctrine()
            ->getManager()->getRepository('SEPlatformBundle:Category')
            ->findAllOrder();

        $listRegion =$this->getDoctrine()
            ->getManager()->getRepository('SEPlatformBundle:Region')
            ->findAllOrder();

        return $this->render('SEPlatformBundle:Default:index.html.twig', array(
            'listCategory'=>$listCategory,
            'listRegion'=>$listRegion
        ));
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
