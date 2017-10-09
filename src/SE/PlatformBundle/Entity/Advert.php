<?php

namespace SE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Advert
 *
 * @ORM\Table(name="advert")
 * @ORM\Entity(repositoryClass="SE\PlatformBundle\Repository\AdvertRepository")
 */
class Advert
{
    /**
     * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Valid()
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Valid()
     */
    private $userValide;

    /**
     * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\Category")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Valid()
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\BudgetType")
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid()
     */
    private $budgetType;

    /**
     * @ORM\OneToOne(targetEntity="SE\PlatformBundle\Entity\Image", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;

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
     * @ORM\Column(name="title", type="string", length=150)
     */
    private $title;

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
     * @ORM\Column(name="detail", type="text")
     */
    private $detail;

    /**
     * @var bool
     *
     * @ORM\Column(name="isEnabled", type="boolean")
     */
    private $isEnabled=true;

    /**
     * @var bool
     *
     * @ORM\Column(name="isDeleted", type="boolean")
     */
    private $isDeleted=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="isPublished", type="boolean")
     */
    private $isPublished=false;

    /**
     * @var int
     *
     * @ORM\Column(name="auctionState", type="integer")
     */
    private $auctionState;

    /**
     * @var int
     *
     * @ORM\Column(name="commentState", type="integer")
     */
    private $commentState;

   /**
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="cpCity", type="string", length=25, nullable=true)
     */
    private $cpCity;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=200, nullable=true)
     */
    private $address;

    /**
    * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\PostalCode")
    * @Assert\Valid()
    */
    private $postalCode;

    public function __construct()
    {
        $this->dateCreation=new \DateTime();
        $this->auctionState=0;
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
     * Set title
     *
     * @param string $title
     *
     * @return Advert
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Advert
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
     * @return Advert
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
     * @return Advert
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
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Advert
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return Advert
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set isPublished
     *
     * @param boolean $isPublished
     *
     * @return Advert
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get isPublished
     *
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Advert
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
     * Set user
     *
     * @param \SE\PlatformBundle\Entity\User $user
     *
     * @return Advert
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
     * Set category
     *
     * @param \SE\PlatformBundle\Entity\Category $category
     *
     * @return Advert
     */
    public function setCategory(\SE\PlatformBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \SE\PlatformBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Advert
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
     * Set auctionState
     *
     * @param integer $auctionState
     *
     * @return Advert
     */
    public function setAuctionState($auctionState)
    {
        $this->auctionState = $auctionState;

        return $this;
    }

    /**
     * Get auctionState
     *
     * @return integer
     */
    public function getAuctionState()
    {
        return $this->auctionState;
    }

    /**
     * Set image
     *
     * @param \SE\PlatformBundle\Entity\Image $image
     *
     * @return Advert
     */
    public function setImage(\SE\PlatformBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \SE\PlatformBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    public function getUploadDir()
    {
        // On retourne le chemin relatif vers l'image pour un navigateur
        return 'uploads/img';
    }

    public function getWebPathNoImage()
    {
        return $this->getUploadDir().'/se-no-image.jpeg';
    }

    /**
     * Set commentState
     *
     * @param integer $commentState
     *
     * @return Advert
     */
    public function setCommentState($commentState)
    {
        $this->commentState = $commentState;

        return $this;
    }

    /**
     * Get commentState
     *
     * @return integer
     */
    public function getCommentState()
    {
        return $this->commentState;
    }

    /**
     * Set budgetType
     *
     * @param \SE\PlatformBundle\Entity\BudgetType $budgetType
     *
     * @return Advert
     */
    public function setBudgetType(\SE\PlatformBundle\Entity\BudgetType $budgetType)
    {
        $this->budgetType = $budgetType;

        return $this;
    }

    /**
     * Get budgetType
     *
     * @return \SE\PlatformBundle\Entity\BudgetType
     */
    public function getBudgetType()
    {
        return $this->budgetType;
    }

    /**
     * Set postalCode
     *
     * @param \SE\PlatformBundle\Entity\PostalCode $postalCode
     *
     * @return Advert
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
     * Set cpCity
     *
     * @param string $cpCity
     *
     * @return Advert
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
     * Set userValide
     *
     * @param \SE\PlatformBundle\Entity\User $userValide
     *
     * @return Advert
     */
    public function setUserValide(\SE\PlatformBundle\Entity\User $userValide)
    {
        $this->userValide = $userValide;

        return $this;
    }

    /**
     * Get userValide
     *
     * @return \SE\PlatformBundle\Entity\User
     */
    public function getUserValide()
    {
        return $this->userValide;
    }
}
