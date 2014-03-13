<?php

namespace BusSys\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trip
 */
class Trip
{
    /**
     * @var string
     */
    private $passengerCountSmoking;

    /**
     * @var string
     */
    private $passengerCountNonsmoking;

    /**
     * @var boolean
     */
    private $weatherCondition;

    /**
     * @var \DateTime
     */
    private $dateandtime;

    /**
     * @var string
     */
    private $id;

    /**
     * @var \BusSys\UserBundle\Entity\Route
     */
    private $routeNumber;

    /**
     * @var \BusSys\UserBundle\Entity\Bus
     */
    private $busNumber;


    /**
     * Set passengerCountSmoking
     *
     * @param string $passengerCountSmoking
     * @return Trip
     */
    public function setPassengerCountSmoking($passengerCountSmoking)
    {
        $this->passengerCountSmoking = $passengerCountSmoking;
    
        return $this;
    }

    /**
     * Get passengerCountSmoking
     *
     * @return string 
     */
    public function getPassengerCountSmoking()
    {
        return $this->passengerCountSmoking;
    }

    /**
     * Set passengerCountNonsmoking
     *
     * @param string $passengerCountNonsmoking
     * @return Trip
     */
    public function setPassengerCountNonsmoking($passengerCountNonsmoking)
    {
        $this->passengerCountNonsmoking = $passengerCountNonsmoking;
    
        return $this;
    }

    /**
     * Get passengerCountNonsmoking
     *
     * @return string 
     */
    public function getPassengerCountNonsmoking()
    {
        return $this->passengerCountNonsmoking;
    }

    /**
     * Set weatherCondition
     *
     * @param boolean $weatherCondition
     * @return Trip
     */
    public function setWeatherCondition($weatherCondition)
    {
        $this->weatherCondition = $weatherCondition;
    
        return $this;
    }

    /**
     * Get weatherCondition
     *
     * @return boolean 
     */
    public function getWeatherCondition()
    {
        return $this->weatherCondition;
    }

    /**
     * Set dateandtime
     *
     * @param \DateTime $dateandtime
     * @return Trip
     */
    public function setDateandtime($dateandtime)
    {
        $this->dateandtime = $dateandtime;
    
        return $this;
    }

    /**
     * Get dateandtime
     *
     * @return \DateTime 
     */
    public function getDateandtime()
    {
        return $this->dateandtime;
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
     * Set routeNumber
     *
     * @param \BusSys\UserBundle\Entity\Route $routeNumber
     * @return Trip
     */
    public function setRouteNumber(\BusSys\UserBundle\Entity\Route $routeNumber = null)
    {
        $this->routeNumber = $routeNumber;
    
        return $this;
    }

    /**
     * Get routeNumber
     *
     * @return \BusSys\UserBundle\Entity\Route 
     */
    public function getRouteNumber()
    {
        return $this->routeNumber;
    }

    /**
     * Set busNumber
     *
     * @param \BusSys\UserBundle\Entity\Bus $busNumber
     * @return Trip
     */
    public function setBusNumber(\BusSys\UserBundle\Entity\Bus $busNumber = null)
    {
        $this->busNumber = $busNumber;
    
        return $this;
    }

    /**
     * Get busNumber
     *
     * @return \BusSys\UserBundle\Entity\Bus 
     */
    public function getBusNumber()
    {
        return $this->busNumber;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }
}
