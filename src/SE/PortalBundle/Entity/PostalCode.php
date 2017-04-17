<?php

namespace SE\PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PostalCode
 *
 * @ORM\Table(name="postal_code")
 * @ORM\Entity(repositoryClass="SE\PortalBundle\Repository\PostalCodeRepository")
 */
class PostalCode
{
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
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

     /**
     * @ORM\ManyToOne(targetEntity="SE\PortalBundle\Entity\City")
     * @Assert\Valid()
     */
    private $city;
    
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
     * Set value
     *
     * @param string $value
     *
     * @return PostalCode
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set city
     *
     * @param \SE\PortalBundle\Entity\City $city
     *
     * @return PostalCode
     */
    public function setCity(\SE\PortalBundle\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \SE\PortalBundle\Entity\City
     */
    public function getCity()
    {
        return $this->city;
    }
}
