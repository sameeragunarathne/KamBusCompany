<?php

namespace BusSys\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bus
 */
class Bus
{
    /**
     * @var string
     */
    private $capacitySmoking;

    /**
     * @var string
     */
    private $capacityNonsmoking;

    /**
     * @var string
     */
    private $number;


    /**
     * Set capacitySmoking
     *
     * @param string $capacitySmoking
     * @return Bus
     */
    public function setCapacitySmoking($capacitySmoking)
    {
        $this->capacitySmoking = $capacitySmoking;
    
        return $this;
    }

    /**
     * Get capacitySmoking
     *
     * @return string 
     */
    public function getCapacitySmoking()
    {
        return $this->capacitySmoking;
    }

    /**
     * Set capacityNonsmoking
     *
     * @param string $capacityNonsmoking
     * @return Bus
     */
    public function setCapacityNonsmoking($capacityNonsmoking)
    {
        $this->capacityNonsmoking = $capacityNonsmoking;
    
        return $this;
    }

    /**
     * Get capacityNonsmoking
     *
     * @return string 
     */
    public function getCapacityNonsmoking()
    {
        return $this->capacityNonsmoking;
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
    
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }
}
