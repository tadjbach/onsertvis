<?php

namespace SE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentState
 *
 * @ORM\Table(name="comment_state")
 * @ORM\Entity(repositoryClass="SE\PlatformBundle\Repository\CommentStateRepository")
 */
class CommentState
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
     * Set value
     *
     * @param string $value
     *
     * @return CommentState
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
     * Set labelNormal
     *
     * @param string $labelNormal
     *
     * @return CommentState
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
