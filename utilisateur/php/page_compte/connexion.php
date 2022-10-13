<?php
    session_start();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
</head>

<! début du header -->
<div class="header_navbar-logo">
   <img class="header_navbar-logo" src="../../image/logo-stjo.png">

</div>
<div class="header_navbar-menu">
    <a href="inscription.php">Inscription</a>
    <a href="connexion.php">Connexion</a>
</div>

<! fin du header -->

<! debut du body -->

    <div id="formContent">
        <h2 class="active"> Connectez vous</h2>

        <form action="../envoyer_de_donnee/envoyer_connexion.php" method="post">
            <input type="text" id="login"  name="identifiant" placeholder="Identifiant" required>
            <input type="password" id="password"  name="mdp" placeholder="Mot de passe" required>
            <a href = inscription.php><h4>Vous avez pas de compte ?</h4></a>
            <input type="submit" value="Connnectez vous">

    </div>
</div>
<! fin du body -->


<! début du footer -->

<! fin du footer -->

</body>
</html>