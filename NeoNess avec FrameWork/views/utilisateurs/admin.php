<?php 

session_start();

foreach($utilisateurs as $utilisateur): ?>

<h2><a href="./utilisateurs/lire/<?= $utilisateur['id'] ?>"><?= $utilisateur['identifiant'] ?></a></h2>

<?php endforeach ?>