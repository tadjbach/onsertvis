<?php

namespace SE\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AdvertController extends Controller
{
    public function listAction($page)
    {
        $nbPerPage = 9;

        $listAdverts = array();

        $nbPages = ceil(count($listAdverts)/$nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }


        return $this->render('SEPortalBundle:Advert:list.html.twig', array(
            'nbPages'     => $nbPages,
            'page'        => $page
        ));

    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addAction()
    {
        return $this->render('SEPortalBundle:Advert:add.html.twig');
    }

    public function viewAction($id)
    {
        return $this->render('SEPortalBundle:Advert:view.html.twig');
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function editAction($id)
    {
        return $this->render('SEPortalBundle:Advert:edit.html.twig');
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function deleteAction($id)
    {
        return $this->render('SEPortalBundle:Advert:delete.html.twig');
    }

    public function listByRegionAction($region, $page)
    {
        $nbPerPage = 9;

        $listAdverts = array();

        $nbPages = ceil(count($listAdverts)/$nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }

        return $this->render('SEPortalBundle:Advert:list.html.twig', array(
            'nbPages'     => $nbPages,
            'page'        => $page
        ));
    }

    public function listByCategoryAction($category, $page)
    {
        $nbPerPage = 9;

        $listAdverts = array();

        $nbPages = ceil(count($listAdverts)/$nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }

        return $this->render('SEPortalBundle:Advert:list.html.twig', array(
            'nbPages'     => $nbPages,
            'page'        => $page
        ));
    }
}
