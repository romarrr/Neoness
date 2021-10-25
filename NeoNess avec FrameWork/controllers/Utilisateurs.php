<?php

class Utilisateurs extends Controller{
    
    // Cette méthode affiche la liste des utilisateurs
    
    public function index(){
        // On instancie le modèle "Utilisateur"
        $this->loadModel('Utilisateur');

        // On stocke la liste des utilisateurs dans $utilisateurs
        $utilisateurs = $this->Utilisateur->getAll();

        // On envoie les données à la vue index
        $this->render('index', compact('utilisateurs'));
    }

     // Méthode permettant d'afficher un utilisateur à partir de son id
    
    public function lire($id){
        // On instancie le modèle "Utilisateur"
        $this->loadModel('Utilisateur');

        // On stocke l'utilisateur dans $utilisateur
        $utilisateur = $this->Utilisateur->findById($id);

        // On envoie les données à la vue lire
        $this->render('lire', compact('utilisateur'));
    }

    public function profil(){
        // On instancie le modèle "Utilisateur"
        $this->loadModel('Utilisateur');

        // On stocke l'utilisateur dans $utilisateur
        $utilisateur = $this->Utilisateur->findByIdUser();
    
        // On envoie les données à la vue profil
        $this->render('profil', compact('utilisateur'));
    }

    public function userconnexion(){
        // On instancie le modèle "Utilisateur"
        $this->loadModel('Utilisateur');

        // On stocke l'utilisateur dans $utilisateur
        $utilisateur = $this->Utilisateur->setUser();

        // On envoie les données à la vue lire
        $this->render('userconnexion', compact('utilisateur'));
    }

    public function inscription(){
        // On instancie le modèle "Utilisateur"
        $this->loadModel('Utilisateur');

        // On envoie les données à la vue lire
        $this->render('inscription');
    }

    public function modifprofil(){

        $this->loadModel('Utilisateur');

        $utilisateur = $this->Utilisateur->PageModifUser();

        $this->render('modifprofil', compact('utilisateur'));
    }

}