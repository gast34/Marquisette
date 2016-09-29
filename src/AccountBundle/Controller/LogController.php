<?php

namespace AccountBundle\Controller;

use AccountBundle\Entity\Devis;
use AccountBundle\Entity\PointsVente;
use AccountBundle\Entity\User;
use AccountBundle\Form\UserType;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LogController extends Controller {

    /**
     * @Route("/connexion")
     */
    public function connecAction() {//Fonction pour connecter l'utilisateur
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            return $this->redirectToRoute('Marquis'); //Retour sur la page principal//
        }

        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('AccountBundle:Default:login.html.twig', array(
                    'last_username' => $authenticationUtils->getLastUsername(),
                    'error' => $authenticationUtils->getLastAuthenticationError(),
        ));
    }

    /**
     * @Route("/gestion" , name = "gestion")
     */
    public function gestionAction() {//Fonction principale de la page gestion//
        //Récupération des entités à afficher dans la page gestion//
        $comptes = $this->getDoctrine()->getManager()->getRepository("AccountBundle:User");
        $results_use = $comptes->findAll();
        $marqueur = $this->getDoctrine()->getManager()->getRepository("AccountBundle:PointsVente");
        $results = $marqueur->findAll();
        $devis = $this->getDoctrine()->getManager()->getRepository("AccountBundle:Devis");
        $results_devis = $devis->findAll();

        //Instances d'une entité pour créer le formulaire//

        $user = new User();

        //Créations d'un formulaire à partir du formType//

        $form_user = $this->get('form.factory')->create(UserType::class, $user);

        return $this->render('AccountBundle:Default:gestion.html.twig', array('form_user' => $form_user->createView(), 'points' => $results, 'users' => $results_use, 'devis' => $results_devis));
    }

    /**
     * @Route("/ajoutDevis")
     */
    function ajoutDevisAction(Request $request) {//Fonction pour envoyer un devis 
        $em = $this->getDoctrine()->getManager();
        $devis = new Devis();

        if ($request->getMethod() == "POST") {

            $file = new UploadedFile($_FILES['devis']['tmp_name'], $_FILES['devis']['name']);
            $file->move($request->get('select') . "/", $_FILES['devis']['name']); //Deplacement du devis dans le bon dossier

            $devis->setNom($_FILES['devis']['name']);

            $devis->setDate(new DateTime);

            $devis->setSrc($request->get('select') . "/" . $_FILES['devis']['name']);

            $devis->setProp($request->get('select'));


            $em->persist($devis);
            $em->flush();
            
        }
        return new Response("Devis bien envoyé !"); //Tout s'est bien passé
    }

    /**
     * @Route("/addPoints")
     */
    function AddPointAction(Request $request) {//Fonction pour ajouter un point de repère
        $em = $this->getDoctrine()->getManager();
        $point = new PointsVente();

        if ($request->getMethod() == "POST") {
            $point->setAdresse($request->get('adresse'));

            $point->setDescription($request->get('description'));
            $point->setLatitude($request->get('latitude'));
            $point->setLongitude($request->get('longitude'));

            $em->persist($point);
            $em->flush();
        }
        $response = new JsonResponse(); //Retour des données permettant la construction d'une div point
        $response->setData(array('adresse' => $point->getAdresse(), 'description' => $point->getDescription()));
        return $response;
    }

    /**
     * @Route("/supprimer/points/{nom}")
     */
    function deletePointAction($nom) {//Fonction pour supprimer un point de repère
        $em = $this->getDoctrine()->getManager();

        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('AccountBundle:PointsVente');

        $point = $repository->findOneBy(array('description' => $nom)); //Récupération du point à supprimer

        $em->remove($point);
        $em->flush();

        return $this->redirectToRoute("gestion");
    }

    /**
     * @Route("/ajoutUsers")
     */
    function ajoutUsersAction(Request $request) {//Fonction pour ajouter un utilisateur
        $em = $this->getDoctrine()->getManager();
        $user = new User();

        if ($request->getMethod() == "POST") {

            $user->setUsername($request->get('username'));
            $user->setPassword($request->get('password'));
            $user->setMail($request->get('mail'));
            $user->setRoles(array('ROLE_USER'));
            $user->setSalt("");

            $em->persist($user);
            $em->flush();

            mkdir($user->getUsername()); //Création du dossier personnel de l'utilisateur
        }

        $response = new JsonResponse(); //Retour des données permettant la construction d'une div user
        $response->setData(array('username' => $user->getUsername(), 'password' => $user->getPassword(), 'mail' => $user->getMail()));

        return $response;
    }

    /**
     * @Route("/supprimer/users/{nom}")
     */
    function deleteUsersAction($nom) {//Fonction pour supprimer un utilisateur
        rmdir($nom);

        $em = $this->getDoctrine()->getManager();

        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('AccountBundle:User');

        $user = $repository->findOneBy(array('username' => $nom)); //Récupération de l'utilisateur à supprimer

        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute("gestion");
    }

    /**
     * @Route("/modifierPass")
     */
    function ModifPassAction(Request $request) {//Fonction pour modifer le mot de passe d'un utilisateur
        $em = $this->getDoctrine()->getManager();
        $user = new User();

        if ($request->getMethod() == "POST") {

            $comptes = $this->getDoctrine()->getManager()->getRepository("AccountBundle:User");
            $user = $comptes->findOneBy(array('username' => $request->get('username')));

            if ($request->get('modif_pass_actu') == $user->getPassword() && $request->get('modif_pass_new') == $request->get('modif_pass_new_conf')) {
                $user->setPassword($request->get('modif_pass_new'));
                $em->merge($user);
                $em->flush();
                return new Response("Votre mot de passe à bien été modifié");
            }
        }
    }

}
