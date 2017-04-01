<?php

namespace SE\AuctionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AuctionController extends Controller
{
     /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listAction($page){
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
    
     /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addAction()
    {
        return $this->render('SEPortalBundle:Auction:add.html.twig');
    }

    public function viewAction($id)
    {
        return $this->render('SEPortalBundle:Auction:view.html.twig');
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function editAction($id)
    {
        return $this->render('SEPortalBundle:Auction:edit.html.twig');
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function deleteAction($id)
    {
        return $this->render('SEPortalBundle:Auction:delete.html.twig');
    }
}