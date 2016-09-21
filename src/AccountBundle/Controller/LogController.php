<?php

namespace AccountBundle\Controller;

use AccountBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LogController extends Controller {

    /**
     * @Route("/connexion")
     */
    public function connecAction() {


        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            return $this->redirectToRoute('Marquis');
        }

        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)

        $authenticationUtils = $this->get('security.authentication_utils');


        return $this->render('AccountBundle:Default:login.html.twig', array(
                    'last_username' => $authenticationUtils->getLastUsername(),
                    'error' => $authenticationUtils->getLastAuthenticationError(),
        ));
    }

    /**
     * @Route("/gestion" , name = "gestion")
     */
    public function gestionAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $user = new User();

        $form = $this->createFormBuilder($user)
                ->add('Username', TextType::class)
                ->add('Password')
                ->add('mail' , EmailType::class)
                ->add('Envoyer', SubmitType::class)
                ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            
            $user->setSalt("gg");
            $em->persist($user);
            $em->flush();

            return $this->redirect("gestion");
        }
        return $this->render('AccountBundle:Default:gestion.html.twig', array('form' => $form->createView()));
    }

}
