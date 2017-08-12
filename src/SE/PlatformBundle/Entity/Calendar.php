<?php

namespace SE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Calendar
 *
 * @ORM\Table(name="calendar")
 * @ORM\Entity(repositoryClass="SE\PlatformBundle\Repository\CalendarRepository")
 */
class Calendar
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
     * @ORM\Column(name="day", type="string", length=50, nullable=true)
     */
    private $day;

    /**
     * @var string
     *
     * @ORM\Column(name="day_fr", type="string", length=50, nullable=true)
     */
    private $dayFr;

    /**
     * @var string
     *
     * @ORM\Column(name="day_fr_abbr", type="string", length=50, nullable=true)
     */
    private $dayFrAbbr;

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
     * Set day
     *
     * @param string $day
     *
     * @return Calendar
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set dayFr
     *
     * @param string $dayFr
     *
     * @return Calendar
     */
    public function setDayFr($dayFr)
    {
        $this->dayFr = $dayFr;

        return $this;
    }

    /**
     * Get dayFr
     *
     * @return string
     */
    public function getDayFr()
    {
        return $this->dayFr;
    }

    /**
     * Set dayFrAbbr
     *
     * @param string $dayFrAbbr
     *
     * @return Calendar
     */
    public function setDayFrAbbr($dayFrAbbr)
    {
        $this->dayFrAbbr = $dayFrAbbr;

        return $this;
    }

    /**
     * Get dayFrAbbr
     *
     * @return string
     */
    public function getDayFrAbbr()
    {
        return $this->dayFrAbbr;
    }
}
