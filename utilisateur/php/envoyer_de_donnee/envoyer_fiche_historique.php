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

$req = $conn->prepare ("INSERT INTO fiche_historique(
                        date1, type1, duree1, nom1, resume1, numachine1, numserie1 
                           ) 
                VALUES(?, ?, ?, ?, ?, ?, ?)");

$req->execute(array($_POST['date1'],$_POST['type1'],$_POST['duree1'],$_POST['nom1'],$_POST['resume1'],$_POST['numachine1'],$_POST['numserie1']));
header("location: ../page_php_user/fiche_historique.php");
?>