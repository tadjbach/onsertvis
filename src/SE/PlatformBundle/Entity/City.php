<?php

namespace SE\PlatformBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity(repositoryClass="SE\PlatformBundle\Repository\CityRepository")
 */
class City
{
     /**
     * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\Departement")
     * @Assert\Valid()
     */

    private $departement;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

   /**
     * @var string
     *
     * @ORM\Column(name="label_normal", type="string", length=255)
     */
    private $labelNormal;


    /**
     * @var float
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

   /**
     * @var string
     *
     * @ORM\Column(name="postalCode", type="string", length=10)
     */
    private $postalCode;

       /**
     * @var string
     *
     * @ORM\Column(name="postalCodes", type="string", length=255)
     */
    private $postalCodes;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return City
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set labelNormal
     *
     * @param string $labelNormal
     *
     * @return City
     */
    public function setLabelNormal($labelNormal)
    {
        $this->labelNormal = $labelNormal;

        return $this;
    }

    /**
     * Get labelNormal
     *
     * @return string
     */
    public function getLabelNormal()
    {
        return $this->labelNormal;
    }


    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return City
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return City
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return City
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set postalCodes
     *
     * @param string $postalCodes
     *
     * @return City
     */
    public function setPostalCodes($postalCodes)
    {
        $this->postalCodes = $postalCodes;

        return $this;
    }

    /**
     * Get postalCodes
     *
     * @return string
     */
    public function getPostalCodes()
    {
        return $this->postalCodes;
    }

    /**
     * Set departement
     *
     * @param \SE\PlatformBundle\Entity\Departement $departement
     *
     * @return City
     */
    public function setDepartement(\SE\PlatformBundle\Entity\Departement $departement = null)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \SE\PlatformBundle\Entity\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }
}
