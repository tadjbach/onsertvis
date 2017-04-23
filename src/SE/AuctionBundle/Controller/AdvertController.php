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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class AdvertController extends Controller
{
    private $nbPerPage = 36;
    private $countAuction = 0;
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

                return $this->redirectToRoute('se_auction_advert_list_by_user');
            }
        }

        return $this->render('SEAuctionBundle:Advert:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function listAction(Request $request, $page)
    {
        $title = $request->get('title');
        $category = $request->get('category');
        $region = $request->get('region');
        $departement = $request->get('departement');
        $city = $request->get('city');
        
        $em=$this->getDoctrine()
            ->getManager();

         $listAdverts = $em
            ->getRepository('SEAuctionBundle:Advert')
            ->getAdverts($title, $category, $region, $departement, $city, $page, $this->nbPerPage);
         
         $listCategory=$em
                 ->getRepository('SEPortalBundle:Category')
                 ->findAll();
         
        $listRegions=$em
                ->getRepository('SEPortalBundle:Region')
                ->findAll();

        $listDpt = $em->getRepository('SEPortalBundle:Departement')
                    ->getDptByRegion($region);
        
        $countAdvert = count($listAdverts);
        
        
        $nbPages = ceil(count($listAdverts)/$this->nbPerPage);

        $titleResult = $countAdvert == 0 ?'Aucune demande trouvée !' :
                (count($listAdverts) > 1 ? count($listAdverts).' résultats' :  
            count($listAdverts).' résultat')
                ;
        
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
            'titleResult'     => $titleResult
        ));
    }
    
    public function getDptByRegionAction(Request $request){
        $em=$this->getDoctrine()
            ->getManager();
        
        if($request->isXmlHttpRequest())
        {
            $regionId = $request->request->get('region');

                $listDpt = $em->getRepository('SEPortalBundle:Departement')
                        ->getDptByRegion($regionId);

                $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
JsonEncoder()));
                
                $json = $serializer->serialize($listDpt, 'json');

                return new Response($json);
        }
        
        return new Response(null);
    }
    
    public function getCityByRegionAndDptAction(Request $request){
        $em = $this
                ->getDoctrine()
                ->getManager();
        
        if($request->isXmlHttpRequest())
        {
            $regionId = $request->request->get('region');
            $dptId = $request->request->get('departement');
            
            $listCity = $em
                        ->getRepository('SEPortalBundle:City')
                        ->getCityByRegionAndDpt($regionId, $dptId);

            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
JsonEncoder()));
                
            $json = $serializer->serialize($listCity, 'json');

            return new Response($json);
        }
        
        return new Response(null);
    }

    public function viewAction($id)
    {
         $em=$this->getDoctrine()
            ->getManager();

        $advert=$em->find('SEAuctionBundle:Advert', $id);
        $countAuctions = '0 enchère';

        $userConnect = $this->isGranted('IS_AUTHENTICATED_REMEMBERED');
        $userApp = $this->getUser();
        $userAdvert = $advert->getUser();
       
        $owner = $userApp === $userAdvert;
        
        $disabled = $userConnect ? ($owner ? 'btn-default disabled' : 'se-btn-action')
                : 'btn-default disabled';
        
        $listAuctions=$em->getRepository('SEAuctionBundle:Auction')
            ->findBy(
                array('advert'=>$advert),
                array('dateCreation'=>'desc'),
                $limit=null,
                $offset=null);

        if (count($listAuctions) > 0) {
           $countAuctions = count($listAuctions) <= 1 ? count($listAuctions).' enchère' : count($listAuctions).' enchères';
        }
        
        if (null===$advert){
            throw new NotFoundHttpException("Oops, La demande  que vous cherchez n'existe pas.");
        }

        return $this->render('SEAuctionBundle:Advert:view.html.twig', array(
            'advert'=>$advert,
            'listAuctions'=>$listAuctions,
            'countAuctions'=>$countAuctions,
            'connectAndOwner'=>$disabled
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

            $advert->setIsDeleted(true);
            $advert->setIsPublished(false);
            $advert->setIsEnabled(false);

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
        $suffix = '0 enchère';
        $price = '-- €';
        
        $lastAuction = $em
            ->getRepository('SEAuctionBundle:Auction')
            ->getLastAuction($advertId);
        
        if (count($lastAuction) > 0) {
           $price = $this->priceFormat($lastAuction[0]->getValue());
           $suffix = count($lastAuction) <= 1 ? count($lastAuction).' enchère' : count($lastAuction).' enchères';
        }
        
        $auctionValue = '<p class="text-left se-nb-auction">'.$suffix.'</p><div class="text-right"><span class="label se-price-badge">'.$price.'</span></div>';
        
        return new Response(
            $auctionValue
        );
    }
    
    private function priceFormat($price){
        return number_format($price, 0,' ',' ').' €';
    }
}

