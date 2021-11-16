<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BonjourController extends AbstractController {
    function bonjour(){
        //return $this->render('base.html.twig'); 
        //return $this->redirectToRoute('/');
        //throw $this->createNotFoundException();

        /*Déclaration et initialisation de la variable $titre */
        $titre= "liste des utilisateurs";
        /* Déclaration et initialisation du tableau stockant une liste d'utilisateurs
        Comment pour toute méthode (déclaration et appel), il n'est pas nécessaire d'avoir
        une correspondance exacte entre les noms des variables php et ceux des variables de twig */
        $listeutilisateur=["Jean", "Pierre", "Louis", "Olivier"];
        /* Appel de la méthode render
        Deux paramètres :
            - Le nom de la vue  (le template)
            - Un tableau associatif contenant les paramètres à passer au template :
                Association des variables php aux variables twig */
        return $this->render('bonjour.html.twig', ['titre' => $titre, 'array' => $listeutilisateur]);
    }
}

