<?php

namespace SE\PlatformBundle\Repository;


/**
 * SocietyTypeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
 use Doctrine\ORM\Tools\Pagination\Paginator;

class UserRepository extends \Doctrine\ORM\EntityRepository
{

  public function getUserListAdmin($nameOremail, $role, $state, $page, $nbPerPage){
      $qb = $this->createQueryBuilder('user');

      if($nameOremail !== NULL && $nameOremail !== '')
      {
          $page = 1;
          $qb->andWhere("user.username LIKE '%$nameOremail%'")->orWhere("user.email LIKE '%$nameOremail%'");
      }
      if($role !== NULL && $role !== '0')
      {
          $page = 1;

          $role = $role === '1' ? 'ROLE_SUPER_ADMIN' : 'ROLE_AUTEUR';
          $qb->andWhere("user.roles LIKE '%$role%'");
      }
      if($state !== NULL && $state !== '0')
      {
          $page = 1;
          $state = $state === '1' ? 1 : 0;
          $qb->andWhere($qb->expr()->eq('user.enabled', $state));
      }

      $qb->orderBy('user.id', 'ASC')->getQuery();
      $qb->setFirstResult(($page-1) * $nbPerPage)->setMaxResults($nbPerPage);

      return new Paginator($qb, true);
  }

  public function getJobberList($title, $category, $region, $departement, $city, $postalCode, $page, $nbPerPage){
      $qb = $this->createQueryBuilder('user')
              ->innerJoin('user.postalCode', 'postalCode')
              ->addSelect('postalCode')
              ->innerJoin('postalCode.city', 'city')
              ->addSelect('city')
              ->innerJoin('city.departement', 'departement')
              ->addSelect('departement')
              ->innerJoin('departement.region', 'region')
              ->addSelect('region');

      $qb->where($qb->expr()->eq('user.isAcountComplete', 1));
      $qb->andWhere($qb->expr()->eq('user.isJobber', 1));

      if($title !== NULL && $title !== '')
      {
          $page = 1;
          $qb->andWhere("user.username LIKE '%$title%'")->orWhere("user.detail LIKE '%$title%'");
      }
      if($category !== NULL && $category !== '0')
      {
          $page = 1;
          $qb->andWhere($qb->expr()->eq('category.id', $category));
      }
      if($region !== NULL && $region !== '0')
      {
          $page = 1;
          $qb->andWhere($qb->expr()->eq('region.id', $region));
      }
      if($departement !== NULL && $departement !== '0')
      {
          $page = 1;
          $qb->andWhere($qb->expr()->eq('departement.id', $departement));
      }
      if($city !== NULL && $city !== '')
      {
          $page = 1;
          $city = $this->slugify($city);
          $qb->andWhere("city.slug LIKE '%$city%'");
      }
      if ($postalCode !== null && $postalCode !== '') {
          $page = 1;
          $qb->andWhere("postalCode.value LIKE '%$postalCode%'");
      }

      $qb->addOrderBy('user.rate', 'DESC');
      $qb->addOrderBy('user.lastLogin', 'DESC')->getQuery();

      $qb->setFirstResult(($page-1) * $nbPerPage)->setMaxResults($nbPerPage);

      return new Paginator($qb, true);
  }
}
