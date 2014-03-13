<?php

namespace BusSys\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Station
 */
class Station
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $routeNumber;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->routeNumber = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Station
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
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add routeNumber
     *
     * @param \BusSys\UserBundle\Entity\Route $routeNumber
     * @return Station
     */
    public function addRouteNumber(\BusSys\UserBundle\Entity\Route $routeNumber)
    {
        $this->routeNumber[] = $routeNumber;
    
        return $this;
    }

    /**
     * Remove routeNumber
     *
     * @param \BusSys\UserBundle\Entity\Route $routeNumber
     */
    public function removeRouteNumber(\BusSys\UserBundle\Entity\Route $routeNumber)
    {
        $this->routeNumber->removeElement($routeNumber);
    }

    /**
     * Get routeNumber
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRouteNumber()
    {
        return $this->routeNumber;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }
}
