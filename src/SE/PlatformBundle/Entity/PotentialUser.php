<?php

namespace SE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PotentialUser
 *
 * @ORM\Table(name="potential_user")
 * @ORM\Entity(repositoryClass="SE\PlatformBundle\Repository\PotentialUserRepository")
 */
class PotentialUser
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="isSociety", type="boolean")
     */
    private $isSociety;

    /**
     * @var bool
     *
     * @ORM\Column(name="isJobber", type="boolean")
     */
    private $isJobber;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="isSendMail", type="boolean")
     */
    private $isSendMail=false;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateSendMail", type="datetime", nullable=true)
     */
    private $dateSendMail;

    public function __construct()
    {
      $this->dateSendMail = null;
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
     * Set name
     *
     * @param string $name
     *
     * @return PotentialUser
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
     * Set isSociety
     *
     * @param boolean $isSociety
     *
     * @return PotentialUser
     */
    public function setIsSociety($isSociety)
    {
        $this->isSociety = $isSociety;

        return $this;
    }

    /**
     * Get isSociety
     *
     * @return bool
     */
    public function getIsSociety()
    {
        return $this->isSociety;
    }

    /**
     * Set isJobber
     *
     * @param boolean $isJobber
     *
     * @return PotentialUser
     */
    public function setIsJobber($isJobber)
    {
        $this->isJobber = $isJobber;

        return $this;
    }

    /**
     * Get isJobber
     *
     * @return bool
     */
    public function getIsJobber()
    {
        return $this->isJobber;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return PotentialUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isSendMail
     *
     * @param boolean $isSendMail
     *
     * @return PotentialUser
     */
    public function setIsSendMail($isSendMail)
    {
        $this->isSendMail = $isSendMail;

        return $this;
    }

    /**
     * Get isSendMail
     *
     * @return bool
     */
    public function getIsSendMail()
    {
        return $this->isSendMail;
    }

    /**
     * Set dateSendMail
     *
     * @param \DateTime $dateSendMail
     *
     * @return PotentialUser
     */
    public function setDateSendMail($dateSendMail)
    {
        $this->dateSendMail = $dateSendMail;

        return $this;
    }

    /**
     * Get dateSendMail
     *
     * @return \DateTime
     */
    public function getDateSendMail()
    {
        return $this->dateSendMail;
    }
}
