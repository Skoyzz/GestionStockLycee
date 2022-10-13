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

$req = $conn->prepare ("INSERT INTO tableau_consignes(
                        datee, heure, nom, consignesgen, consigneparticulier, nommachine
                           ) 
                VALUES(?, ?, ?, ?, ?, ?)");

$req->execute(array($_POST['datee'],$_POST['heure'],$_POST['nom'],$_POST['consignesgen'],$_POST['consigneparticulier'],$_POST['nommachine']));
header("location: ../page_php_user/tableau_des_consignes.php");

?>