<?php

namespace HM\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        //Si connecté renvoi vers le feed sinon vers la home
        return $this->render('HMMainBundle:Default:index.html.twig');
    }
    
    public function homeAction(){
        //Renvoi la vue home uniquement
    }
    
    public function feedAction($userID) {
        //get summoner followed
        //sync all summoner matches
        //get all matches IN(summoners) group by matches ?
        //Création d'un structure pour l'affichage 1 match = 1 ligne
    }
    
    public function searchAction($region, $summonerName){
        //sync du summoner
    }
    
    public function profileAction($region, $summonerID){
        //sync du summoner
        //synch des match recent
        //Créaation de la structure (uniquement pour un sumoner)
    }
    
    public function signupAction(){
        //appel de la vue d'inscription
    }
    
    public function signinAction(){
        //Appel de la vue de connexion
    }

}
