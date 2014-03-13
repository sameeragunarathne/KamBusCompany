<?php

namespace BusSys\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BusSysUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
