<?php

namespace SE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="SE\PlatformBundle\Repository\MessageRepository")
 */
class Message
{
    /**
     * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\User")
     * @ORM\JoinColumn(name="user_sender", referencedColumnName="id", nullable=false)
     * @Assert\Valid()
     */
    protected $sender;

    /**
     * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\User")
     * @ORM\JoinColumn(name="user_receiver", referencedColumnName="id", nullable=false)
     * @Assert\Valid()
     */
    protected $receiver;

    /**
     * @ORM\ManyToOne(targetEntity="SE\PlatformBundle\Entity\Advert")
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
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="state", type="integer")
     */
    private $state;

    /**
     * @var bool
     *
     * @ORM\Column(name="isPublished", type="boolean")
     */
    private $isPublished;

    /**
     * @var bool
     *
     * @ORM\Column(name="isDeleted", type="boolean")
     */
    private $isDeleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    public function __construct()
    {
        $this->dateCreation=new \DateTime();

        $this->state = 0;
        $this->isPublished=1;
        $this->isDeleted=0;
    }


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
     * Set content
     *
     * @param string $content
     *
     * @return Message
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return Message
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set isPublished
     *
     * @param boolean $isPublished
     *
     * @return Message
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get isPublished
     *
     * @return boolean
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return Message
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Message
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
     * Set sender
     *
     * @param \SE\PlatformBundle\Entity\User $sender
     *
     * @return Message
     */
    public function setSender(\SE\PlatformBundle\Entity\User $sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return \SE\PlatformBundle\Entity\User
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set receiver
     *
     * @param \SE\PlatformBundle\Entity\User $receiver
     *
     * @return Message
     */
    public function setReceiver(\SE\PlatformBundle\Entity\User $receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return \SE\PlatformBundle\Entity\User
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set advert
     *
     * @param \SE\PlatformBundle\Entity\Advert $advert
     *
     * @return Message
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
}
