<?php

namespace SE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="SE\PlatformBundle\Repository\DepartementRepository")
 */
class Departement
{
     /**
     * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\Region")
     * @Assert\Valid()
     */

    private $region;

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
     * @var string
     *
     * @ORM\Column(name="label_Uppercase", type="string", length=255)
     */
    private $labelUppercase;

         /**
     * @var string
     *
     * @ORM\Column(name="label_Soundex", type="string", length=255)
     */
    private $labelSoundex;

   /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=5)
     */
    private $code;



    /**
     * Get id
     *
     * @return integer
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
     * @return Departement
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
     * @return Departement
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
     * Set labelUppercase
     *
     * @param string $labelUppercase
     *
     * @return Departement
     */
    public function setLabelUppercase($labelUppercase)
    {
        $this->labelUppercase = $labelUppercase;

        return $this;
    }

    /**
     * Get labelUppercase
     *
     * @return string
     */
    public function getLabelUppercase()
    {
        return $this->labelUppercase;
    }

    /**
     * Set labelSoundex
     *
     * @param string $labelSoundex
     *
     * @return Departement
     */
    public function setLabelSoundex($labelSoundex)
    {
        $this->labelSoundex = $labelSoundex;

        return $this;
    }

    /**
     * Get labelSoundex
     *
     * @return string
     */
    public function getLabelSoundex()
    {
        return $this->labelSoundex;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Departement
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set region
     *
     * @param \SE\PlatformBundle\Entity\Region $region
     *
     * @return Departement
     */
    public function setRegion(\SE\PlatformBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \SE\PlatformBundle\Entity\Region
     */
    public function getRegion()
    {
        return $this->region;
    }
}
