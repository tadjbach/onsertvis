<?php

namespace SE\PortalBundle\Repository;

/**
 * RegionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RegionRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllOrder()
    {
        return $this->findBy(array(), array('position' => 'ASC'));
    }
}
