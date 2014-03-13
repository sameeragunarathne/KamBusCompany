<?php

namespace BusSys\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BusSys\UserBundle\Entity\Bus;

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
}
