<?php
session_start();
if($_SESSION['connecte'] !="oui")
{
    header("localistion : ../page_compte/inscription.php");
}
else
{
}
?>

<?php
include '../page_compte/dbconnexion.php';

$req = $conn->prepare ("INSERT INTO suivi_des_taches(
                      nomUtilisateur, prenomUtilisateur, numeroMachine, panneUtilisateur, reparationUtilisateur, 
                           commentaireUtilisateur) 
                VALUES(?, ?, ?, ?, ?, ?)");

$req->execute(array($_POST['nom'],$_POST['prenom'],$_POST['numero'],$_POST['panne'],$_POST['reparation'],$_POST['commentaire']));
header("location: ../page_php_user/suivi_des_taches.php");
?>