<?php

namespace SE\PlatformBundle\Repository;

/**
 * PotentialUserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */

 use Doctrine\ORM\Tools\Pagination\Paginator;

class PotentialUserRepository extends \Doctrine\ORM\EntityRepository
{


  public function getUserPotentialListAdmin($page, $nameOremail, $nbPerPage){
      $qb = $this->createQueryBuilder('potentialUser');

      if($nameOremail !== NULL && $nameOremail !== '')
      {
          $qb->andWhere("potentialUser.name LIKE '%$nameOremail%'")->orWhere("potentialUser.email LIKE '%$nameOremail%'");
      }

      $qb->orderBy('potentialUser.dateSendMail', 'DESC')->getQuery();
      $qb->setFirstResult(($page-1) * $nbPerPage)->setMaxResults($nbPerPage);

      return new Paginator($qb, true);
  }

  public function findByMail($email){
      $qb = $this->createQueryBuilder('potentialUser');

      if($email !== NULL && $email !== '')
      {
          $qb->andWhere("potentialUser.email LIKE '%$email%'");
      }

      return $qb->getQuery()
          ->getResult();

  }
}
