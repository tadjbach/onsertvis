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
     private $nbPerPage = 36;

    /**
     * @var \Swift_Mailer
     */
    protected $mailer;

    /**
     * @var UrlGeneratorInterface
     */
    protected $router;

    /**
     * @var EngineInterface
     */
    protected $templating;

    /**
     * @var array
     */
    protected $parameters;

    /**
     * @param string $renderedTemplate
     * @param string $fromEmail
     * @param string $toEmail
     */
    protected function sendEmailMessage($body,  $subject, $fromEmail, $toEmail)
    {
        $message = \Swift_Message::newInstance()
        ->setSubject($subject)
        ->setFrom($fromEmail)
        ->setTo($toEmail)
        ->setBody($body);
        
        $this->get('mailer')->send($message);
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
       
        $form = $this->createForm(AuctionType::class, $auction,
                array('action' => $this->generateUrl('se_auction_advert_view', array('id' => $advertId))));

        if ($request->isMethod('POST')){
            $form->handleRequest($request);

            if ($form->isValid()){
                
                $em->persist($auction);
                $em->flush();

               $request->getSession()->getFlashBag()->add('notice', 'Votre enchère est validée.');
               
               //envoi de mail au proprio

                $this->sendEmailMessage('Une enchère sur votre demande'.$advert->getTitle(),
                    'Une enchère sur votre demande '.$advert->getTitle(),
                        'noreplay@serviceenchere.fr',
                        (string) $advert->getUser()->getEmail());
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
    
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */ 
    public function listAction($page)
    {
         $user = $this->getUser();
         
        $em=$this->getDoctrine()
            ->getManager();

         $listAuctions = $em
            ->getRepository('SEAuctionBundle:Auction')
            ->getAllAuctionUser($user->getId(), $page, $this->nbPerPage);
         
        $nbPages = ceil(count($listAuctions)/$this->nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page "'.$page.'" inexistante');
        }

        return $this->render('SEAuctionBundle:Auction:list.html.twig', array(
            'listAuctions'=> $listAuctions,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'countAuctions'     => count($listAuctions)
        ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listProposedAction($page)
    {
        $user = $this->getUser();

        $em=$this->getDoctrine()
            ->getManager();

        $listAuctions = $em
            ->getRepository('SEAuctionBundle:Auction')
            ->getProposedAuctionUser($user->getId(), $page, $this->nbPerPage);


        $nbPages = ceil(count($listAuctions)/$this->nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page "'.$page.'" inexistante');
        }

        return $this->render('SEAuctionBundle:Auction:list.html.twig', array(
            'listAuctions'=> $listAuctions,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'countAuctions'     => count($listAuctions)
        ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listReceiveAction($page)
    {
        $user = $this->getUser();

        $em=$this->getDoctrine()
            ->getManager();

        $listAuctions = $em
            ->getRepository('SEAuctionBundle:Auction')
            ->getReceiveAuctionUser($user->getId(), $page, $this->nbPerPage);


        $nbPages = ceil(count($listAuctions)/$this->nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page "'.$page.'" inexistante');
        }

        return $this->render('SEAuctionBundle:Auction:list.html.twig', array(
            'listAuctions'=> $listAuctions,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'countAuctions'     => count($listAuctions)
        ));
    }

    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function listTerminatedAction($page)
    {
        $user = $this->getUser();

        $em=$this->getDoctrine()
            ->getManager();

        $listAuctions = $em
            ->getRepository('SEAuctionBundle:Auction')
            ->getTerminatedAuctionUser($user->getId(), $page, $this->nbPerPage);


        $nbPages = ceil(count($listAuctions)/$this->nbPerPage);

        if ($page<1){
            throw new NotFoundHttpException('page "'.$page.'" inexistante');
        }

        return $this->render('SEAuctionBundle:Auction:list.html.twig', array(
            'listAuctions'=> $listAuctions,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'countAuctions'     => count($listAuctions)
        ));
    }
    
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function acceptAction( $auctionId)
    {
        $em = $this->getDoctrine()->getManager();
        $auction=$em->find('SEAuctionBundle:Auction', $auctionId);
        $user = $this->getUser();
        $page = 1;
        
        if ($auction !== null && $user !== null){
            $auction->setState(2);
            $em->persist($auction);
            $em->flush();
        }
        
        $listAuctions = $em
            ->getRepository('SEAuctionBundle:Auction')
            ->getAllAuctionUser($user->getId(), $page, $this->nbPerPage);


        $nbPages = ceil(count($listAuctions)/$this->nbPerPage);
        
        return $this->render('SEAuctionBundle:Auction:list.html.twig', array(
            'listAuctions'=> $listAuctions,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'countAuctions'     => count($listAuctions)
        ));
    }
    
}  