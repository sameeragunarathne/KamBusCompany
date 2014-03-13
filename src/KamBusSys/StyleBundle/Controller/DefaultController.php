<?php

namespace KamBusSys\StyleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KamBusSysStyleBundle:Default:index.html.twig', array('name' => $name));
    }
}
