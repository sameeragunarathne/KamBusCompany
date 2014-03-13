<?php

namespace BusSys\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BusSys\UserBundle\Entity\Bus;
use BusSys\UserBundle\Entity\Passenger;

class DBconnectController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BusSysUserBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function busAction()
    {
        $bus = new Bus();
        $bus ->setCapacityNonsmoking(15);
        $bus ->setCapacitySmoking(25);
        $bus ->setNumber('B00011');
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->persist($bus);
        $em->flush();
        
        return $this->render ('BusSysUserBundle:Default:checkAddData.html.twig');
    }
    
    public function passengerAction ()
    {
        $passenger = new Passenger();
        $passenger->setId('P00010');
        $passenger->setInitials('AAGCK');
        $passenger->setLastname('Aruma puduma');
        $passenger->setTelephoneNumber('0723712477');
        $passenger->setEmail('aagck@gmail.com');
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->persist($passenger);
        $em->flush();
        
        return $this->render ('BusSysUserBundle:Default:checkAddData.html.twig');
    }
}
