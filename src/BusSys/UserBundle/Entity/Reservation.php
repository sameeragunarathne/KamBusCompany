<?php

namespace BusSys\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var boolean
     */
    private $seatsection;

    /**
     * @var boolean
     */
    private $paymentReceived;

    /**
     * @var string
     */
    private $id;

    /**
     * @var \BusSys\UserBundle\Entity\Trip
     */
    private $trip;

    /**
     * @var \BusSys\UserBundle\Entity\Passenger
     */
    private $passenger;

    /**
     * @var \BusSys\UserBundle\Entity\Ticket
     */
    private $ticketNo;


    /**
     * Set seatsection
     *
     * @param boolean $seatsection
     * @return Reservation
     */
    public function setSeatsection($seatsection)
    {
        $this->seatsection = $seatsection;
    
        return $this;
    }

    /**
     * Get seatsection
     *
     * @return boolean 
     */
    public function getSeatsection()
    {
        return $this->seatsection;
    }

    /**
     * Set paymentReceived
     *
     * @param boolean $paymentReceived
     * @return Reservation
     */
    public function setPaymentReceived($paymentReceived)
    {
        $this->paymentReceived = $paymentReceived;
    
        return $this;
    }

    /**
     * Get paymentReceived
     *
     * @return boolean 
     */
    public function getPaymentReceived()
    {
        return $this->paymentReceived;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set trip
     *
     * @param \BusSys\UserBundle\Entity\Trip $trip
     * @return Reservation
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
     * Set passenger
     *
     * @param \BusSys\UserBundle\Entity\Passenger $passenger
     * @return Reservation
     */
    public function setPassenger(\BusSys\UserBundle\Entity\Passenger $passenger = null)
    {
        $this->passenger = $passenger;
    
        return $this;
    }

    /**
     * Get passenger
     *
     * @return \BusSys\UserBundle\Entity\Passenger 
     */
    public function getPassenger()
    {
        return $this->passenger;
    }

    /**
     * Set ticketNo
     *
     * @param \BusSys\UserBundle\Entity\Ticket $ticketNo
     * @return Reservation
     */
    public function setTicketNo(\BusSys\UserBundle\Entity\Ticket $ticketNo = null)
    {
        $this->ticketNo = $ticketNo;
    
        return $this;
    }

    /**
     * Get ticketNo
     *
     * @return \BusSys\UserBundle\Entity\Ticket 
     */
    public function getTicketNo()
    {
        return $this->ticketNo;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }
}
