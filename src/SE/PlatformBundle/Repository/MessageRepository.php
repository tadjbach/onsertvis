<?php

namespace SE\PlatformBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * MessageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MessageRepository extends \Doctrine\ORM\EntityRepository
{
  public function getAdvertByUser($userId){
    $qb=$this->createQueryBuilder('message');

    $qb->innerJoin('message.sender', 'sender')
        ->addSelect('sender')
        ->leftJoin('message.advert', 'advert')
        ->addSelect('advert');

        $qb->where($qb->expr()->eq('sender.id', $userId))
        ->andWhere($qb->expr()->neq('advert.user', $userId))
        ->add('groupBy', 'advert.id');

        return $qb
            ->getQuery()
            ->getResult();
  }
    //Liste des message par advert
    public function getMessageByAdvert($advertId, $advertState, $recieveId, $page, $nbPerPage){
      $qb = $this->createQueryBuilder('message')
         ->leftJoin('message.advert', 'advert')
         ->addSelect('advert')
         ->leftJoin('message.sender', 'sender')
         ->addSelect('sender')
         ->leftJoin('message.receiver', 'receiver')
         ->addSelect('receiver')
         ->groupBy('sender.id')
         ->addGroupBy('advert.id');

        $qb->where($qb->expr()->neq('sender.id', $recieveId)) ;// not equals
         $qb->andWhere($qb->expr()->eq('message.isPublished', 1))
         ->andWhere($qb->expr()->eq('message.isDeleted', 0));

        if($advertId !== NULL && $advertId !== '0')
        {
            $qb->andWhere($qb->expr()->eq('advert.id', $advertId));
        }

        if($advertState !== NULL && $advertState !== '0')
        {
          if ($advertState === '1') {
            $qb->andWhere($qb->expr()->eq('advert.isPublished', 0));
            $qb->andWhere($qb->expr()->eq('advert.auctionState', 0));
          }
          elseif ($advertState === '2') {
            $qb->andWhere($qb->expr()->eq('advert.isPublished', 1));
          }
          elseif ($advertState === '3') {
            $qb->andWhere($qb->expr()->eq('advert.isPublished', 0));
            $qb->andWhere($qb->expr()->eq('advert.auctionState', 1));
          }
        }

        $qb->addOrderBy('message.dateCreation', 'DESC')->getQuery();

        $qb->setFirstResult(($page-1) * $nbPerPage)

        ->setMaxResults($nbPerPage);

        return new Paginator($qb, true);
    }

    public function getConversation($advertId, $userSenderId, $userReceiverId)
    {
        $qb = $this->createQueryBuilder('message');

        $qb = $this->createQueryBuilder('message')
           ->leftJoin('message.advert', 'advert')
           ->addSelect('advert')

           ->leftJoin('message.sender', 'sender')
           ->addSelect('sender')
           ->leftJoin('message.receiver', 'receiver')
           ->addSelect('receiver')
           ->andWhere($qb->expr()->eq('message.isDeleted', 0));


        $qb->andWhere($qb->expr()->eq('sender.id', $userSenderId));
        $qb->orWhere($qb->expr()->eq('receiver.id', $userSenderId));

        $qb->andWhere($qb->expr()->eq('receiver.id', $userReceiverId));
        $qb->orWhere($qb->expr()->eq('sender.id', $userReceiverId));

         $qb->andWhere($qb->expr()->eq('advert.id', $advertId));

        $qb->orderBy('message.dateCreation', 'DESC')->getQuery();

        return $qb
            ->getQuery()
            ->getResult();
    }

    public function getMessageConversation($userId, $page, $nbPerPage){

         $qb = $this->createQueryBuilder('m')
            ->leftJoin('m.receiver', 'r')
            ->addSelect('r')
            ->leftJoin('m.sender', 's')
            ->addSelect('s')
            ->add('groupBy', 's.id');

        $qb->where($qb->expr()->eq('r.id', $userId))
            ->andWhere($qb->expr()->eq('m.isPublished', 1))
            ->andWhere($qb->expr()->eq('m.isDeleted', 0))
            ->getQuery();

            // On définit l'demande à partir de laquelle commencer la liste
            $qb->setFirstResult(($page-1) * $nbPerPage)
            // Ainsi que le nombre d'demande à afficher sur une page
            ->setMaxResults($nbPerPage);

        // Enfin, on retourne l'objet Paginator correspondant à la requête construite
        // (n'oubliez pas le use correspondant en début de fichier)
        return new Paginator($qb, true);
    }

    public function getMessageSender($advertId, $advertState, $userId, $page, $nbPerPage)
    {
      $qb = $this->createQueryBuilder('message')
      ->leftJoin('message.advert', 'advert')
      ->addSelect('advert')
          ->leftJoin('message.sender', 'sender')
          ->addSelect('sender')
          ->leftJoin('message.receiver', 'receiver')
          ->addSelect('receiver')
          ->groupBy('sender.id')
          ->addGroupBy('advert.id');

      $qb->where($qb->expr()->eq('sender.id', $userId))
          ->andWhere($qb->expr()->eq('message.isPublished', 1))
          ->andWhere($qb->expr()->eq('message.isDeleted', 0));

      $qb->andWhere($qb->expr()->neq('advert.user', $userId));

          if($advertId !== NULL && $advertId !== '0')
          {
              $qb->andWhere($qb->expr()->eq('advert.id', $advertId));
          }

          if($advertState !== NULL && $advertState !== '0')
          {
            if ($advertState === '1') {
              $qb->andWhere($qb->expr()->eq('advert.isPublished', 0));
              $qb->andWhere($qb->expr()->eq('advert.auctionState', 0));
            }
            elseif ($advertState === '2') {
              $qb->andWhere($qb->expr()->eq('advert.isPublished', 1));
            }
            elseif ($advertState === '3') {
              $qb->andWhere($qb->expr()->eq('advert.isPublished', 0));
              $qb->andWhere($qb->expr()->eq('advert.auctionState', 1));
            }
          }

          $qb->getQuery();

          // On définit l'demande à partir de laquelle commencer la liste
          $qb->setFirstResult(($page-1) * $nbPerPage)
          // Ainsi que le nombre d'demande à afficher sur une page
          ->setMaxResults($nbPerPage);

      // Enfin, on retourne l'objet Paginator correspondant à la requête construite
      // (n'oubliez pas le use correspondant en début de fichier)
      return new Paginator($qb, true);
    }

  public function getMessageReceive($advertId, $advertState, $userId, $page, $nbPerPage)
    {
        $qb = $this->createQueryBuilder('message')
        ->leftJoin('message.advert', 'advert')
        ->addSelect('advert')
            ->leftJoin('message.sender', 'sender')
            ->addSelect('sender')
            ->leftJoin('message.receiver', 'receiver')
            ->addSelect('receiver')
            ->groupBy('sender.id')
            ->addGroupBy('advert.id');

            $qb->where($qb->expr()->eq('receiver.id', $userId))
            ->andWhere($qb->expr()->eq('message.isPublished', 1))
            ->andWhere($qb->expr()->eq('message.isDeleted', 0));

            $qb->andWhere($qb->expr()->eq('advert.user', $userId));

            if($advertId !== NULL && $advertId !== '0')
            {
                $qb->andWhere($qb->expr()->eq('advert.id', $advertId));
            }

            if($advertState !== NULL && $advertState !== '0')
            {
              if ($advertState === '1') {
                $qb->andWhere($qb->expr()->eq('advert.isPublished', 0));
                $qb->andWhere($qb->expr()->eq('advert.auctionState', 0));
              }
              elseif ($advertState === '2') {
                $qb->andWhere($qb->expr()->eq('advert.isPublished', 1));
              }
              elseif ($advertState === '3') {
                $qb->andWhere($qb->expr()->eq('advert.isPublished', 0));
                $qb->andWhere($qb->expr()->eq('advert.auctionState', 1));
              }
            }

            $qb->getQuery();

            // On définit l'demande à partir de laquelle commencer la liste
            $qb->setFirstResult(($page-1) * $nbPerPage)
            // Ainsi que le nombre d'demande à afficher sur une page
            ->setMaxResults($nbPerPage);

        // Enfin, on retourne l'objet Paginator correspondant à la requête construite
        // (n'oubliez pas le use correspondant en début de fichier)
        return new Paginator($qb, true);
    }

    public function getCountMessage($advertId)
    {
        $qb = $this->createQueryBuilder('message');

         $qb->leftJoin('message.advert', 'advert')
            ->addSelect('advert');

        $qb->where($qb->expr()->eq('advert.id', $advertId))
            ->andWhere($qb->expr()->eq('advert.isDeleted', 0))
            ->andWhere($qb->expr()->eq('advert.isEnabled', 1));

        $qb->getQuery();

        return $qb
            ->getQuery()
            ->getResult();
    }

    public function getConversationRecive($advertId, $userSenderId, $userReceiverId)
    {
        $qb = $this->createQueryBuilder('message');

        $qb = $this->createQueryBuilder('message')
           ->leftJoin('message.advert', 'advert')
           ->addSelect('advert')

           ->leftJoin('message.sender', 'sender')
           ->addSelect('sender')
           ->leftJoin('message.receiver', 'receiver')
           ->addSelect('receiver')
           ->andWhere($qb->expr()->eq('message.isDeleted', 0));


        $qb->andWhere($qb->expr()->eq('sender.id', $userSenderId));
        $qb->orWhere($qb->expr()->eq('receiver.id', $userSenderId));

        $qb->andWhere($qb->expr()->eq('receiver.id', $userReceiverId));
        $qb->orWhere($qb->expr()->eq('sender.id', $userReceiverId));

         $qb->andWhere($qb->expr()->eq('advert.id', $advertId));

        $qb->orderBy('message.dateCreation', 'DESC')->getQuery();

        return $qb
            ->getQuery()
            ->getResult();
    }

    public function getConversationSender($userSenderId, $page, $nbPerPage)
    {
        $qb = $this->createQueryBuilder('message');

        $qb = $this->createQueryBuilder('message')

           ->leftJoin('message.advert', 'advert')
           ->addSelect('advert')

           ->leftJoin('message.sender', 'sender')
           ->addSelect('sender')
            ->add('groupBy', 'sender.id')
           ->andWhere($qb->expr()->eq('message.isDeleted', 0));


        $qb->andWhere($qb->expr()->eq('sender.id', $userSenderId));
        $qb->andWhere($qb->expr()->neq('advert.user', $userSenderId));

        $qb->orderBy('message.dateCreation', 'DESC')->getQuery();

        $qb->getQuery();

            $qb->setFirstResult(($page-1) * $nbPerPage)
            ->setMaxResults($nbPerPage);

        return new Paginator($qb, true);
    }
}
