<?php

namespace SE\LayoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function allPageAction()
    {
        return $this->render('SELayoutBundle:Default:allPage.html.twig');
    }
    public function indexAction()
    {
        $listCategory=$this->getDoctrine()
            ->getManager()->getRepository('SEPortalBundle:Category')
            ->findAllOrder();

        $listRegion =$this->getDoctrine()
            ->getManager()->getRepository('SEPortalBundle:Region')
            ->findAllOrder();

        return $this->render('SELayoutBundle:Default:index.html.twig', array(
            'listCategory'=>$listCategory,
            'listRegion'=>$listRegion
        ));
    }

    public function cguAction()
    {
        return $this->render('SELayoutBundle:Static:cgu.html.twig');
    }

    public function cgvAction()
    {
        return $this->render('SELayoutBundle:Static:cgv.html.twig');
    }

    public function contactusAction()
    {
        return $this->render('SELayoutBundle:Static:contactus.html.twig');
    }

    public function helpAction()
    {
        return $this->render('SELayoutBundle:Static:help.html.twig');
    }

    public function joinusAction()
    {
        return $this->render('SELayoutBundle:Static:joinus.html.twig');
    }

    public function resumAction()
    {
        return $this->render('SELayoutBundle:Static:resum.html.twig');
    }
}
