<?php

namespace mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AccountBundle\Entity\User;

class DefaultController extends Controller {

    /**
     * @Route("/Marquis" , name="Marquis")
     */
    public function indexAction() {//Affichage de la page principale//
        /*
        $test = new User();
        $em = $this->getDoctrine()->getManager();
        
        $test->setUsername("gast34");
        $test->setPassword("5925c49719d5");
        $test->setSalt("");
        $test->setRoles(array("ROLE_USER"));
        
        $em->persist($test);
        $em->flush();
        
        */
        
        
        
        
        
        


        return $this->render('mainBundle:Default:index.html.twig');
    }

}
