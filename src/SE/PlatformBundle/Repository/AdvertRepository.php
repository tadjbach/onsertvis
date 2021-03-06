<?php

namespace SE\PlatformBundle\Repository;

/**
 * AdvertRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
use Doctrine\ORM\Tools\Pagination\Paginator;

class AdvertRepository extends \Doctrine\ORM\EntityRepository{

    static public function slugify($text){
          // replace non letter or digits by -
          $text = preg_replace('~[^\pL\d]+~u', '-', $text);

          // transliterate
          $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

          // remove unwanted characters
          $text = preg_replace('~[^-\w]+~', '', $text);

          // trim
          $text = trim($text, '-');

          // remove duplicate -
          $text = preg_replace('~-+~', '-', $text);

          // lowercase
          $text = strtolower($text);

          if (empty($text)) {
            return 'n-a';
          }

          return $text;
        }

    public function getAdvertSimilaire($categoryId, $advertId){
      $qb = $this->createQueryBuilder('advert')
              ->innerJoin('advert.postalCode', 'postalCode')
              ->addSelect('postalCode')
              ->innerJoin('postalCode.city', 'city')
              ->addSelect('city')
              ->innerJoin('city.departement', 'departement')
              ->addSelect('departement')
              ->innerJoin('departement.region', 'region')
              ->addSelect('region')
              ->leftJoin('advert.category', 'category')
              ->addSelect('category');

        $qb->where($qb->expr()->eq('advert.isPublished', 1))
           ->andWhere($qb->expr()->eq('advert.isDeleted', 0))
           ->andWhere($qb->expr()->eq('advert.isEnabled', 1))
           ->andWhere($qb->expr()->eq('category.id', $categoryId))
           ->andWhere($qb->expr()->neq('advert.id', $advertId));

           $qb->OrderBy('advert.dateCreation', 'DESC')->getQuery();

           return $qb
               ->getQuery()
               ->getResult();
    }
    /*
    Get Adverts List for se_platform_advert_list route
    */
    public function getAdvertList($title, $category, $region, $departement, $city, $postalCode, $page, $nbPerPage){
        $qb = $this->createQueryBuilder('advert')
                ->innerJoin('advert.postalCode', 'postalCode')
                ->addSelect('postalCode')
                ->innerJoin('postalCode.city', 'city')
                ->addSelect('city')
                ->innerJoin('city.departement', 'departement')
                ->addSelect('departement')
                ->innerJoin('departement.region', 'region')
                ->addSelect('region')
                ->leftJoin('advert.category', 'category')
                ->addSelect('category');

        $qb->where($qb->expr()->eq('advert.isPublished', 1))
           ->andWhere($qb->expr()->eq('advert.isDeleted', 0))
           ->andWhere($qb->expr()->eq('advert.isEnabled', 1));

        if($title !== NULL && $title !== '')
        {
            $qb->andWhere("advert.title LIKE '%$title%'")->orWhere("advert.detail LIKE '%$title%'");
        }
        if($category !== NULL && $category !== '0')
        {
            $qb->andWhere($qb->expr()->eq('category.id', $category));
        }
        if($region !== NULL && $region !== '0')
        {
            $qb->andWhere($qb->expr()->eq('region.id', $region));
        }
        if($departement !== NULL && $departement !== '0')
        {
            $qb->andWhere($qb->expr()->eq('departement.id', $departement));
        }
        if($city !== NULL && $city !== '')
        {
            $city = $this->slugify($city);
            $qb->andWhere("city.slug LIKE '%$city%'");
        }
        if ($postalCode !== null && $postalCode !== '') {
            $qb->andWhere("postalCode.value LIKE '%$postalCode%'");
        }

        $qb->orderBy('advert.dateCreation', 'DESC')->getQuery();
        $qb->setFirstResult(($page-1) * $nbPerPage)->setMaxResults($nbPerPage);

        return new Paginator($qb, true);
    }

    /*
    Get Adverts List for se_platform_advert_list route
    */
    public function getAdvertListByUser($advertId, $advertState, $userId, $page, $nbPerPage){

     $qb=$this->createQueryBuilder('advert');

        $qb->innerJoin('advert.user', 'user')
            ->addSelect('user');

        $qb->where($qb->expr()->eq('user.id', $userId))
            ->andWhere($qb->expr()->eq('advert.isDeleted', 0));

        if($advertId !== NULL && $advertId !== '0')
        {
            $qb->andWhere($qb->expr()->eq('advert.id', $advertId));
        }

        if($advertState !== NULL && $advertState !== '0')
        {
          if ($advertState === '1') {
            $qb->andWhere($qb->expr()->eq('advert.isPublished', 1));
          }
          elseif ($advertState === '2') {
            $qb->andWhere($qb->expr()->eq('advert.isPublished', 0));
          }

        }

       $qb->OrderBy('advert.dateCreation', 'DESC')->getQuery();

        $qb->setFirstResult(($page-1) * $nbPerPage)
            ->setMaxResults($nbPerPage);

        return new Paginator($qb, true);
    }

    /*
    Get Adverts List for se_platform_advert_list route
    */
    public function getAdvertByUser($userId){

     $qb=$this->createQueryBuilder('advert');

        $qb->innerJoin('advert.user', 'user')
            ->addSelect('user');

        $qb->where($qb->expr()->eq('user.id', $userId))
            ->andWhere($qb->expr()->eq('advert.isDeleted', 0));

       $qb->OrderBy('advert.auctionState', 'DESC')->getQuery();

       return $qb
           ->getQuery()
           ->getResult();
    }

    public function getAdvertListAdmin($title, $category, $page, $nbPerPage){
        $qb = $this->createQueryBuilder('advert')
                ->innerJoin('advert.user', 'user')
                ->addSelect('user')
                ->innerJoin('user.postalCode', 'postalCode')
                ->addSelect('postalCode')
                ->innerJoin('postalCode.city', 'city')
                ->addSelect('city')
                ->innerJoin('city.departement', 'departement')
                ->addSelect('departement')
                ->innerJoin('departement.region', 'region')
                ->addSelect('region')
                ->leftJoin('advert.category', 'category')
                ->addSelect('category');

        if($title !== NULL && $title !== '')
        {
            $qb->andWhere("advert.title LIKE '%$title%'")->orWhere("advert.detail LIKE '%$title%'");
        }
        if($category !== NULL && $category !== '0')
        {
            $qb->andWhere($qb->expr()->eq('category.id', $category));
        }

        $qb->orderBy('advert.dateCreation', 'DESC')->getQuery();
        $qb->setFirstResult(($page-1) * $nbPerPage)->setMaxResults($nbPerPage);

        return new Paginator($qb, true);
    }

}
