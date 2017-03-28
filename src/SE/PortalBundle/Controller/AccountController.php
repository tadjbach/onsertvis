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

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function advertListAction($page){
        $nbPerPage = 9;

        $listAdverts = array();

        $nbPages = ceil(count($listAdverts)/$nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }

        return $this->render('SEPortalBundle:Account:advertList.html.twig', array(
            'nbPages'     => $nbPages,
            'page'        => $page
        ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function auctionListAction($page){
        $nbPerPage = 9;

        $listAdverts = array();

        $nbPages = ceil(count($listAdverts)/$nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }

        return $this->render('SEPortalBundle:Account:auctionList.html.twig', array(
            'nbPages'     => $nbPages,
            'page'        => $page
        ));
    }
}