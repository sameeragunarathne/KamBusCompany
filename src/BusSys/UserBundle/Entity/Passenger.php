<?php

namespace BusSys\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Passenger
 */
class Passenger
{
    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $initials;

    /**
     * @var string
     */
    private $telephoneNumber;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $id;


    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Passenger
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set initials
     *
     * @param string $initials
     * @return Passenger
     */
    public function setInitials($initials)
    {
        $this->initials = $initials;
    
        return $this;
    }

    /**
     * Get initials
     *
     * @return string 
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * Set telephoneNumber
     *
     * @param string $telephoneNumber
     * @return Passenger
     */
    public function setTelephoneNumber($telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;
    
        return $this;
    }

    /**
     * Get telephoneNumber
     *
     * @return string 
     */
    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Passenger
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
    
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }
}
