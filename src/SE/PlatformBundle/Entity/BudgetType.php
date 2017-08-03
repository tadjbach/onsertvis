<?php

namespace SE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BudgetType
 *
 * @ORM\Table(name="budget_type")
 * @ORM\Entity(repositoryClass="SE\PlatformBundle\Repository\BudgetTypeRepository")
 */
class BudgetType
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
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="labelNormal", type="string", length=255)
     */
    private $labelNormal;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;


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
     * Set slug
     *
     * @param string $slug
     *
     * @return BudgetType
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
     * Set labelNormal
     *
     * @param string $labelNormal
     *
     * @return BudgetType
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

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return BudgetType
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }
}
