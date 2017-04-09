<?php

namespace SE\AuctionBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * MessageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MessageRepository extends \Doctrine\ORM\EntityRepository
{
    public function getMessageConversation($userId, $page, $nbPerPage){
        
         $qb = $this->createQueryBuilder('m')
            ->leftJoin('m.receiver', 'r')
            ->addSelect('r')
            ->leftJoin('m.sender', 's')
            ->addSelect('s')
            ->add('groupBy', 's.id');
                
        $qb->where($qb->expr()->eq('r.id', $userId))
            ->andWhere($qb->expr()->eq('m.isPublished', 1))
            ->andWhere($qb->expr()->eq('m.isDeleted', 0));

        $qb
            ->getQuery()
            // On définit l'annonce à partir de laquelle commencer la liste
            ->setFirstResult(($page-1) * $nbPerPage)
            // Ainsi que le nombre d'annonce à afficher sur une page
            ->setMaxResults($nbPerPage);

        // Enfin, on retourne l'objet Paginator correspondant à la requête construite
        // (n'oubliez pas le use correspondant en début de fichier)
        return new Paginator($qb, true);
    }

    public function getMessageSender($userId, $page, $nbPerPage)
    {
         $qb = $this->createQueryBuilder('m')
            ->leftJoin('m.receiver', 'r')
            ->addSelect('r')
            ->leftJoin('m.sender', 's')
            ->addSelect('s')
            ->add('groupBy', 's.id');
                
        $qb->where($qb->expr()->eq('r.id', $userId))
            ->andWhere($qb->expr()->eq('m.isPublished', 1))
            ->andWhere($qb->expr()->eq('m.isDeleted', 0));

        $qb
            ->getQuery()
            // On définit l'annonce à partir de laquelle commencer la liste
            ->setFirstResult(($page-1) * $nbPerPage)
            // Ainsi que le nombre d'annonce à afficher sur une page
            ->setMaxResults($nbPerPage);

        // Enfin, on retourne l'objet Paginator correspondant à la requête construite
        // (n'oubliez pas le use correspondant en début de fichier)
        return new Paginator($qb, true);
    }
    
     public function getMessageReceive($userId, $page, $nbPerPage)
    {
        $qb = $this->createQueryBuilder('m')
            ->leftJoin('m.sender', 's')
            ->addSelect('s')
            ->leftJoin('m.receiver', 'r')
            ->addSelect('r')
            ->add('groupBy', 'r.id');
                
        $qb->where($qb->expr()->eq('s.id', $userId))
            ->andWhere($qb->expr()->eq('m.isPublished', 1))
            ->andWhere($qb->expr()->eq('m.isDeleted', 0));

        $qb
            ->getQuery()
            // On définit l'annonce à partir de laquelle commencer la liste
            ->setFirstResult(($page-1) * $nbPerPage)
            // Ainsi que le nombre d'annonce à afficher sur une page
            ->setMaxResults($nbPerPage);

        // Enfin, on retourne l'objet Paginator correspondant à la requête construite
        // (n'oubliez pas le use correspondant en début de fichier)
        return new Paginator($qb, true);
    }
}
