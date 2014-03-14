<?php

namespace BusSys\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BusSys\UserBundle\Entity\Bus;
use BusSys\UserBundle\Entity\Passenger;
use BusSys\UserBundle\Entity\Purchased;
use BusSys\UserBundle\Entity\Users;

class DBconnectController extends Controller {

    public function indexAction($name) {
        return $this->render('BusSysUserBundle:Default:index.html.twig', array('name' => $name));
    }

    public function busAction() {
        $capacitySmoking = 22;
        $capacityNonsmoking = 18;
        $number = 'B00015';

        $bus = new Bus();
        $bus->setCapacityNonsmoking($capacityNonsmoking);
        $bus->setCapacitySmoking($capacitySmoking);
        $bus->setNumber($number);

        $em = $this->getDoctrine()->getEntityManager();

        $em->persist($bus);
        $em->flush();

        return $this->render('BusSysUserBundle:Default:checkAddData.html.twig');
    }

    public function passengerAction() {
        $id = 'P00015';
        $initials = 'ABCD';
        $lastname = 'Perera';
        $telephoneNumber = '0771234567';
        $email = 'abcd@gmail.com';

        $passenger = new Passenger();
        $passenger->setId($id);
        $passenger->setInitials($initials);
        $passenger->setLastname($lastname);
        $passenger->setTelephoneNumber($telephoneNumber);
        $passenger->setEmail($email);

        $em = $this->getDoctrine()->getEntityManager();

        $em->persist($passenger);
        $em->flush();

        return $this->render('BusSysUserBundle:Default:checkAddData.html.twig');
    }

    public function purchasedAction() {
        $amount = 1245.25;
        $tripId = 'TR00001';

        $purchasedObj = new Purchased();
        $purchasedObj->setAmount($amount);
        $purchasedObj->setTrip($tripId);

        $em = $this->getDoctrine()->getEntityManager();

        $em->persist($purchasedObj);
        $em->flush();

        return $this->render('BusSysUserBundle:Default:checkAddData.html.twig');
    }

    public function busCountAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $busCountQuery = $em->createQueryBuilder()
                ->select('count(number)')
                ->from('BusSysUserBundle:Bus', 'number');
        $query = $busCountQuery->getQuery();
        $count = $query->getSingleScalarResult();

        return $this->render('BusSysUserBundle:Default:busCountCheck.html.twig', array('count' => $count));
    }

    public function busSmokingAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $this->getDoctrine()
                ->getRepository('BusSysUserBundle:Bus');

        $query = $repository->createQueryBuilder('p')
                //->select('p.number')
                ->where('p.capacitySmoking > p.capacityNonsmoking')
                //->setParameter('smoking', '10')
                //->orderBy('p.capacitySmoking', 'ASC')
                ->getQuery();
        $products = $query->getArrayResult();
        return $this->render('BusSysUserBundle:Default:busCountCheck.html.twig', array('count' => $products));
    }

    //the method accepts a Request object and the hardcoded values of username
    //and password will be taken from that for validation
    //the set parameter method in the doctrine is used to prevent SQL injection
    public function validateAction() {
        $username = 'gunarathne';
        $password = 'samplePass';

        $em = $this->getDoctrine()->getEntityManager();
        $repository = $this->getDoctrine()
                ->getRepository('BusSysUserBundle:Users');

        $query = $repository->createQueryBuilder('u')
                ->select('u.firstname')
                ->where('u.username = :user and u.password = :pass')
                ->setParameter('user' , $username)
                ->setParameter('pass', $password)
                ->getQuery();
        try {
            $dbuser = $query->getSingleResult();
                    return $this->render('BusSysUserBundle:Default:welcomeuser.html.twig', array('user' => $dbuser));
        } catch (\Doctrine\Orm\NoResultException $e) {
            $dbuser = null;
            return $this->render('BusSysUserBundle:Default:oops.html.twig');
        }

    }

    /*
     * this code can also be used to create queries.
     * 
     * $em = $this->getDoctrine()->getEntityManager();
      $query = $em->createQuery(
      'SELECT p FROM AcmeStoreBundle:Product p WHERE p.price > :price ORDER BY p.price ASC'
      )->setParameter('price', '19.99');

      $products = $query->getResult();
     */
}
