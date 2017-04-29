<?php

namespace SE\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class User extends BaseUser
{   
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="accountType", type="string", length=15, nullable=true)
     */
    private $accountType;

    /**
     * @var string
     *
     * @ORM\Column(name="civility", type="string", length=5, nullable=true)
     */
    private $civility;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=25, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=200, nullable=true)
     */
    private $address;

    /**
     * @ORM\ManyToOne(targetEntity="SE\PortalBundle\Entity\PostalCode")
     * @Assert\Valid()
     */
    private $postalCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUpdate", type="datetime", nullable=true)
     */
    private $dateUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="text", nullable=true)
     */
    private $detail;

    /**
     * @var bool
     *
     * @ORM\Column(name="isAcountComplete", type="boolean")
     */
    private $isAcountComplete=false;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=50, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="isNewsLetter", type="boolean")
     */
    private $isNewsLetter=false;

    
    /**
     * @ORM\ManyToMany(targetEntity="SE\PortalBundle\Entity\Category")
     */
    private $categories;

        
    /**
     * @ORM\ManyToMany(targetEntity="SE\AuctionBundle\Entity\Calendar")
     */
    private $calendar;
    
    /**
     * @var int
     *
     * @ORM\Column(name="rate", type="integer")
     */
    private $rate;
    
    public function __construct()
    {
        $this->dateCreation=new \DateTime();
        $this->isAcountComplete=false;
        $this->rate = -1;

        $this->setRoles(array('ROLE_AUTEUR'));
    }
    
    /**
     * Set civility
     *
     * @param string $civility
     *
     * @return User
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;

        return $this;
    }

    /**
     * Get civility
     *
     * @return string
     */
    public function getCivility()
    {
        return $this->civility;
    }
    
    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return User
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
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     *
     * @return User
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

    /**
     * Set detail
     *
     * @param string $detail
     *
     * @return User
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set isNewsLetter
     *
     * @param boolean $isNewsLetter
     *
     * @return User
     */
    public function setIsNewsLetter($isNewsLetter)
    {
        $this->isNewsLetter = $isNewsLetter;

        return $this;
    }

    /**
     * Get isNewsLetter
     *
     * @return boolean
     */
    public function getIsNewsLetter()
    {
        return $this->isNewsLetter;
    }

    /**
     * Set isAcountComplete
     *
     * @param boolean $isAcountComplete
     *
     * @return User
     */
    public function setIsAcountComplete($isAcountComplete)
    {
        $this->isAcountComplete = $isAcountComplete;

        return $this;
    }

    /**
     * Get isAcountComplete
     *
     * @return boolean
     */
    public function getIsAcountComplete()
    {
        return $this->isAcountComplete;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set accountType
     *
     * @param string $accountType
     *
     * @return User
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Add category
     *
     * @param \SE\PortalBundle\Entity\Category $category
     *
     * @return User
     */
    public function addCategory(\SE\PortalBundle\Entity\Category $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \SE\PortalBundle\Entity\Category $category
     */
    public function removeCategory(\SE\PortalBundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set city
     *
     * @param \SE\PortalBundle\Entity\City $city
     *
     * @return User
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

    /**
     * Set postalCode
     *
     * @param \SE\PortalBundle\Entity\PostalCode $postalCode
     *
     * @return User
     */
    public function setPostalCode(\SE\PortalBundle\Entity\PostalCode $postalCode = null)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return \SE\PortalBundle\Entity\PostalCode
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     *
     * @return User
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set calendar
     *
     * @param \SE\AuctionBundle\Entity\Calendar $calendar
     *
     * @return User
     */
    public function setCalendar(\SE\AuctionBundle\Entity\Calendar $calendar = null)
    {
        $this->calendar = $calendar;

        return $this;
    }

    /**
     * Get calendar
     *
     * @return \SE\AuctionBundle\Entity\Calendar
     */
    public function getCalendar()
    {
        return $this->calendar;
    }

    /**
     * Add calendar
     *
     * @param \SE\AuctionBundle\Entity\Calendar $calendar
     *
     * @return User
     */
    public function addCalendar(\SE\AuctionBundle\Entity\Calendar $calendar)
    {
        $this->calendar[] = $calendar;

        return $this;
    }

    /**
     * Remove calendar
     *
     * @param \SE\AuctionBundle\Entity\Calendar $calendar
     */
    public function removeCalendar(\SE\AuctionBundle\Entity\Calendar $calendar)
    {
        $this->calendar->removeElement($calendar);
    }
}
