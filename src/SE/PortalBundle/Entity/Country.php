<?php

namespace SE\PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="SE\PortalBundle\Repository\CountryRepository")
 */
class Country
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
     * @var int
     *
     * @ORM\Column(name="code", type="integer")
     */
    private $code;
    
        /**
     * @var string
     *
     * @ORM\Column(name="alpha_2", type="string", length=2)
     */
    private $alpha2;
    
        /**
     * @var string
     *
     * @ORM\Column(name="alpha_3", type="string", length=3)
     */
    private $alpha3;
    
    /**
     * @var string
     *
     * @ORM\Column(name="label_FR", type="string", length=50)
     */
    private $labelFR;

        /**
     * @var string
     *
     * @ORM\Column(name="label_GB", type="string", length=50)
     */
    private $labelGB;
    

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
     * Set code
     *
     * @param integer $code
     *
     * @return Country
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set alpha2
     *
     * @param string $alpha2
     *
     * @return Country
     */
    public function setAlpha2($alpha2)
    {
        $this->alpha2 = $alpha2;

        return $this;
    }

    /**
     * Get alpha2
     *
     * @return string
     */
    public function getAlpha2()
    {
        return $this->alpha2;
    }

    /**
     * Set alpha3
     *
     * @param string $alpha3
     *
     * @return Country
     */
    public function setAlpha3($alpha3)
    {
        $this->alpha3 = $alpha3;

        return $this;
    }

    /**
     * Get alpha3
     *
     * @return string
     */
    public function getAlpha3()
    {
        return $this->alpha3;
    }

    /**
     * Set labelFR
     *
     * @param string $labelFR
     *
     * @return Country
     */
    public function setLabelFR($labelFR)
    {
        $this->labelFR = $labelFR;

        return $this;
    }

    /**
     * Get labelFR
     *
     * @return string
     */
    public function getLabelFR()
    {
        return $this->labelFR;
    }

    /**
     * Set labelGB
     *
     * @param string $labelGB
     *
     * @return Country
     */
    public function setLabelGB($labelGB)
    {
        $this->labelGB = $labelGB;

        return $this;
    }

    /**
     * Get labelGB
     *
     * @return string
     */
    public function getLabelGB()
    {
        return $this->labelGB;
    }
}
