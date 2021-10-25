<?php

class Activites extends Controller{
    
    // Cette méthode affiche la liste des utilisateurs
    
    public function index(){
        // On instancie le modèle "Utilisateur"
        $this->loadModel('Activite');

        // On stocke la liste des utilisateurs dans $utilisateurs
        $activite = $this->Activite->getAll();

        // On envoie les données à la vue index
        $this->render('index', compact('activite'));
    }
    
    public function activite(){
        // On instancie le modèle "Utilisateur"
        $this->loadModel('Activite');

        $activites = $this->Activite->PageActiviteUser();
        // On envoie les données à la vue lire

        $this->render('activite', compact('activites'));
    }

}

?>