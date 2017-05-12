<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AdvertController extends Controller
{
    /* PRIVATE VAR */
        /* Search filter */
        private $search;
        private $category;
        private $region;
        private $departement;
        private $city;
        private $postalCode;


    /* PRIVATE FUNCTION */
    private function getFilterAttributes(Request $request){
        $this->search = $request->query->get('search');
        $this->category = $request->query->get('category');
        $this->region = $request->query->get('region');
        $this->departement = $request->query->get('departement');
        $this->city = $request->query->get('city');
        $this->postalCode = $request->query->get('postalCode');
    }

    /* PUBLIC FUNCTION */
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addAction(Request $request){

        $session = $request->getSession();

        //Add Advert in DB
        $slug = 'annonce-title';

        $session->getFlashBag()->add('info','Annonce bien enregistré, elle sera validée dans moins de 24h.');


        return $this->redirectToRoute('se_platform_advert_view',
                array('slug'=> $slug,
                        'id'=>1));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function editAction($id){

    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function deleteAction($id){

    }

    public function viewAction($slug, $id)
    {
       /*
       - Pour une URL complete, par exemple pour un mail utiliser
        $url = $this
               ->get('router')
               ->generate('se_platform_advert_view',
                    array('slug'=> $slug,
                        'id'=> $id), UrlGeneratorInterface::ABSOLUTE_URL);

        * Et pour une utilisation dans Twig il faut remplacer le path() par url()
        *
        */

        return $this->render('SEPlatformBundle:Advert:view.html.twig',
                    array('slug'=> $slug,
                        'id'=> $id));
    }

    public function listAction(Request $request)
    {
       $this->getFilterAttributes($request);

        $content = $this->render('SEPlatformBundle:Advert:list.html.twig',
                array(
                    'search'=> $this->search,
                    'category'=> $this->category,
                    'region'=> $this->region,
                    'departement'=> $this->departement,
                    'city'=> $this->city,
                    'postalCode'=> $this->postalCode
                ));

        return $content;
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function userListAction(Request $request)
    {
       $this->getFilterAttributes($request);

        $content = $this->render('SEPlatformBundle:Advert:userList.html.twig',
                array(
                ));

        return $content;
    }
}
