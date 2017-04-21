<?php

namespace SE\AuctionBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * CommentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentRepository extends \Doctrine\ORM\EntityRepository
{
    public function getCommentConversation($userId, $page, $nbPerPage){
        
         $qb = $this->createQueryBuilder('comment')
            ->leftJoin('comment.receiver', 'receiver')
            ->addSelect('receiver')
            ->leftJoin('comment.sender', 'sender')
            ->addSelect('s')
            ->add('groupBy', 'sender.id');
                
        $qb->where($qb->expr()->eq('receiver.id', $userId))
            ->andWhere($qb->expr()->eq('comment.isPublished', 1))
            ->andWhere($qb->expr()->eq('comment.isDeleted', 0))
            ->getQuery();
            
            $qb->setFirstResult(($page-1) * $nbPerPage)
                    
            ->setMaxResults($nbPerPage);

        return new Paginator($qb, true);
    }

    public function getMessageSender($userId, $page, $nbPerPage)
    {
         $qb = $this->createQueryBuilder('comment')
            ->leftJoin('comment.receiver', 'receiver')
            ->addSelect('receiver')
            ->leftJoin('comment.sender', 'sender')
            ->addSelect('sender')
            ->add('groupBy', 'sender.id');
                
        $qb->where($qb->expr()->eq('receiver.id', $userId))
            ->andWhere($qb->expr()->eq('comment.isPublished', 1))
            ->andWhere($qb->expr()->eq('comment.isDeleted', 0))        
            ->getQuery();
        
            $qb->setFirstResult(($page-1) * $nbPerPage)
                    
            ->setMaxResults($nbPerPage);

        return new Paginator($qb, true);
    }
    
     public function getMessageReceive($userId, $page, $nbPerPage)
    {
        $qb = $this->createQueryBuilder('comment')
            ->leftJoin('comment.sender', 'sender')
            ->addSelect('sender')
            ->leftJoin('comment.receiver', 'receiver')
            ->addSelect('r')
            ->add('groupBy', 'receiver.id');
                
        $qb->where($qb->expr()->eq('sender.id', $userId))
            ->andWhere($qb->expr()->eq('comment.isPublished', 1))
            ->andWhere($qb->expr()->eq('comment.isDeleted', 0))
            ->getQuery();
        
            $qb->setFirstResult(($page-1) * $nbPerPage)
                    
            ->setMaxResults($nbPerPage);
            
        return new Paginator($qb, true);
    }
}

