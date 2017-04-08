<?php

namespace SE\AuctionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use SE\AuctionBundle\Form\AuctionType;
use SE\AuctionBundle\Entity\Advert;
use SE\AuctionBundle\Entity\User;
use SE\AuctionBundle\Entity\Auction;

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
    public function addAction(Request $request, $advertId){
      $em = $this->getDoctrine()->getManager();
      
        $advert=$em->find('SEAuctionBundle:Advert', $advertId);
        
        $auction = new Auction();
        
        $auction->setUser($this->getUser());
        $auction->setAdvert($advert);
        
        // On crée le FormBuilder grâce au service form factory
        $form = $this->createForm(AuctionType::class, $auction);

        if ($request->isMethod('POST')){
            $form->handleRequest($request);

            if ($form->isValid()){
                
                
                $em->persist($auction);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Message enchère est validée.');

                return $this->redirectToRoute('se_auction_advert_view', array('id'=>$advert->getId()));
            }
        }

        return $this->render('SEAuctionBundle:Auction:add.html.twig', array(
            'form' => $form->createView()
        ));
       
    }

    public function viewAction($id)
    {
        return $this->render('SEPortalBundle:Auction:view.html.twig');
    }
}