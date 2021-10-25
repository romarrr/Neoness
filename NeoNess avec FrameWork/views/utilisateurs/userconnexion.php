<div class="row justify-content-center">

    <div class="col-3 mx-5 pt-5 pb-5 text-center text-white" style="border-radius: 10px;">

    <p class="fs-4 bg-danger" style="border-radius: 10px;">Ma connexion :</p>
    
    <form class="pt-4 pb-4" style="border-radius: 10px;" method="post" action="/utilisateurs/profil"> <!-- formulaire pour la connexion -->
        
            
            <p>
                <label class="mx-1 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;" for="idconn">Pseudo : </label>
                <input type="text" placeholder="Ex : Hulk32" name="idconn" id="idconn" required/>
            </p>
            <p>
                <label class="mx-1 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;" for="mdp">Mot de passe : </label>
                <input type="password" placeholder="Ex : xrvptdr" name="mdp" id="mdp" required/>
            </p>
            <p class="mb-0">
                <input class="bg-danger text-white fs-5 mt-3" style="border-radius: 10px;" type="submit" name="connexion" value="Connexion" />
            </p>
    
    </form>
    </div>
</div>