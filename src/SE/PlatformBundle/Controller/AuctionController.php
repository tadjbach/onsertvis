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
  private $nbPerPage = 20;
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
        $nbAuction = '0 offre';
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
        $calendar = $em->getRepository('SEPlatformBundle:Calendar')->findAll();
        $advertSimilarList = $em->getRepository('SEPlatformBundle:Advert')->getAdvertSimilaire($advert->getCategory()->getId(), $advert->getId());

        $userOwner = $advert->getUser();

            $advert->setAuctionState(1);
            $advert->getUser()->setIsNewAuction(1);

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
                              $mailer->sendEmail($advert, 'Nouvelle offre', "Nouvelle offre sur la demande ".' '.$advert->getTitle(), $lastAuction[0]->getUser()->getEmail(), $body);
                        }
                        }


                      $body_owner = $this->renderView(
                             'SEPlatformBundle:Auction:addMail.html.twig',
                             array( 'receiver' => $userOwner,
                                    'sender'=> $this->getUser(),
                                    'value'=> $auction->getValue(),
                                    'advert'=> $advert->getTitle())
                         );

                      $mailer->sendEmail($advert, 'Nouvelle offre', 'Nouvelle offre sur votre demande '.$advert->getTitle(), $userOwner->getEmail(), $body_owner);


                      $session->getFlashBag()->add('addSuccess','Offre bien enregistrée.');

                      return $this->redirectToRoute('se_platform_advert_view', array('slug'=> $advert->getSlug(),
                                                                                    'id'=> $advert->getId()));
                  }
              }
            }

            else {
              $session->getFlashBag()->add('error','Vous ne pouvez pas proposer une offre sur vos propres demandes.');

              return $this->redirectToRoute('se_platform_advert_view', array('slug'=> $advert->getSlug(),
                                                                            'id'=> $advert->getId()));
            }

            return $this->render('SEPlatformBundle:Auction:add.html.twig', array(
                'form' => $form->createView(),
                'advert'=> $advert,
                'calendar' => $calendar,
                'advertSimilarList' => $advertSimilarList
            ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function cancelAction($id, Request $request){
      $em = $this->getDoctrineManager();
      $session = $request->getSession();
      $mailer  = $this->get('se_platform.mailer');
      $auction = $em->getRepository('SEPlatformBundle:Auction')->find($id);
      $advert = $auction->getAdvert();

      $lastAuction = $em
          ->getRepository('SEPlatformBundle:Auction')
          ->getLastAuction($advert->getId());

       if (null===$auction){
            throw new NotFoundHttpException("Oops, L'offre que vous cherchez n'existe pas.");
        }

        if ($this->getUser() === $auction->getUser() ) {

          $auction->setIsCanceled(true);


          if (count($lastAuction) == 1) {
                 $advert->setAuctionState(0);
            }

          $em->flush();

          $body = $this->renderView(
                 'SEPlatformBundle:Auction:cancelAuctionMail.html.twig',
                 array('receiver' => $this->getUser(),
                 'value' => $auction->getValue(),
                      'advert'=> $advert)
             );

          $mailer->sendEmail($advert, "Annulation de l'offre",  "Annulation de l'offre pour ".$advert->getTitle(), $advert->getUser()->getEmail(), $body);
        }
        else {
            throw new NotFoundHttpException("Oops, Vous n'êtes pas le propriétaire de l'offre.");
        }

        return $this->redirectToRoute('se_platform_auction_user_send');
    }


    //Super ADMIN
    public function listAction($advertId){
      $em = $this->getDoctrineManager();
      $advert=$em->find('SEPlatformBundle:Advert', $advertId);

      $listAuctions=$em->getRepository('SEPlatformBundle:Auction')
            ->getAuctionList($advertId);

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

          $user->setIsValideAuction(0);
          $em->persist($user);
          $em->flush();

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

          $user->setIsNewAuction(0);
          $em->persist($user);
          $em->flush();

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
      $userAuction->setIsValideAuction(1);

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

              if ($state == 2) {
                  $advert->setIsPublished(false);
              }
              else {
                    $advert->setIsPublished(true);
              }

              $auctionAccept->setState($state);

              $em->persist($advert);
              $em->persist($auctionAccept);
              $em->flush();

              if ($state == 2) {
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

                $mailer->sendEmail($advert, 'Offre acceptée', 'Vous avez accepté une offre', $user->getEmail(), $body_advert);
                $session->getFlashBag()->add('addSuccess',"Vous avez bien accepté l'offre à ".$auctionAccept->getValue()." €, il vous reste à contacter le jobber pour convenir d'un rendez-vous");
              }
              else {
                $body_auction = $this->renderView(
                       'SEPlatformBundle:Auction:cancelAuctionMail.html.twig',
                       array( 'receiver' => $userAuction,
                              'value'=> $auctionAccept->getValue(),
                              'advert'=> $advert,
                              'user_advert'=> $user
                              )
                   );

                $body_advert = $this->renderView(
                          'SEPlatformBundle:Auction:cancelAdvertMail.html.twig',
                          array( 'receiver' => $user,
                                 'value'=> $auctionAccept->getValue(),
                                 'advert'=> $advert,
                                 'user_auction'=> $userAuction
                                 )
                    );

                $mailer->sendEmail($advert, 'Offre annulée', 'Votre offre a été annulée', $userAuction->getEmail(), $body_auction);

                $mailer->sendEmail($advert, 'Offre annulée', 'Vous avez annulée une offre', $user->getEmail(), $body_advert);

                  $session->getFlashBag()->add('warning',"Vous avez annulé l'offre de ".$auctionAccept->getValue()." €, la demande est à nouveau en ligne.");
              }


               return $this->redirectToRoute('se_platform_auction_user_receive');
          }
        }
        else {
          throw new NotFoundHttpException("Oops, Vous n'êtes pas le propriétaire de la demande.");
        }
    }
}
