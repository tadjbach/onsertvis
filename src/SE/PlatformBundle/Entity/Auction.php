<?php

namespace SE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Auction
 *
 * @ORM\Table(name="auction")
 * @ORM\Entity(repositoryClass="SE\PlatformBundle\Repository\AuctionRepository")
 */
class Auction
{
    /**
     * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Valid()
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\Advert")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Valid()
     */
    private $advert;

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
     * @ORM\Column(name="state", type="integer")
     */
    private $state;


    /**
     * @var bool
     *
     * @ORM\Column(name="isCanceled", type="boolean")
     */
    private $isCanceled=false;

    /**
     * @var float
     *
     * @ORM\Column(name="value", type="float")
     */
    private $value;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    public function __construct()
    {
        $this->dateCreation=new \DateTime();

        $this->state = 1;
    }

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
     * Set state
     *
     * @param integer $state
     *
     * @return Auction
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set value
     *
     * @param float $value
     *
     * @return Auction
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Auction
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set user
     *
     * @param \SE\PlatformBundle\Entity\User $user
     *
     * @return Auction
     */
    public function setUser(\SE\PlatformBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \SE\PlatformBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set advert
     *
     * @param \SE\PlatformBundle\Entity\Advert $advert
     *
     * @return Auction
     */
    public function setAdvert(\SE\PlatformBundle\Entity\Advert $advert = null)
    {
        $this->advert = $advert;

        return $this;
    }

    /**
     * Get advert
     *
     * @return \SE\PlatformBundle\Entity\Advert
     */
    public function getAdvert()
    {
        return $this->advert;
    }

    /**
     * Set isCanceled
     *
     * @param boolean $isCanceled
     *
     * @return Auction
     */
    public function setIsCanceled($isCanceled)
    {
        $this->isCanceled = $isCanceled;

        return $this;
    }

    /**
     * Get isCanceled
     *
     * @return boolean
     */
    public function getIsCanceled()
    {
        return $this->isCanceled;
    }
}
