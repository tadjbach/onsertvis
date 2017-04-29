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

    public function getCommentSender($userId, $page, $nbPerPage)
    {
         $qb = $this->createQueryBuilder('comment')
            ->leftJoin('comment.receiver', 'receiver')
            ->addSelect('receiver')
            ->leftJoin('comment.sender', 'sender')
            ->addSelect('sender')
            ->orderBy('comment.dateCreation', 'DESC');
           // ->add('groupBy', 'sender.id');
                
        $qb->where($qb->expr()->eq('receiver.id', $userId))
            ->andWhere($qb->expr()->eq('comment.isPublished', 1))
            ->andWhere($qb->expr()->eq('comment.isDeleted', 0))        
            ->getQuery();
        
            $qb->setFirstResult(($page-1) * $nbPerPage)
                    
            ->setMaxResults($nbPerPage);

        return new Paginator($qb, true);
    }
    
     public function getCommentReceive($userId, $page, $nbPerPage)
    {
        $qb = $this->createQueryBuilder('comment')
            ->leftJoin('comment.sender', 'sender')
            ->addSelect('sender')
            ->leftJoin('comment.receiver', 'receiver')
            ->addSelect('receiver');
           // ->add('groupBy', 'receiver.id');
                
        $qb->where($qb->expr()->eq('sender.id', $userId))
            ->andWhere($qb->expr()->eq('comment.isPublished', 1))
            ->andWhere($qb->expr()->eq('comment.isDeleted', 0))
            ->getQuery();
        
            $qb->setFirstResult(($page-1) * $nbPerPage)
                    
            ->setMaxResults($nbPerPage);
            
        return new Paginator($qb, true);
    }
    
    public function getComment($userId, $isSender)
    {
         $qb = $this->createQueryBuilder('comment')
            ->leftJoin('comment.receiver', 'receiver')
            ->addSelect('receiver')
            ->leftJoin('comment.sender', 'sender')
            ->addSelect('sender')
            ->orderBy('comment.dateCreation', 'DESC');
                
            $qb->Where($qb->expr()->eq('comment.isPublished', 1))
            ->andWhere($qb->expr()->eq('comment.isDeleted', 0))  ;
            
            if ($isSender) {
                $qb->andWhere($qb->expr()->eq('sender.id', $userId));
            } 
            else{
                $qb->andWhere($qb->expr()->eq('receiver.id', $userId));
            }
                    
            return $qb
            ->getQuery()
            ->getResult(); 
    }
}

