<?php

namespace mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller {

    /**
     * @Route("/Marquis" , name="Marquis")
     */
    public function indexAction() {//Affichage de la page principale du site//
        $marqueur = $this->getDoctrine()->getManager()->getRepository("AccountBundle:PointsVente");
        $results = $marqueur->findAll(); //Récupération des points de ventes à afficher sur la map//

        return $this->render('mainBundle:Default:index.html.twig', array('points' => $results));
    }

}
