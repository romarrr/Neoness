


<div class="row justify-content-center pt-5">

<p class ="col-8 fs-4 mx-1 mb-5 pt-1 pb-1 px-2 bg-danger text-center text-white" style="border-radius: 10px;">Vous pouvez vous inscrire à tout moment pour avoir un accés total à nos salles !</p>
</div>

<div class="row justify-content-around">
    <div class="col-5 fs-6">
    <form method="post" action="/utilisateurs/userconnexion"> <!-- formulaire pour l'inscription -->
        <fieldset>
            <p class ="fs-5 mx-1 mb-4 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;">Mon inscription :</p>
            
            <div class="form-group row">

                <label class ="col-auto col-form-label mx-1 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;" for="nom">Nom : </label>
                    <div class="col">
                        <input class="form-control" type="text" placeholder="Ex : Dupont" name="nom" id="nom" required/>
                    </div>
                <p></p>
                
                <label class ="col-auto col-form-label mx-1 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;" for="prenom">Prénom : </label>
                    <div class="col">    
                        <input class="form-control" type="text" placeholder="Ex : Damien" name="prenom" id="prenom" required/>
                    </div>
                <p></p>
            
                <label class ="col-auto col-form-label mx-1 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;" for="tel">N° de téléphone : </label>
                    <div class="col">   
                        <input class="form-control" type="text" placeholder="Ex : 0618191819" name="tel" id="tel" required/>
                    </div>
                <p></p>
           
                <label class ="col-auto col-form-label mx-1 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;" for="datedenaissance">Votre date de naissance : </label>
                    <div class="col">
                        <input class="form-control" type="date" name="datedenaissance" id="datedenaissance" required/>
                    </div>
                <p></p>
            
                <label class ="col-auto col-form-label mx-1 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;" for="poids">Poids (en kg) : </label>
                    <div class="col">    
                        <input class="form-control" type="text" placeholder="Ex : 80" name="poids" id="poids" required/>
                    </div>
                <p></p>
           
                <label class ="col-auto col-form-label mx-1 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;" for="taille">Taille (en cm) : </label>
                    <div class="col">    
                        <input class="form-control" type="text" placeholder="Ex : 180" name="taille" id="taille" required/>
                    </div>
                <p></p>

                <label class ="col-auto col-form-label mx-1 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;" for="objectif">Objectif de poids (en kg) : </label>
                    <div class="col">    
                        <input class="form-control" type="text" placeholder="Ex : 70" name="objectif" id="objectif" required/>
                    </div>
                <p></p>
           
                <label class ="col-auto col-form-label mx-1 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;" for="idconn">Pseudo : </label>
                    <div class="col">    
                        <input class="form-control" type="text" placeholder="Ex : Hulk32" name="idconn" id="idconn" required/>
                    </div>
                <p></p>

                <label class ="col-auto col-form-label mx-1 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;" for="mdp">Mot de passe : </label>
                    <div class="col">    
                        <input class="form-control" type="password" placeholder="Ex : xrvptdr" name="mdp" id="mdp" required/>
                    </div>
                <p></p>
            </div>

            <button class="offset-5 mt-4 bg-danger px-2 fs-5 text-white" style="border-radius: 10px;" type="submit" name="inscription">Valider</button>
            
        </fieldset> 
    </form>
    </div>
    <div class="col-4 text-center">
        <p class ="fs-5 mx-1 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;">Vos informations :</p>
        <img style="border-radius: 50%;" src="https://images.freeimages.com/images/premium/previews/6278/6278836-thumbs-up.jpg">
        <p class ="fs-5 mt-4 mx-1 mb-5 pt-1 pb-1 px-2 bg-secondary text-center text-white" style="border-radius: 10px;">Pour une meilleure prise en charge par nos services, merci de renseigner les informations les plus récentes !</p>
</div>
</div>
