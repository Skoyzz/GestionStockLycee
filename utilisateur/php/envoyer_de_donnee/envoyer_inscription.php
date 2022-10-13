<?php
include '../page_compte/dbconnexion.php';

session_start();
$req = $conn->prepare ("INSERT INTO compte_user(nomIdentifiant, 
                      nomUtilisateur, prenomUtilisateur, passwordUtilisateur) 
                VALUES(?, ?, ?, ?)");

$req->execute(array($_POST['identifiant'],$_POST['nom'],$_POST['prenom'],
    password_hash($_POST['mdp'], PASSWORD_DEFAULT)));

$_SESSION['connecte'] = "oui";
header("location: ../accueil_bienvenue/bienvenue.php");
?>