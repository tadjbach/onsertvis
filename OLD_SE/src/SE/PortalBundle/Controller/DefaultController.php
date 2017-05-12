<?php

namespace SE\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SEPortalBundle:Default:index.html.twig');
    }
}
