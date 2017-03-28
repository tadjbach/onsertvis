<?php

namespace SE\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

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
     * @ORM\Column(name="accountType", type="string", length=5, nullable=true)
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
     * @var int
     *
     * @ORM\Column(name="postalCode", type="integer", length=5, nullable=true)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=200, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=200, nullable=true)
     */
    private $country;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModification", type="datetime", nullable=true)
     */
    private $dateModification;

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
     * @ORM\Column(name="phone_1", type="string", length=50, nullable=true)
     */
    private $phone1;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_2", type="string", length=50, nullable=true)
     */
    private $phone2;

    /**
     * @var bool
     *
     * @ORM\Column(name="isNewsLetter", type="boolean")
     */
    private $isNewsLetter=false;

    public function __construct()
    {
        $this->dateCreation=new \DateTime();
        $this->isAcountComplete=false;

        $this->setRoles(array('ROLE_AUTEUR'));

        $this->country='France';
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
     * Set dateModification
     *
     * @param \DateTime $dateModification
     *
     * @return User
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime
     */
    public function getDateModification()
    {
        return $this->dateModification;
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
     * Set phone1
     *
     * @param string $phone1
     *
     * @return User
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * Get phone1
     *
     * @return string
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     *
     * @return User
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return string
     */
    public function getPhone2()
    {
        return $this->phone2;
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
     * Set postalCode
     *
     * @param integer $postalCode
     *
     * @return User
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return integer
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
}