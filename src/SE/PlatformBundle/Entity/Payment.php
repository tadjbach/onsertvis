<?php

namespace SE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity(repositoryClass="SE\PlatformBundle\Repository\PaymentRepository")
 */
class Payment
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
     * @ORM\Column(name="labelNormal", type="string", length=255)
     */
    private $labelNormal;


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
     * Set labelNormal
     *
     * @param string $labelNormal
     *
     * @return Payment
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
}
