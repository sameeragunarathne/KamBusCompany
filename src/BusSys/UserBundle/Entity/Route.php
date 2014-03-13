<?php

namespace BusSys\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Route
 */
class Route
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var \BusSys\UserBundle\Entity\Station
     */
    private $start;

    /**
     * @var \BusSys\UserBundle\Entity\Station
     */
    private $destination;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $station;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->station = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set start
     *
     * @param \BusSys\UserBundle\Entity\Station $start
     * @return Route
     */
    public function setStart(\BusSys\UserBundle\Entity\Station $start = null)
    {
        $this->start = $start;
    
        return $this;
    }

    /**
     * Get start
     *
     * @return \BusSys\UserBundle\Entity\Station 
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set destination
     *
     * @param \BusSys\UserBundle\Entity\Station $destination
     * @return Route
     */
    public function setDestination(\BusSys\UserBundle\Entity\Station $destination = null)
    {
        $this->destination = $destination;
    
        return $this;
    }

    /**
     * Get destination
     *
     * @return \BusSys\UserBundle\Entity\Station 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Add station
     *
     * @param \BusSys\UserBundle\Entity\Station $station
     * @return Route
     */
    public function addStation(\BusSys\UserBundle\Entity\Station $station)
    {
        $this->station[] = $station;
    
        return $this;
    }

    /**
     * Remove station
     *
     * @param \BusSys\UserBundle\Entity\Station $station
     */
    public function removeStation(\BusSys\UserBundle\Entity\Station $station)
    {
        $this->station->removeElement($station);
    }

    /**
     * Get station
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStation()
    {
        return $this->station;
    }
    
    public function setNumber ($number)
    {
        $this -> number = $number;
        
        return $this;
    }
}
