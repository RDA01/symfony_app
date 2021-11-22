<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController {

    /**
     * @Route("bonjour/{parametre}", requirements = {"parametre"="\d+"}, methods={"GET"})
     */

    function bonjourNombre($parametre, Request $request){
        //return $this->render('base.html.twig'); 
        //return $this->redirectToRoute('/');
        //throw $this->createNotFoundException();

        $msgbonjour= "Bonjour"." ".$parametre;
        
        /*Déclaration et initialisation de la variable $titre */
        $titre= "liste des utilisateurs - accès via un nombre";
        /* Déclaration et initialisation du tableau stockant une liste d'utilisateurs
        Comment pour toute méthode (déclaration et appel), il n'est pas nécessaire d'avoir
        une correspondance exacte entre les noms des variables php et ceux des variables de twig */
        $listeutilisateur=["Jean", "Pierre", "Louis", "Olivier"];
        /* Appel de la méthode render
        Deux paramètres :
            - Le nom de la vue  (le template)
            - Un tableau associatif contenant les paramètres à passer au template :
                Association des variables php aux variables twig */
        return $this->render('bonjour.html.twig', ['bonjour' => $msgbonjour, 'titre' => $titre, 'array' => $listeutilisateur]);
        var_dump($request->query);die;

        //Déclaration d'une variable $parametre qui contient l'ensemble des paramètres de la requete GET */
        //$parametre = $request->query->all();
        /*Traitement*/
        /*$message = "Les paramètres qui ont été passés par l'URL sont : <br/>";
        foreach($parametre as $key => $value) {
            $message = $message . ' - '.$key . ' : ' . $value . '<br/>';
        }
        return new Response($message);*/
    }




    /**
     * @Route("bonjour/{parametre}")
     */

    function bonjourDefault($parametre, Request $request){
        //return $this->render('base.html.twig'); 
        //return $this->redirectToRoute('/');
        //throw $this->createNotFoundException();

        $msgbonjour= "Bonjour"." ".$parametre;

        /*Déclaration et initialisation de la variable $titre */
        $titre= "liste des utilisateurs - accès via une chaine de caractères";
        /* Déclaration et initialisation du tableau stockant une liste d'utilisateurs
        Comment pour toute méthode (déclaration et appel), il n'est pas nécessaire d'avoir
        une correspondance exacte entre les noms des variables php et ceux des variables de twig */
        $listeutilisateur=["Jean", "Pierre", "Louis", "Olivier"];
        /* Appel de la méthode render
        Deux paramètres :
            - Le nom de la vue  (le template)
            - Un tableau associatif contenant les paramètres à passer au template :
                Association des variables php aux variables twig */
        return $this->render('bonjour.html.twig', ['bonjour' => $msgbonjour, 'titre' => $titre, 'array' => $listeutilisateur]);
        var_dump($request->query);die;

        //Déclaration d'une variable $parametre qui contient l'ensemble des paramètres de la requete GET */
        //$parametre = $request->query->all();
        /*Traitement*/
        /*$message = "Les paramètres qui ont été passés par l'URL sont : <br/>";
        foreach($parametre as $key => $value) {
            $message = $message . ' - '.$key . ' : ' . $value . '<br/>';
        }
        return new Response($message);*/
    }



    /**
     * @Route("bienvenue")
     */

    function bienvenue(){
        return $this->render('bienvenue.html.twig');
    }


    /**
    * @Route("bienvenue/{nom}", name="bienvenuAvecNom")
    */

    function bienvenueAvecNom($nom){
        return new response ('Bienvenue '. $nom);
    }
}

