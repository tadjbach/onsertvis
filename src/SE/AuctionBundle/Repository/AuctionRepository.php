<?php

namespace SE\AuctionBundle\Repository;

/**
 * AuctionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */

use Doctrine\ORM\Tools\Pagination\Paginator;

class AuctionRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAuctionAdvert($page, $nbPerPage){
        
        $qb = $this->createQueryBuilder('auction');
        
        $qb->leftJoin('auction.advert', 'advert')
           ->addSelect('advert')
           ->leftJoin('advert.category', 'category')
           ->addSelect('category');
        $qb->orderBy('advert.dateCreation', 'DESC');

        $qb
                ->where($qb->expr()->eq('ad.isDeleted', 0))
                ->andWhere($qb->expr()->eq('ad.isPublished', 1))
                ->andWhere($qb->expr()->eq('ad.isEnabled', 1))
                ->getQuery();
        
        $qb->setFirstResult(($page-1) * $nbPerPage)->setMaxResults($nbPerPage);
        
        return new Paginator($qb, true);
    }
    
    
    public function getLastAuction($advertId){
         $qb = $this->createQueryBuilder('auction');
        
         $qb->leftJoin('auction.advert', 'advert')
            ->addSelect('advert');
         
        $qb->where($qb->expr()->eq('advert.id', $advertId))
            //->andWhere($qb->expr()->eq('advert.isPublished', 1))
            ->andWhere($qb->expr()->eq('advert.isDeleted', 0))
            ->andWhere($qb->expr()->eq('advert.isEnabled', 1));

        $qb->orderBy('auction.dateCreation', 'DESC');
        
        $qb->getQuery();
        
        return $qb
            ->getQuery()
            ->getResult(); 
    }
    
    public function getAcceptAuction($advertId){
         $qb = $this->createQueryBuilder('auction');
        
         $qb->leftJoin('auction.advert', 'advert')
            ->addSelect('advert');
         
        $qb->where($qb->expr()->eq('advert.id', $advertId))
            ->andWhere($qb->expr()->eq('advert.isPublished', 0))
            ->andWhere($qb->expr()->eq('advert.isDeleted', 0))
            ->andWhere($qb->expr()->eq('advert.isEnabled', 1))
            ->andWhere($qb->expr()->eq('auction.state', 2));
        
        $qb->getQuery();
        
        return $qb
            ->getQuery()
            ->getResult(); 
    }


    public function getAllAuctionUser($advertId, $userId, $page, $nbPerPage){
        
     $qb=$this->createQueryBuilder('auction');

        $qb->innerJoin('auction.user', 'user_auction')
            ->addSelect('user_auction')
            ->leftJoin('auction.advert', 'advert')
            ->addSelect('advert')
            ->leftJoin('advert.user', 'user_advert')
            ->addSelect('user_advert');

        $qb->orderBy('auction.dateCreation', 'DESC');
        
        $qb->where($qb->expr()->eq('user_auction.id', $userId))
            ->orWhere($qb->expr()->eq('user_advert.id', $userId))
            ->andWhere($qb->expr()->eq('advert.isDeleted', 0))
            ->andWhere($qb->expr()->eq('advert.isEnabled', 1))
            ->andWhere($qb->expr()->eq('advert.id', $advertId))
                ;

        $qb->getQuery();

        $qb->setFirstResult(($page-1) * $nbPerPage)
            ->setMaxResults($nbPerPage);
            
        return new Paginator($qb, true);
    }

    public function getProposedAuctionUser($userId, $page, $nbPerPage){

        $qb=$this->createQueryBuilder('auction');

        $qb->innerJoin('auction.user', 'user_auction')
            ->addSelect('user_auction')
            ->leftJoin('auction.advert', 'advert')
            ->addSelect('advert');

        $qb->where($qb->expr()->eq('user_auction.id', $userId))
            
            ->andWhere($qb->expr()->eq('advert.isDeleted', 0))
            ->andWhere($qb->expr()->eq('advert.isEnabled', 1));

        $qb->getQuery();

        $qb->setFirstResult(($page-1) * $nbPerPage)
            ->setMaxResults($nbPerPage);

        return new Paginator($qb, true);
    }

    public function getTerminatedAuctionUser($userId, $page, $nbPerPage){

        $qb=$this->createQueryBuilder('auction');

        $qb->innerJoin('auction.user', 'user_auction')
            ->addSelect('user_auction')
            ->leftJoin('auction.advert', 'advert')
            ->addSelect('advert');

        $qb->where($qb->expr()->eq('user_auction.id', $userId))
            ->andWhere($qb->expr()->eq('auction.state', 2));

        $qb->getQuery();

        $qb->setFirstResult(($page-1) * $nbPerPage)
            ->setMaxResults($nbPerPage);

        return new Paginator($qb, true);
    }

    public function getReceiveAuctionUser($userId, $page, $nbPerPage){

        $qb=$this->createQueryBuilder('auction');

        $qb->innerJoin('auction.user', 'user_auction')
            ->addSelect('user_auction')
            ->leftJoin('auction.advert', 'advert')
            ->addSelect('advert')
            ->leftJoin('advert.user', 'user_advert')
            ->addSelect('user_advert');

        $qb->where($qb->expr()->eq('user_advert.id', $userId));

        $qb->getQuery();

        $qb->setFirstResult(($page-1) * $nbPerPage)
            ->setMaxResults($nbPerPage);

        return new Paginator($qb, true);
    }
    
    /*
     * getStateAuctionUser
     */
    public function getStateAuctionUser($userId, $isPublished,  $state){

        $qb=$this->createQueryBuilder('auction');

        $qb->innerJoin('auction.user', 'user_auction')
            ->addSelect('user_auction')
            ->leftJoin('auction.advert', 'advert')
            ->addSelect('advert');

        $qb->where($qb->expr()->eq('user_auction.id', $userId))
            ->andWhere($qb->expr()->eq('auction.state', $state));
           
        if ($isPublished !== null) {
                $qb->andWhere($qb->expr()->eq('advert.isPublished', $isPublished));
            }
            
        
        return $qb
            ->getQuery()
            ->getResult(); 
    }
}
