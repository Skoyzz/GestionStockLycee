<?php
include "../../../../utilisateur/php/page_compte/dbconnexion.php" ;
$Utilisateur = $_POST['nomUtilisateur'];
$prenom = $_POST['prenomUtilisateur'];
$numero = $_POST['numeroMachine'];
$date = $_POST['dateUtilisation'];
$commentaire = $_POST['commentaireUtilisateur'];

$id = $_POST['id'];
if(isset($_POST["nomUtilisateur"]) && isset($_POST["prenomUtilisateur"]) && isset($_POST["numeroMachine"]) && isset($_POST["dateUtilisation"]) && isset($_POST["commentaireUtilisateur"])) {
            $sql = $conn->prepare("UPDATE carnet_utilisation SET 
                     nomUtilisateur = '$Utilisateur' , 
                     prenomUtilisateur = '$prenom', 
                     numeroMachine = '$numero', 
                     dateUtilisation = '$date', 
                     commentaireUtilisateur ='$commentaire'
                 WHERE id = '$id'  ");
    $sql->execute();
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification réussi carnet</title>

</head>

<! début du header -->

<div class="header">
    <a href="../../../admin_php/accueil_bienvenue-admin/bienvenue_admin.php"> <img class="header_navbar-logo" src="../../../image/logo-stjo.png"></a></div>
<div class="header_navbar-menu">
    <a href="../../lien_admin/recuperation_carnet.php" class="header_navbar-menu-link">Carnet d'utilisation</a>

    <a href="../../lien_admin/recuperation_suivi.php" class ="header_navbar-menu-link">Suivi des tâches</a>

    <a href="../../lien_admin/recuperation_fiche_historique.php" class ="header_navbar-menu-link">Fiche Historique</a>

    <a href="../../lien_admin/recuperation_tableau_consignes.php" class ="header_navbar-menu-link">Tableau des consignes</a>

    <a href="../../lien_admin/recuperation_compte_rendu.php" class ="header_navbar-menu-link">Compte rendu</a>

    <a href="../../lien_admin/recuperation_stock_piece.php" class="header_navbar_menu-link">Stock pièce</a>

    <a href="../../lien_admin/recuperation_operation_maintenance.php" class ="header_navbar-menu-link">Operation Maintenance</a>

    <a href="../../lien_admin/recuperation_utilisateur.php" class="header_navbar-menu-link">Membre du site</a>

    <a href="../../../../utilisateur/php/page_compte/deconnexion.php" class="header_navbar-menu-link" onclick="alert('Vous allez être deconnectée')" <button>Se déconnecter</button> </a>
</div>
<! fin du header -->




<! debut du body -->
<! debut du body -->
<body>
<div class="bodycentre">
    <div class="bodycentre">
        <?php

        header("location: ../../lien_admin/recuperation_carnet.php");
        ?>
    </div>
    <! fin du body -->
<! fin du body -->


<! début du footer -->

<! fin du footer -->

</body>
</html>
