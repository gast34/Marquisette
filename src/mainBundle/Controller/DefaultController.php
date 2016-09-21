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
        
        $marqueur = $this->getDoctrine()->getManager()->getRepository("AccountBundle:PointsVente");
        $results = $marqueur->findAll();
        
        return $this->render('mainBundle:Default:index.html.twig' , array('test' => $results));
    }

}
