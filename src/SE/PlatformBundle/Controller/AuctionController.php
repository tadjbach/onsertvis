<?php

namespace SE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SE\PlatformBundle\Form\AuctionType;
use SE\PlatformBundle\Entity\Advert;
use SE\PlatformBundle\Entity\User;
use SE\PlatformBundle\Entity\Auction;

class AuctionController extends Controller
{
  /* PRIVATE VAR */
  private $nbPerPage = 30;
  private $em;
  private $advert;
  private $state;

    /* PRIVATE FUNCTION */
    private function getDoctrineManager(){
      return $this->getDoctrine()->getManager();
    }

    private function priceFormat($price){
          return number_format($price, 0,' ',' ').' €';
      }

    private function getListUserFilterAttributes(Request $request){
        $this->advert = $request->query->get('advert');
        $this->state = $request->query->get('state');
    }

    private function getAuctionState(){
        $em = $this->getDoctrineManager();
        return $em->getRepository('SEPlatformBundle:AuctionState')->findAll();
    }

    public function getNbAuctionAction($advertId){
        $em = $this->getDoctrineManager();
        $nbAuction = 'aucune enchère';
        $lastAuction = $em
            ->getRepository('SEPlatformBundle:Auction')
            ->getLastAuction($advertId);

      if (count($lastAuction) > 0) {
           $nbAuction = count($lastAuction) <= 1 ? count($lastAuction).' enchère' : count($lastAuction).' enchères';
        }

        return new Response(
            $nbAuction
        );
    }

    public function getLastAuctionAction($advertId){
        $em = $this->getDoctrineManager();
        $price = '-- €';
        $lastAuction = $em
            ->getRepository('SEPlatformBundle:Auction')
            ->getLastAuction($advertId);

      if (count($lastAuction) > 0) {
           $price = $this->priceFormat($lastAuction[0]->getValue());
        }

        return new Response(
            $price
        );
    }

    /* PUBLIC FUNCTION */
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addAction(Request $request, $advertSlug, $advertId){
        $em = $this->getDoctrineManager();
        $session = $request->getSession();

        $advert=$em->find('SEPlatformBundle:Advert', $advertId);
        $advert->setAuctionState(1);

        $auction = new Auction();

        $auction->setUser($this->getUser());
        $auction->setAdvert($advert);

        $form = $this->createForm(AuctionType::class, $auction);

        if ($request->isMethod('POST')){
            $form->handleRequest($request);

            if ($form->isValid()){

                $em->persist($auction);
                $em->flush();

                $session->getFlashBag()->add('addSuccess','Enchère bien enregistrée.');

                return $this->redirectToRoute('se_platform_advert_validate', array('action'=>'ajouter'));
            }
        }

        return $this->render('SEPlatformBundle:Auction:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    //Admin
    public function editAction($id){

    }

    //Admin
    public function deleteAction($id){

    }


    public function viewAction($slug, $id)
    {

    }

    //Super ADMIN
    public function listAction($advertId){
      $em = $this->getDoctrineManager();
      $advert=$em->find('SEPlatformBundle:Advert', $advertId);

      $listAuctions=$em->getRepository('SEPlatformBundle:Auction')
            ->findBy(
                array('advert'=>$advert),
                array('dateCreation'=>'desc'),
                $limit=null,
                $offset=null);

      $content = $this->render('SEPlatformBundle:Auction:list.html.twig',
              array(
                'advert'=>$advert,
                'listAuctions'=>$listAuctions,
                'countAuctions'=>count($listAuctions),
              ));

      return $content;
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function userSendListAction(Request $request, $page){
      $em = $this->getDoctrineManager();
      $user = $this->getUser();

      $this->getListUserFilterAttributes($request);

      $listAuctionUser = $em->getRepository('SEPlatformBundle:Auction')
           ->getAuctionSendUser($this->advert, $this->state, $user->getId(), $page, $this->nbPerPage);

      $listAdvertAuction = $em->getRepository('SEPlatformBundle:Auction')
             ->getAdvertByUser($user->getId());

      $titleResult = count($listAuctionUser) == 0 ?'Aucune enchère' :
              (count($listAuctionUser) > 1 ? count($listAuctionUser).' enchères' :
          count($listAuctionUser).' enchère');

          $nbPages = ceil(count($listAuctionUser)/$this->nbPerPage);

      $content = $this->render('SEPlatformBundle:Auction:userSendList.html.twig',
      array(
        'titleResult'=>$titleResult,
        'nbPages'     => $nbPages,
        'page'        => $page,
        'advert'=> $this->advert,
        'state'=> $this->state,
        'listAdvertAuction'=>$listAdvertAuction,
        'listAuctionUser'=>$listAuctionUser,
        'listState'=>$this->getAuctionState()
      ));

      return $content;
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function userReceiveListAction(Request $request, $page){
      $em = $this->getDoctrineManager();
      $user = $this->getUser();

      $this->getListUserFilterAttributes($request);

      $listAdverstByUser=$em->getRepository('SEPlatformBundle:Advert')
           ->getAdvertByUser($user->getId());

      $listAdvertAuction = $em->getRepository('SEPlatformBundle:Auction')
           ->getAuctionReceiveUser($this->advert, $this->state, $user->getId(), $page, $this->nbPerPage);

      $titleResult = count($listAdvertAuction) == 0 ?'Aucune enchère' :
              (count($listAdvertAuction) > 1 ? count($listAdvertAuction).' enchères' :
          count($listAdvertAuction).' enchère');

          $nbPages = ceil(count($listAdvertAuction)/$this->nbPerPage);


      return $this->render('SEPlatformBundle:Auction:userReceiveList.html.twig',
          array(
            'titleResult'=>$titleResult,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'advert'=> $this->advert,
            'state'=> $this->state,
            'listAdvertAuction'=>$listAdvertAuction,
            'listAdvertUser'=>$listAdverstByUser,
            'listState'=>$this->getAuctionState()
          ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function acceptAction(Request $request, $auctionId){
      $em = $this->getDoctrineManager();
      $session = $request->getSession();
      $user = $this->getUser();
      $auction=$em->find('SEPlatformBundle:Auction', $auctionId);
      $advert = $auction->getAdvert();

      if ($auction !== null && $user !== null){

          $auction->setState(2);

          $em->persist($auction);
          $em->flush();

          $session->getFlashBag()->add('addSuccess','Vous avez bien accepté la proposition à '.$auction->getValue());

          return $this->redirectToRoute('se_platform_advert_validate', array('action'=>'accept'));
      }

    }
}
