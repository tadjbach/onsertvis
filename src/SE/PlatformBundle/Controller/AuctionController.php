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

    private function getAdvertByUser(){
      $em = $this->getDoctrineManager();
      $user = $this->getUser();

      $listAdverstByUser=$em->getRepository('SEPlatformBundle:Advert')
           ->getAdvertByUser(null, null, $user->getId(), 1, 100000);

      return $listAdverstByUser;
    }

    private function getAuctionSendUser($advertId, $auctionState, $page){
      $em = $this->getDoctrineManager();
      $user = $this->getUser();

      $result = $em->getRepository('SEPlatformBundle:Auction')
           ->getAuctionSendUser($advertId, $auctionState, $user->getId(), $page, $this->nbPerPage);

      return $result;
    }

    private function getAuctionReceiveUser($advertId, $auctionState, $page){
      $em = $this->getDoctrineManager();
      $user = $this->getUser();

      $result = $em->getRepository('SEPlatformBundle:Auction')
           ->getAuctionReceiveUser($advertId, $auctionState, $user->getId(), $page, $this->nbPerPage);

      return $result;
    }

    private function getAdvertByAuctionUser(){
      $em = $this->getDoctrineManager();
      $user = $this->getUser();

      $result = $em->getRepository('SEPlatformBundle:Auction')
           ->getAdvertByUser($user->getId());

      return $result;
    }

    //TODO
    private function getAuctionState(){
        $em = $this->getDoctrineManager();
        //return $em->getRepository('SEPlatformBundle:AuctionReceiveState')->findAll();

        $list = array(
          array('id'=>1, 'labelNormal'=>'En cours'),
          array('id'=>2, 'labelNormal'=>'Acceptée'),
          array('id'=>3, 'labelNormal'=>'Déclinée')
        );

        return $list;
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
    public function listAction($advertId)
    {
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
    public function userSendListAction(Request $request, $page)
    {
      $this->getListUserFilterAttributes($request);

      $result = $this->getAuctionSendUser($this->advert, $this->state, $page);

      $titleResult = count($result) == 0 ?'Aucune enchère' :
              (count($result) > 1 ? count($result).' enchères' :
          count($result).' enchère');

          $nbPages = ceil(count($result)/$this->nbPerPage);

      $content = $this->render('SEPlatformBundle:Auction:userSendList.html.twig',
      array(
        'titleResult'=>$titleResult,
        'nbPages'     => $nbPages,
        'page'        => $page,
        'advert'=> $this->advert,
        'state'=> $this->state,
        'listAdvertAuction'=>$this->getAdvertByAuctionUser(),
        'listAuctionUser'=>$result,
        'listState'=>$this->getAuctionState()
      ));

      return $content;
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function userReceiveListAction(Request $request, $page)
    {
      $this->getListUserFilterAttributes($request);

      $result = $this->getAuctionReceiveUser($this->advert, $this->state, $page);

      $titleResult = count($result) == 0 ?'Aucune enchère' :
              (count($result) > 1 ? count($result).' enchères' :
          count($result).' enchère');

          $nbPages = ceil(count($result)/$this->nbPerPage);


      return $this->render('SEPlatformBundle:Auction:userReceiveList.html.twig',
          array(
            'titleResult'=>$titleResult,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'advert'=> $this->advert,
            'state'=> $this->state,
            'listAdvertAuction'=>$result,
            'listAdvertUser'=>$this->getAdvertByUser(),
            'listState'=>$this->getAuctionState()
          ));
    }
}
