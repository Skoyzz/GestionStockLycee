<?php
session_start();
if($_SESSION['connecte'] !="oui")
{
    header("localistion : ../Connexion&Inscription/inscription.php");
}
else
{
}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenue - Admin</title>

</head>

<! début du header -->
<div class="header_navbar-logo"">
    <a href="bienvenue_admin.php"> <img class="header_navbar-logo" src="../../utilisateur/image/logo-stjo.png"></a>
            </div>
            <div class="header_navbar-menu">
                <a href="../admin_php/lien_admin/recuperation_carnet.php" class="header_navbar-menu-link">Carnet d'utilisation</a>

                <a href="../admin_php/lien_admin/recuperation_suivi.php" class ="header_navbar-menu-link">Suivi des tâches</a>

                <a href="../admin_php/lien_admin/recuperation_fiche_historique.php" class ="header_navbar-menu-link">Fiche Historique</a>

                <a href="../admin_php/lien_admin/recuperation_tableau_consignes.php" class ="header_navbar-menu-link">Tableau des consignes</a>

                <a href="../admin_php/lien_admin/recuperation_compte_rendu.php" class ="header_navbar-menu-link">Compte rendu</a>

                <a href="../admin_php/lien_admin/recuperation_stock_piece.php" class ="header_navbar-menu-link">Stock pièce</a>

                <a href="../admin_php/lien_admin/recuperation_operation_maintenance.php" class ="header_navbar-menu-link">Operation Maintenance</a>

                <a href="../admin_php/lien_admin/recuperation_utilisateur.php" class="header_navbar-menu-link">Membre du site</a>

                <a href="../../utilisateur/php/page_compte/deconnexion.php" class="header_navbar-menu-link" onclick="alert('Vous allez être deconnectée')" <button>Se déconnecter</button> </a>
            </div>
    </div>
<! fin du header -->

<! debut du body -->
<body>
<div class="bodycentre">

    <br><br><br><br><center> <p>Bienvenue sur le site de la maintenance, côté administrateur<p></center>

</div>
</body>
<! fin du body -->



<! début du footer -->

<! fin du footer -->

</body>
</html>