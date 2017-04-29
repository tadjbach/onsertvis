<?php

namespace SE\PortalBundle\Repository;

/**
 * PostalCodeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostalCodeRepository extends \Doctrine\ORM\EntityRepository
{
     static public function slugify($text)
        {
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
        
     public function getCpByRegionAndDpt($city){
         $qb=$this->createQueryBuilder('postalCode');

        $qb
            ->innerJoin('postalCode.city', 'city')
            ->addSelect('city');
        
        if($city !== NULL && $city !== ' ')
        {
            $city = $this->slugify($city);
            $qb->andWhere("city.slug LIKE '$city'");
        }
        
        return $qb
            ->getQuery()
            ->getResult();
    }
}
