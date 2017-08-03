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
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
        $nbAuction = 'aucune offre';
        $lastAuction = $em
            ->getRepository('SEPlatformBundle:Auction')
            ->getLastAuction($advertId);

      if (count($lastAuction) > 0) {
           $nbAuction = count($lastAuction) <= 1 ? count($lastAuction).' offre' : count($lastAuction).' offres';
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
        $mailer  = $this->get('se_platform.mailer');

        $advert=$em->find('SEPlatformBundle:Advert', $advertId);
        $userOwner = $advert->getUser();

            $advert->setAuctionState(1);

            $auction = new Auction();

            $auction->setUser($this->getUser());
            $auction->setAdvert($advert);

            $otherAuction = $em->getRepository('SEPlatformBundle:Auction')->findBy(array('advert' => $advert));
            $lastAuction = $em
                ->getRepository('SEPlatformBundle:Auction')
                ->getOneLastAuction($advertId);

            $form = $this->createForm(AuctionType::class, $auction);

            if ($userOwner !== $this->getUser()) {
              if ($request->isMethod('POST')){
                  $form->handleRequest($request);

                  if ($form->isValid()){

                      $em->persist($auction);
                      $em->flush();


                      if ($lastAuction != null && $userOwner !== null){

                            if ($lastAuction[0]->getUser() !== $this->getUser()) {
                              $body = $this->renderView(
                                     'SEPlatformBundle:Auction:otherAuctionMail.html.twig',
                                     array( 'receiver' => $lastAuction[0]->getUser(),
                                            'value'=> $auction->getValue(),
                                            'oldValue'=>$lastAuction[0]->getValue(),
                                            'advert'=> $advert->getTitle())
                                 );
                              $mailer->sendEmail($advert, 'Nouvelle offre', "Nouvelle offre sur l'annonce ".' '.$advert->getTitle(), $lastAuction[0]->getUser()->getEmail(), $body);
                        }
                        }


                      $body_owner = $this->renderView(
                             'SEPlatformBundle:Auction:addMail.html.twig',
                             array( 'receiver' => $userOwner,
                                    'sender'=> $this->getUser(),
                                    'value'=> $auction->getValue(),
                                    'advert'=> $advert->getTitle())
                         );

                      $mailer->sendEmail($advert, 'Nouvelle offre', 'Nouvelle offre sur votre annonce '.$advert->getTitle(), $userOwner->getEmail(), $body_owner);


                      $session->getFlashBag()->add('addSuccess','Offre bien enregistrée.');

                      return $this->redirectToRoute('se_platform_advert_validate', array('action'=>'ajouterauction'));
                  }
              }
            }

            else {
              $session->getFlashBag()->add('error','Vous ne pouvez pas proposer une offre sur vos propres annonces.');

              return $this->redirectToRoute('se_platform_advert_validate', array('action'=>'refuserauction'));
            }

            return $this->render('SEPlatformBundle:Auction:add.html.twig', array(
                'form' => $form->createView(),
                'advert'=> $advert
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

      $titleResult = count($listAuctionUser) == 0 ?'Aucune offre' :
              (count($listAuctionUser) > 1 ? count($listAuctionUser).' offres' :
          count($listAuctionUser).' offre');

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

      $titleResult = count($listAdvertAuction) == 0 ?'Aucune offre' :
              (count($listAdvertAuction) > 1 ? count($listAdvertAuction).' offres' :
          count($listAdvertAuction).' offre');

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
    public function acceptAction(Request $request, $auctionId, $state){

      $em = $this->getDoctrineManager();
      $session = $request->getSession();
      $mailer  = $this->get('se_platform.mailer');

      $user = $this->getUser();
      $auctionAccept = $em->find('SEPlatformBundle:Auction', $auctionId);
      $userAuction = $auctionAccept->getUser();

      $advert = $auctionAccept->getAdvert();

      $auctionRefuse = $em->getRepository('SEPlatformBundle:Auction')->findBy(array('advert' => $advert));

    if ($this->getUser() === $advert->getUser()) {

          if ($auctionAccept !== null && $user !== null){

              foreach($auctionRefuse as $auct_refus) {
                $statusRefus = $state == 2 ? 3 : 1;
                $auct_refus->setState($statusRefus);

                $userAuctionRefuse = $auct_refus->getUser();

                if ($userAuctionRefuse !== $userAuction) {
                  $body = $this->renderView(
                         'SEPlatformBundle:Auction:refuseMail.html.twig',
                         array( 'receiver' => $userAuctionRefuse,
                                'value'=> $auctionAccept->getValue(),
                                'advert'=> $advert->getTitle())
                     );
                  $mailer->sendEmail($advert, 'Offre refusée', 'Votre offre a été refusée', $userAuctionRefuse->getEmail(), $body);
                }
              }

              $advert->setIsPublished(false);
              $auctionAccept->setState($state);

              $em->persist($advert);
              $em->persist($auctionAccept);
              $em->flush();

              $body_auction = $this->renderView(
                     'SEPlatformBundle:Auction:acceptAuctionMail.html.twig',
                     array( 'receiver' => $userAuction,
                            'value'=> $auctionAccept->getValue(),
                            'advert'=> $advert,
                            'user_advert'=> $user
                            )
                 );

              $body_advert = $this->renderView(
                        'SEPlatformBundle:Auction:acceptAdvertMail.html.twig',
                        array( 'receiver' => $user,
                               'value'=> $auctionAccept->getValue(),
                               'advert'=> $advert,
                               'user_auction'=> $userAuction
                               )
                  );

              $mailer->sendEmail($advert, 'Offre acceptée', 'Votre offre a été acceptée', $userAuction->getEmail(), $body_auction);

              $mailer->sendEmail($advert, 'Offre acceptée', 'Votre avez accepté une offre', $user->getEmail(), $body_advert);

              $session->getFlashBag()->add('addSuccess',"Vous avez bien accepté l'offre à ".$auctionAccept->getValue()." €, il vous reste à contacter l'enchérisseur pour convenir d'un rendez-vous");

              return $this->redirectToRoute('se_platform_advert_validate', array('action'=>'accept'));
          }
        }
        else {
          throw new NotFoundHttpException("Oops, Vous n'êtes pas le propriétaire de l'annonce.");
        }
    }
}
