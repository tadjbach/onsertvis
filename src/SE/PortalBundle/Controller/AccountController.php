<?php
/**
 * Created by PhpStorm.
 * User: bach_tadj
 * Date: 23/03/2017
 * Time: 22:37
 */

namespace SE\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AccountController extends Controller
{
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function dashboardAction(){
        return $this->render('SEPortalBundle:Account:dashboard.html.twig');
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function profileAction(){
        return $this->render('SEPortalBundle:Account:profile.html.twig');
    }
}