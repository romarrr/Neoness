<div class="row justify-content-center pt-5">

<div class="col-5 mx-5 pt-5 pb-5 text-center text-white">

    <form method="post" action="/utilisateurs/profil"> <!-- formulaire pour l'inscription -->
       
            <p class="fs-4 bg-danger" style="border-radius: 10px;">Modifier vos informations :</p>

            <div class="row justify-content-between">
                <label  class="col-6 pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;" for="nom">Nom</label>
                <input  class="mt-4 col-6 pt-2 pb-2 px-2 text-center text-black" style="background-color: white; border-radius: 0px 10px 10px 0px;" type="text" value="<?= $utilisateur['nom'] ?>" placeholder="Ex : Dupont" name="nom" id="nom" required/>
                </div>

                <div class="row justify-content-between">
                <label  class="col-6 pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;" for="prenom">Prénom</label>
                <input  class="mt-4 col-6 pt-2 pb-2 px-2 text-center text-black" style="background-color: white; border-radius: 0px 10px 10px 0px;" type="text" value="<?= $utilisateur['prenom'] ?>" placeholder="Ex : Damien" name="prenom" id="prenom" required/>
                </div>

                <div class="row justify-content-between">
                <label class="col-6 pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;" for="tel">N° de téléphone</label>
                <input  class="mt-4 col-6 pt-2 pb-2 px-2 text-center text-black" style="background-color: white; border-radius: 0px 10px 10px 0px;" type="text" value="<?= $utilisateur['telephone'] ?>" placeholder="Ex : Dupont" name="tel" id="tel" required/>
                </div>

                <div class="row justify-content-between">
                <label  class="col-6 pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;" for="datedenaissance">Votre date de naissance</label>
                <input  class="mt-4 col-6 pt-2 pb-2 px-2 text-center text-black" style="background-color: white; border-radius: 0px 10px 10px 0px;" type="date" value="<?= $utilisateur['datedenaissance'] ?>" name="datedenaissance" id="datedenaissance" required/>
                </div>

                <div class="row justify-content-between">
                <label  class="col-6 pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;" for="poids">Poids</label>
                <input  class="mt-4 col-6 pt-2 pb-2 px-2 text-center text-black" style="background-color: white; border-radius: 0px 10px 10px 0px;" type="text" value="<?= $utilisateur['poids'] ?>" placeholder="Ex : 80" name="poids" id="poids" required/>
                </div>

                <div class="row justify-content-between">
                <label  class="col-6 pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;" for="taille">Taille (en cm)</label>
                <input  class="mt-4 col-6 pt-2 pb-2 px-2 text-center text-black" style="background-color: white; border-radius: 0px 10px 10px 0px;" type="text" value="<?= $utilisateur['taille'] ?>" placeholder="Ex : 180" name="taille" id="taille" required/>
                </div>

                <div class="row justify-content-between">
                <label  class="col-6 pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;" for="objectif">Objectif de poids</label>
                <input  class="mt-4 col-6 pt-2 pb-2 px-2 text-center text-black" style="background-color: white; border-radius: 0px 10px 10px 0px;" type="text" value="<?= $utilisateur['objectifdepoids'] ?>" placeholder="Ex : 70" name="objectif" id="objectif" required/>
                </div>

                <div class="row justify-content-between">
                <label  class="col-6 pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;" for="idconn">Pseudo</label>
                <input  class="mt-4 col-6 pt-2 pb-2 px-2 text-center text-black" style="background-color: white; border-radius: 0px 10px 10px 0px;" type="text" value="<?= $utilisateur['identifiant'] ?>" placeholder="Ex : Dupont" name="idconn" id="idconn" required/>
                </div>

                <div class="row justify-content-between">
                <label  class="col-6 pt-2 pb-2 px-2 mt-4 bg-secondary text-center text-white" style="border-radius: 10px 0px 0px 10px;" for="mdp">Mot de passe</label>
                <input  class="mt-4 col-6 pt-2 pb-2 px-2 text-center text-black" style="background-color: white; border-radius: 0px 10px 10px 0px;" type="text" value="<?= $utilisateur['motdepasse'] ?>" placeholder="Ex : Damien" name="mdp" id="mdp" required/>
                </div>
            
                <button class="bg-danger mt-4 text-white" style="border-radius: 10px;" type="submit" name="submitmodifprofil">Valider</button>
            
        
    </form>
</div>