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
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    private $nbPerPage = 36;
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addAction(Request $request){

        // On crée un objet Advert
        $advert = new Advert();
        
        $advert->setUser($this->getUser());
        
        // On crée le FormBuilder grâce au service form factory
        $form = $this->createForm(AdvertType::class, $advert);

        if ($request->isMethod('POST')){
            $form->handleRequest($request);

            if ($form->isValid()){
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($advert);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Demande bien enregistrée.');

                return $this->redirectToRoute('se_auction_advert_view', array('id'=>$advert->getId()));
            }
        }

        return $this->render('SEAuctionBundle:Advert:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function listAction($page)
    {
        $em=$this->getDoctrine()
            ->getManager();

         $listAdverts = $em
            ->getRepository('SEAuctionBundle:Advert')
            ->getAdverts($page, $this->nbPerPage);
         
         $listCategory=$em
                 ->getRepository('SEPortalBundle:Category')
                 ->findAll();

        $listRegions=$em
                ->getRepository('SEPortalBundle:Region')
                ->findAll();

        $listDpt = $em->getRepository('SEPortalBundle:Departement')
                    ->findAll();
        
        $nbPages = ceil(count($listAdverts)/$this->nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }

        return $this->render('SEAuctionBundle:Advert:list.html.twig', array(
            'listAdverts'=> $listAdverts,
            'listCategory'=>$listCategory,
            'listRegions'=>$listRegions,
            'listDpt'=>$listDpt,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'count'     => count($listAdverts)
        ));
    }

    public function viewAction($id)
    {
         $em=$this->getDoctrine()
            ->getManager();

        $advert=$em->find('SEAuctionBundle:Advert', $id);

        $listAuctions=$em->getRepository('SEAuctionBundle:Auction')
            ->findBy(
                array('advert'=>$advert),
                array('value'=>'asc'),
                $limit=null,
                $offset=null);

        if (null===$advert){
            throw new NotFoundHttpException("Oops, La demande  que vous cherchez n'existe pas.");
        }

        return $this->render('SEAuctionBundle:Advert:view.html.twig', array(
            'advert'=>$advert,
            'listAuctions'=>$listAuctions
        ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function editAction($id, Request $request)
    {
         $advert=$this->getDoctrine()
            ->getManager()
            ->find('SEAuctionBundle:Advert', $id);

         if (null===$advert){
            throw new NotFoundHttpException("Oops, La demande  que vous cherchez n'existe pas.");
        }

        $form = $this->createForm(AdvertEditType::class, $advert);

        if ($request->isMethod('POST')){

            $form->handleRequest($request);

            if ($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                
                $advert->setDateUpdate(new \DateTime());
                
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Demande bien modifiée');

                return $this->redirectToRoute('se_auction_advert_view', array('id'=>$advert->getId()));
            }
        }

        return $this->render('SEAuctionBundle:Advert:edit.html.twig', array(
            'form' => $form->createView(),
            'advert'=>$advert
        ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function deleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'demande $id
        $advert = $em->getRepository('SEAuctionBundle:Advert')->find($id);

       if (null===$advert){
            throw new NotFoundHttpException("Oops, La demande que vous cherchez n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'demande contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($advert);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "La demande a bien été supprimée.");

            return $this->redirect($this->generateUrl('se_auction_advert_list_by_user'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('SEAuctionBundle:Advert:delete.html.twig', array(
            'advert' => $advert,
            'form'   => $form->createView()
        ));
    }

   public function listByCategoryAction($catgeory)
    {
          $catgeoryLabelNormal=$this->getDoctrine()
            ->getManager()->getRepository('SEPortalBundle:Category')
            ->findBy(
                array('slug'=>$catgeory)
            );

        $listAdverts=$this->getDoctrine()
            ->getManager()->getRepository('SEAuctionBundle:Advert')
            ->getAdvertByCategory($catgeory, 10);

        return $this->render('SEAuctionBundle:Advert:listByCategory.html.twig', array(
            'listAdverts'=>$listAdverts,
            'catgeoryLabelNormal'=>$catgeoryLabelNormal
        ));
    }
    
    public function listByRegionAction($region)
    {
        $regionLabelNormal=$this->getDoctrine()
            ->getManager()->getRepository('SEPortalBundle:Region')
            ->findBy(
                array('slug'=>$region)
            );

        $listAdverts=$this->getDoctrine()
            ->getManager()->getRepository('SEAuctionBundle:Advert')
            ->getAdvertByRegion($region, 10);

        return $this->render('SEAuctionBundle:Advert:listByRegion.html.twig', array(
            'listAdverts'=>$listAdverts,
            'regionLabelNormal'=>$regionLabelNormal
        ));
    }
    
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listByUserAction($page)
    {
        $user = $this->getUser();
        $listAdverts=$this->getDoctrine()
            ->getManager()->getRepository('SEAuctionBundle:Advert')
            ->getAdvertByUser($user->getId(), $page, $this->nbPerPage);

        $nbPages = ceil(count($listAdverts)/$this->nbPerPage);

        return $this->render('SEAuctionBundle:Advert:listByUser.html.twig', array(
            'listAdverts'=>$listAdverts,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'count'     => count($listAdverts)

        ));
    }
    
    public function viewLastAuctionAction($advertId)
    {
        $em = $this->getDoctrine()->getManager();
        $auctionValue = 'Aucune enchère';
        
        $lastAuction = $em
            ->getRepository('SEAuctionBundle:Auction')
            ->getLastAuction($advertId);
        
            if (count($lastAuction) > 0) {
               $price =  number_format($lastAuction[0]->getValue(),0,' ',' ');
                $auctionValue = $price.' €';
            }
        return new Response(
            $auctionValue
        );
    }
    
    public function countByCategoryAction($categoryId)
    {
        $em = $this->getDoctrine()->getManager();
        $res = '(0)';
        
        $countByCategory = $em
            ->getRepository('SEAuctionBundle:Advert')
            ->getCountByCategory($categoryId);
        
            if (count($countByCategory) > 0) {
               $count = count($countByCategory);
                $res = '('.number_format($count, 0, ' ' ,' ').')';
            }
        return new Response(
            $res
        );
    }
    
     public function listByCriteriaAction($category, $region, $dpt, $city, $page)
    {
        $em=$this->getDoctrine()
            ->getManager();

         $listAdverts = $em
            ->getRepository('SEAuctionBundle:Advert')
            ->getAdvertsByFilter($category, $region, $dpt, $city, $page, $this->nbPerPage);
         
         $listCategory=$em
                 ->getRepository('SEPortalBundle:Category')
                 ->findAll();

        $listRegions=$em
                ->getRepository('SEPortalBundle:Region')
                ->findAll();

        $listDpt = $em->getRepository('SEPortalBundle:Departement')
                    ->findAll();
        
        $nbPages = ceil(count($listAdverts)/$this->nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page"'.$page.'" inexistante');
        }

        return $this->render('SEAuctionBundle:Advert:list.html.twig', array(
            'listAdverts'=> $listAdverts,
            'listCategory'=>$listCategory,
            'listRegions'=>$listRegions,
            'listDpt'=>$listDpt,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'count'     => count($listAdverts)
        ));
    }
}

