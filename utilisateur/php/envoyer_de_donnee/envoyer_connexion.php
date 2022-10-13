<?php
include '../page_compte/dbconnexion.php';

    $req = $conn->prepare ("SELECT * FROM compte_user WHERE nomIdentifiant = ?");

$req->execute(array($_POST['identifiant']));
$result = $req ->fetchAll();
$mdp=$result [0]["passwordUtilisateur"];
    if (password_verify($_POST['mdp'], $mdp)) {
    echo "Connexion réussie";
    session_start();
        $_SESSION['connecte'] = true;

    if ($result[0]['nomIdentifiant'] == 'AdministrateurROOT') {
        header("location: ../../../administrateur/admin_php/bienvenue_admin.php");
    } else {
        header("location: ../bienvenue.php");
    }
}
else
{
    header("location: ../page_compte/connexion.php");
}
?>