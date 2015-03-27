<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Season
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\SeasonRepository")
 */
class Season
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string")
     */
    private $name;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="smallint")
     */
    private $number;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="releasedAt", type="date")
     */
    private $releasedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text")
     */
    private $summary;

    /**
     * @var series
     *
     * @ORM\ManyToOne(targetEntity="Series", cascade={"persist"})
     */
    private $series;

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
     * Set name
     *
     * @param string $name
     * @return Season
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
     * Set number
     *
     * @param integer $number
     * @return Season
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set releasedAt
     *
     * @param \DateTime $releasedAt
     * @return Season
     */
    public function setReleasedAt($releasedAt)
    {
        $this->releasedAt = $releasedAt;

        return $this;
    }

    /**
     * Get releasedAt
     *
     * @return \DateTime 
     */
    public function getReleasedAt()
    {
        return $this->releasedAt;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Season
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set series
     *
     * @param Series $series
     * @return Season
     */
    public function setSeries(Series $series = null)
    {
        $this->series = $series;

        return $this;
    }

    /**
     * Get series
     *
     * @return Series
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getSeries()->getName().' - season'.$this->getNumber();
    }
}
