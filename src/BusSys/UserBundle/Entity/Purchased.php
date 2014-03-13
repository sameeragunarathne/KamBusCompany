<?php

namespace BusSys\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Purchased
 */
class Purchased
{
    /**
     * @var string
     */
    private $amount;

    /**
     * @var \BusSys\UserBundle\Entity\Trip
     */
    private $trip;


    /**
     * Set amount
     *
     * @param string $amount
     * @return Purchased
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set trip
     *
     * @param \BusSys\UserBundle\Entity\Trip $trip
     * @return Purchased
     */
    public function setTrip(\BusSys\UserBundle\Entity\Trip $trip)
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
}
