<?php

class Activite extends Model{

    public function __construct()
    {
        // Nous définissons la table par défaut de ce modèle
        $this->table = "activite";
    
        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }

    public function PageActiviteUser(){ // fonction pour que l'utilisateur voit ses infos dans la page modifprofil.php

        session_start();

        if (isset($_POST['voiractivite'])){

            $sql = "SELECT * FROM ".$this->table." WHERE `idutilisateur` = '".$_SESSION['id']."'";
            $query = $this->_connexion->prepare($sql);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
            
        }

    }

}

?>