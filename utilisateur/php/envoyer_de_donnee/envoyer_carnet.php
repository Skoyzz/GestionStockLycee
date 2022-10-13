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

$req = $conn->prepare ("INSERT INTO carnet_utilisation(
                      nomUtilisateur, prenomUtilisateur, numeroMachine,dateUtilisation, commentaireUtilisateur) 
                VALUES(?, ?, ?, ?, ?)");

$req->execute(array($_POST['nom'],$_POST['prenom'],$_POST['numero'],$_POST['date'],$_POST['commentaire']));
header("location: ../page_php_user/carnet_utilisation.php");
?>