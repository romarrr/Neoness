<?php

class Utilisateur extends Model{

    public function __construct()
    {
        // Nous définissons la table par défaut de ce modèle
        $this->table = "utilisateurs";
    
        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }

   
     // Retourne un article en fonction de son id
    
    public function findById(string $id){
        $sql = "SELECT * FROM ".$this->table." WHERE `id`='".$id."'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);    
    }

    public function findByIdUser(){ // page connexion.php avec form de connexion vers profil.php avec infos de l'utilisateur

        session_start();

        if (isset($_POST['connexion'])){

        $_SESSION['idconn'] = $_POST['idconn'];
        $_SESSION['mdp'] = $_POST['mdp'];
        
        $sql = "SELECT * FROM ".$this->table." WHERE `identifiant` = '".$_SESSION['idconn']."' AND `motdepasse` = '".$_SESSION['mdp']."'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);  

            if($result == false){ // verification de pseudo et de mot de passe

                echo "<script>alert(\"Pseudo ou Mot de passe incorrect !\")</script>";

                header('Refresh: 0.01; /utilisateurs/userconnexion');            
                
            } else { // si ils sont bons, retourne le résultat obtenu dans la table

                return $result;
                $_SESSION['idutilisateur'] = $utilisateur['id'];
            }
        }
        
        if(isset($_POST['submitmodifprofil'])){  // page modifprofil.php update la table puis la retourne pour affichage

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $tel = $_POST['tel'];
            $age = $_POST['datedenaissance'];
            $poids = $_POST['poids'];
            $taille = $_POST['taille'];
            $objectifdepoids = $_POST['objectif'];
            $identifiant = $_POST['idconn'];
            $motdepasse = $_POST['mdp'];           

        $sql = "UPDATE ".$this->table." SET `nom` = '$nom', `prenom` = '$prenom', `telephone` = '$tel', `datedenaissance` = '$age', `poids` = '$poids', `taille` = '$taille', `objectifdepoids` = '$objectifdepoids', `identifiant` = '$identifiant', `motdepasse` = '$motdepasse'
        WHERE `identifiant` = '".$_SESSION['idconn']."'";
         
        $query = $this->_connexion->prepare($sql);
        $query->execute();
       
        $_SESSION['idconn'] = $_POST['idconn'];
        $_SESSION['mdp'] = $_POST['mdp'];

        $sql = "SELECT * FROM ".$this->table." WHERE `identifiant` = '".$_SESSION['idconn']."' AND `motdepasse` = '".$_SESSION['mdp']."'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);  

        }

    }
    
    public function setUser(){ // page inscription.php insère les données du from dans la bdd
       
        session_start();
        
        if (isset($_POST['inscription'])){
        
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $tel = $_POST['tel'];
            $age = $_POST['datedenaissance'];
            $poids = $_POST['poids'];
            $taille = $_POST['taille'];
            $objectifdepoids = $_POST['objectif'];
            $identifiant = $_POST['idconn'];
            $motdepasse = $_POST['mdp'];
                           
        $sql = "INSERT INTO ".$this->table."(`nom`, `prenom`, `telephone`, `datedenaissance`, `poids`, `taille`, `objectifdepoids`, `identifiant`, `motdepasse`) 
        VALUES ('$nom', '$prenom', '$tel', '$age', '$poids', '$taille', '$objectifdepoids', '$identifiant', '$motdepasse')";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);  

        }       
    }

    public function PageModifUser(){ // fonction pour que l'utilisateur voit ses infos dans la page modifprofil.php

        session_start();

        if (isset($_POST['modifprofil'])){

            $sql = "SELECT * FROM ".$this->table." WHERE `identifiant` = '".$_SESSION['idconn']."'";
            $query = $this->_connexion->prepare($sql);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);

        }

        if(isset($_POST['supprprofil'])){  // supprimer l'utilisateur

        header('Refresh: 0.01; /utilisateurs');
        
        $sql = "DELETE FROM ".$this->table." WHERE `identifiant` = '".$_SESSION['idconn']."'";        
        $query = $this->_connexion->prepare($sql);
        $query->execute();      
        return $query->fetch(PDO::FETCH_ASSOC);  
        
        }

    }

}