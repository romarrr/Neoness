<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/utilisateurs/script.js"></script>
    <link rel="stylesheet" href="/views/utilisateurs/style.css" type="text/css">
    <title>NEONESS</title>
  </head>

  <body>

    <header> 
      <section"><img class="img-fluid" src="https://shopsagency.com/wp-content/uploads/2019/12/tetiere-neoness-shops-1920x686.jpg" alt="logo"></section>

        <div class="row justify-content-between text-center gx-0">

          <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f07d00">

            <div class="collapse justify-content-around navbar-collapse" id="navbarSupportedContent">
   
              <div class="nav-item active col-3">
                <a class="nav-link text-white" href="/utilisateurs">HOME <span class="sr-only"></span></a>
              </div>
    
              <div class="nav-item col-3">
                  <a class="nav-link text-white publier" href="/utilisateurs/inscription/<?= "" ?>">INSCRIPTION</a>
                </div>   

                <div class="nav-item col-3">
                  <a class="nav-link text-white publier" href="/utilisateurs/userconnexion/<?= "" ?>">MON PROFIL</a>
                </div>   
            </div>
          </nav>
        </div>
    </header>

<main style="background-image: url('https://i0.wp.com/cdn.luxe.net/wp-content/uploads/2017/01/02235928/American-Copper-Gym-Luxe.jpg?ssl=1'); background-size: 100% 100%; background-attachment: fixed;">
    <?= $content ?>
</main>

<footer class="footer">


<!-- Copyright -->

    <div class="text-center" style="background-color: #f07d00">
      
      <a class="text-white" href="https://neoness.com/">NeoNess</a>
      </br>
      </br>
      </br>
      </br>
      <p class="text-white mb-0">© 2021 Copyright</p>

    </div>
<!-- Copyright -->
  </footer>
</body>
</html>