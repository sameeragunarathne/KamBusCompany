<?php

namespace BusSys\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 */
class Ticket
{
    /**
     * @var string
     */
    private $fair;

    /**
     * @var string
     */
    private $number;

    /**
     * @var \BusSys\UserBundle\Entity\Trip
     */
    private $trip;

    /**
     * @var \BusSys\UserBundle\Entity\Station
     */
    private $destination;

    /**
     * @var \BusSys\UserBundle\Entity\Station
     */
    private $start;


    /**
     * Set fair
     *
     * @param string $fair
     * @return Ticket
     */
    public function setFair($fair)
    {
        $this->fair = $fair;
    
        return $this;
    }

    /**
     * Get fair
     *
     * @return string 
     */
    public function getFair()
    {
        return $this->fair;
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
     * Set trip
     *
     * @param \BusSys\UserBundle\Entity\Trip $trip
     * @return Ticket
     */
    public function setTrip(\BusSys\UserBundle\Entity\Trip $trip = null)
    {
        $this->trip = $trip;
    
        return $this;
    }

    /**
     * Get trip
     *
     * @return \BusSys\UserBundle\Entity\Trip 
     */
    public function getTrip()
    {
        return $this->trip;
    }

    /**
     * Set destination
     *
     * @param \BusSys\UserBundle\Entity\Station $destination
     * @return Ticket
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
     * Set start
     *
     * @param \BusSys\UserBundle\Entity\Station $start
     * @return Ticket
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
    
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }
}
