<?php

namespace SE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="SE\PlatformBundle\Repository\UserRepository")
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
     * @Assert\Regex(
     *  pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,16}$/",
     *  message="Le mot de passe doit contenir entre 6 et 16 caractères alphanumériques dont une majuscule, une minuscule et un chiffre."
     * )
     */
    protected $plainPassword;

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
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=200, nullable=true)
     */
    private $ipAddress;

     /**
     * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\PostalCode")
     * @Assert\Valid()
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="cpCity", type="string", length=25, nullable=true)
     */
    private $cpCity;

    /**
     * @ORM\ManyToMany(targetEntity="SE\PlatformBundle\Entity\Payment")
     * @Assert\Valid()
     */
    private $payment;

    /**
     * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\SocietyType")
     * @Assert\Valid()
     */
    private $societyType;

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
     * @var bool
     *
     * @ORM\Column(name="isDetailVisible", type="boolean")
     */
    private $isDetailVisible=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="isJobber", type="boolean")
     */
    private  $isJobber=false;

    /**
     * @ORM\ManyToMany(targetEntity="SE\PlatformBundle\Entity\Category")
     */
    private $categories;


    /**
     * @ORM\ManyToMany(targetEntity="SE\PlatformBundle\Entity\Calendar")
     */
    private $calendar;

     /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=50, nullable=true)
     */
    private $siret;

    /**
     * @var int
     *
     * @ORM\Column(name="rate", type="integer")
     */
    private $rate;

    /**
     * @var bool
     *
     * @ORM\Column(name="isNewMessage", type="boolean")
     */
    private $isNewMessage=false;


    /**
     * @var bool
     *
     * @ORM\Column(name="isNewAuction", type="boolean")
     */
    private $isNewAuction=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="isValideAuction", type="boolean")
     */
    private $isValideAuction=false;

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
     * @param \SE\PlatformBundle\Entity\Category $category
     *
     * @return User
     */
    public function addCategory(\SE\PlatformBundle\Entity\Category $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \SE\PlatformBundle\Entity\Category $category
     */
    public function removeCategory(\SE\PlatformBundle\Entity\Category $category)
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
     * Set postalCode
     *
     * @param \SE\PlatformBundle\Entity\PostalCode $postalCode
     *
     * @return User
     */
    public function setPostalCode(\SE\PlatformBundle\Entity\PostalCode $postalCode = null)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return \SE\PlatformBundle\Entity\PostalCode
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
     * @param \SE\PlatformBundle\Entity\Calendar $calendar
     *
     * @return User
     */
    public function setCalendar(\SE\PlatformBundle\Entity\Calendar $calendar = null)
    {
        $this->calendar = $calendar;

        return $this;
    }

    /**
     * Get calendar
     *
     * @return \SE\PlatformBundle\Entity\Calendar
     */
    public function getCalendar()
    {
        return $this->calendar;
    }

    /**
     * Add calendar
     *
     * @param \SE\PlatformBundle\Entity\Calendar $calendar
     *
     * @return User
     */
    public function addCalendar(\SE\PlatformBundle\Entity\Calendar $calendar)
    {
        $this->calendar[] = $calendar;

        return $this;
    }

    /**
     * Remove calendar
     *
     * @param \SE\PlatformBundle\Entity\Calendar $calendar
     */
    public function removeCalendar(\SE\PlatformBundle\Entity\Calendar $calendar)
    {
        $this->calendar->removeElement($calendar);
    }

    /**
     * Set payment
     *
     * @param \SE\PlatformBundle\Entity\Payment $payment
     *
     * @return User
     */
    public function setPayment(\SE\PlatformBundle\Entity\Payment $payment = null)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return \SE\PlatformBundle\Entity\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set societyType
     *
     * @param \SE\PlatformBundle\Entity\SocietyType $societyType
     *
     * @return User
     */
    public function setSocietyType(\SE\PlatformBundle\Entity\SocietyType $societyType = null)
    {
        $this->societyType = $societyType;

        return $this;
    }

    /**
     * Get societyType
     *
     * @return \SE\PlatformBundle\Entity\SocietyType
     */
    public function getSocietyType()
    {
        return $this->societyType;
    }

    /**
     * Set cpCity
     *
     * @param string $cpCity
     *
     * @return User
     */
    public function setCpCity($cpCity)
    {
        $this->cpCity = $cpCity;

        return $this;
    }

    /**
     * Get cpCity
     *
     * @return string
     */
    public function getCpCity()
    {
        return $this->cpCity;
    }

    /**
     * Set siret
     *
     * @param string $siret
     *
     * @return User
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Add payment
     *
     * @param \SE\PlatformBundle\Entity\Payment $payment
     *
     * @return User
     */
    public function addPayment(\SE\PlatformBundle\Entity\Payment $payment)
    {
        $this->payment[] = $payment;

        return $this;
    }

    /**
     * Remove payment
     *
     * @param \SE\PlatformBundle\Entity\Payment $payment
     */
    public function removePayment(\SE\PlatformBundle\Entity\Payment $payment)
    {
        $this->payment->removeElement($payment);
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return User
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set isDetailVisible
     *
     * @param boolean $isDetailVisible
     *
     * @return User
     */
    public function setIsDetailVisible($isDetailVisible)
    {
        $this->isDetailVisible = $isDetailVisible;

        return $this;
    }

    /**
     * Get isDetailVisible
     *
     * @return boolean
     */
    public function getIsDetailVisible()
    {
        return $this->isDetailVisible;
    }

    /**
     * Set isNewMessage
     *
     * @param boolean $isNewMessage
     *
     * @return User
     */
    public function setIsNewMessage($isNewMessage)
    {
        $this->isNewMessage = $isNewMessage;

        return $this;
    }

    /**
     * Get isNewMessage
     *
     * @return boolean
     */
    public function getIsNewMessage()
    {
        return $this->isNewMessage;
    }

    /**
     * Set isNewAuction
     *
     * @param boolean $isNewAuction
     *
     * @return User
     */
    public function setIsNewAuction($isNewAuction)
    {
        $this->isNewAuction = $isNewAuction;

        return $this;
    }

    /**
     * Get isNewAuction
     *
     * @return boolean
     */
    public function getIsNewAuction()
    {
        return $this->isNewAuction;
    }

    /**
     * Set isValideAuction
     *
     * @param boolean $isValideAuction
     *
     * @return User
     */
    public function setIsValideAuction($isValideAuction)
    {
        $this->isValideAuction = $isValideAuction;

        return $this;
    }

    /**
     * Get isValideAuction
     *
     * @return boolean
     */
    public function getIsValideAuction()
    {
        return $this->isValideAuction;
    }

    /**
     * Set isJobber
     *
     * @param boolean $isJobber
     *
     * @return User
     */
    public function setIsJobber($isJobber)
    {
        $this->isJobber = $isJobber;

        return $this;
    }

    /**
     * Get isJobber
     *
     * @return boolean
     */
    public function getIsJobber()
    {
        return $this->isJobber;
    }
}
