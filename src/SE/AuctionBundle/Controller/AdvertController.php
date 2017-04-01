<?php

namespace SE\AuctionBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use SE\AuctionBundle\Form\AdvertEditType;
use SE\AuctionBundle\Form\AdvertType;
use SE\AuctionBundle\Entity\Advert;
use SE\AuctionBundle\Event\MessagePostEvent;
use SE\AuctionBundle\Event\AuctionEvents;

class AdvertController extends Controller
{
        /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addAction(Request $request){

        // On crée un objet Advert
        $advert = new Advert();

        // On crée le FormBuilder grâce au service form factory
        $form = $this->createForm(AdvertType::class, $advert);

        if ($request->isMethod('POST')){
            $form->handleRequest($request);

            if ($form->isValid()){

            $em = $this->getDoctrine()->getManager();
            

            $em->persist($advert);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirectToRoute('se_auction_advert_view', array('id'=>$advert->getId()));
            }
        }

        return $this->render('SEAuctionBundle:Advert:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function listAction($page)
    {
        $nbPerPage = 9;

        $listAdverts = array();

        $nbPages = ceil(count($listAdverts)/$nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }


        return $this->render('SEAuctionBundle:Advert:list.html.twig', array(
            'nbPages'     => $nbPages,
            'page'        => $page
        ));
    }

    public function viewAction($id)
    {
        return $this->render('SEAuctionBundle:Advert:view.html.twig');
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function editAction($id)
    {
        return $this->render('SEAuctionBundle:Advert:edit.html.twig');
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function deleteAction($id)
    {
        return $this->render('SEAuctionBundle:Advert:delete.html.twig');
    }

    public function listByRegionAction($region, $page)
    {
        $nbPerPage = 9;

        $listAdverts = array();

        $nbPages = ceil(count($listAdverts)/$nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }

        return $this->render('SEAuctionBundle:Advert:list.html.twig', array(
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

        return $this->render('SEAuctionBundle:Advert:list.html.twig', array(
            'nbPages'     => $nbPages,
            'page'        => $page
        ));
    }
}

