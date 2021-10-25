<!-- PAGE profil.php pour afficher les infos de l'utilisateur qui vient de se connecter -->
<div class="row justify-content-center">

<div class="col-5 mx-5 pt-5 pb-5 text-center text-white">

    <p class="fs-4 bg-danger" style="border-radius: 10px;">Mon profil :</p>

        <form method="POST" action="/utilisateurs/modifprofil/">

        <div class="row justify-content-between">
            <div class="col-6 pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;">Nom : </div><div class="mt-4 col-6 pt-2 pb-2 px-2 text-center text-white" style="background-color: #f07d00; border-radius: 0px 10px 10px 0px;"><?= $utilisateur['nom'] ?></div>
        </div>

        <div class="row justify-content-between">
            <div class="col-6  pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;">Prénom : </div><div class="mt-4 col-6  pt-2 pb-2 px-2 text-center text-white" style="background-color: #f07d00; border-radius: 0px 10px 10px 0px;"><?= $utilisateur['prenom'] ?></div>
        </div>   

        <div class="row justify-content-between">
            <div class="col-6  pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;">Date de naissance : </div><div class="mt-4 col-6  pt-2 pb-2 px-2 text-center text-white" style="background-color: #f07d00; border-radius: 0px 10px 10px 0px;"><?= $utilisateur['datedenaissance'] ?></div>
        </div>

        <div class="row justify-content-between">
            <div class="col-6  pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;">N° de téléphone : </div><div class="mt-4 col-6  pt-2 pb-2 px-2 text-center text-white" style="background-color: #f07d00; border-radius: 0px 10px 10px 0px;"><?= $utilisateur['telephone'] ?></div>
        </div>

        <div class="row justify-content-between">
            <div class="col-6  pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;">Taille : </div><div class="mt-4 col-6  pt-2 pb-2 px-2 text-center text-white" style="background-color: #f07d00; border-radius: 0px 10px 10px 0px;"><?= $utilisateur['taille'] ?> cm </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-6  pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;">Poids : </div><div class="mt-4 col-6  pt-2 pb-2 px-2 text-center text-white" style="background-color: #f07d00; border-radius: 0px 10px 10px 0px;"><?= $utilisateur['poids'] ?> kg </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-6  pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;">Objectif de poids : </div><div class="mt-4 col-6  pt-2 pb-2 px-2 text-center text-white" style="background-color: #f07d00; border-radius: 0px 10px 10px 0px;"><?= $utilisateur['objectifdepoids'] ?> kg </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-6  pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;">Identifiant : </div><div class="mt-4 col-6  pt-2 pb-2 px-2 text-center text-white" style="background-color: #f07d00; border-radius: 0px 10px 10px 0px;"><?= $utilisateur['identifiant'] ?></div>
        </div>

        <div class="row justify-content-between">
            <div class="col-6  pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;">Mot de passe : </div><div class="mt-4 col-6  pt-2 pb-2 px-2 text-center text-white" style="background-color: #f07d00; border-radius: 0px 10px 10px 0px;"><?= $utilisateur['motdepasse'] ?></div>
        </div>

            <p><input class="mt-4 bg-danger text-white" style="border-radius: 10px;" type="submit" name="modifprofil" value="Modifier" /></p>

            <button class="mt-4 bg-secondary text-white" style="border-radius: 10px;" type="submit" name="supprprofil" onclick="return confirm('Etes vous sûr ?')">Supprimer mon compte</button>
        
        </form>

        <p class="fs-4 mt-5 bg-danger" style="border-radius: 10px;">Ma santé :</p>

        <div class="mt-4 pt-2 pb-2 px-2 text-center text-white" style="background-color: #f07d00; border-radius: 10px">
        <?php // Fonction pour le calcul de l'IMC
        $imc = round($utilisateur['poids'] / (($utilisateur['taille']/100)*($utilisateur['taille']/100)),2);
            if ($imc >= 18.5 && $imc <= 25) {
                $message = "Votre IMC est normal car il se situe entre 18,5 et 25 !";
            } else if ($imc < 18.5) {
                $message = "Votre IMC est trop bas. Un IMC \"normal\" se situe entre 18,5 et 25 !";
            } else if ($imc > 25) {
                $message = "Votre IMC est trop grand. Un IMC \"normal\" se situe entre 18,5 et 25 !";
            }

            echo "Votre <b>IMC</b> est de : <b>" . $imc . "</b>. " . $message;
        ?>
        </div>
        
    <p class="fs-4 mt-5 bg-danger" style="border-radius: 10px;">Mes activités :</p>
        
        <button type="submit" name="voiractivite"><a href="/utilisateurs/activite">Aller à "Mes activités"</a></button>

</div>

</div>