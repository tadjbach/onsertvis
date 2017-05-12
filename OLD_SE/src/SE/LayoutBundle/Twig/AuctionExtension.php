<?php

namespace SE\LayoutBundle\Twig;

use Doctrine\Common\Persistence\ObjectManager;
use Exception;
use Symfony\Component\Asset\Packages;


class AuctionExtension extends \Twig_Extension
{
    private $em;
    private $packages;

    public function __construct(ObjectManager $em, Packages $packages)
    {
        $this->em = $em;
        $this->packages = $packages;
    }

    public function getFilters()
    {
        return array(
        );
    }

 
    public function getFunctions(){
     return array(
          'getLastAuction' => new \Twig_Function_Method($this, 'lastAuction'),
     );
  }
 
  public function lastAuction($advertId){
    
      
        $advert=$this->em->getRepository('SEAuctionBundle:Advert')
            ->findBy(array('Advert' => $advertId));

   /*      $advert=$this->em->
                getManager()
                ->getRepository('SEAuctionBundle:Advert', $advertId)
                ->find();


         $lastAuction=$this
            ->getManager()->getRepository('SEAuctionBundle:Auction')
            ->findBy(
                array('advert'=>$advert)
            );
*/
        return $advert->getId();
  }
  
  public function getName()
    {
        return 'last_auction';
    }
}