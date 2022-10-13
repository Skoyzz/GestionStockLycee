<?php
session_start();
if($_SESSION['connecte'] !="oui"){
    header("location: ../Connexion&Inscription/inscription.php");
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenue</title>
</head>


<! début du header -->
<div class="header_navbar-logo">
    <a href = "bienvenue.php"><img class="header_navbar-logo" src="../image/logo-stjo.png">

</div>
<div class="header_menu">
                <a href="../php/page_php_user/carnet_utilisation.php" class="header_menu">Carnet d'utilisation</a>

                <a href="../php/page_php_user/suivi_des_taches.php" class ="header_menu">Suivi des tâches</a>

                <a href="../php/page_php_user/fiche_historique.php" class ="header_menu">Fiche Historique</a>

                <a href="../php/page_php_user/tableau_des_consignes.php" class ="header_navbar-menu-link">Tableau des consignes</a>

                <a href="../php/page_php_user/compte_rendu_intervention.php" class ="header_menu">Compte rendu</a>

                <a href="../php/page_php_user/stock/stock_piece.php" class ="header_menu">Stock pièce</a>

                <a href="../php/page_php_user/operation_maintenance.php" class ="header_menu">Operation Maintenance</a>

                <a href="../php/page_compte/deconnexion.php" class="header_menu" onclick="alert('Vous allez être deconnectée')" <button>Se déconnecter</button> </a>
</div>

<! fin du header -->


<! debut du body -->
<body>
    <div class="bodycentre">
        <br><br><br><br><center> <p>Bienvenue sur le site de la maintenance, clique sur l'un des boutons au-dessous pour accéder au contenu<p></center>
    </div>
</body>
<! fin du body -->


<! début du footer -->

<! fin du footer -->

</body>
</html>