<?php
include "../../../../utilisateur/php/page_compte/dbconnexion.php" ;

$date = $_POST['datee'];
$time = $_POST['heure'];
$name = $_POST['nom'];
$newgen = $_POST['consignesgen'];
$newconsignes = $_POST['consigneparticulier'];
$nomm = $_POST['nommachine'];

$id = $_POST['id'];
if(isset($_POST["datee"]) && isset($_POST["heure"]) && isset($_POST["nom"]) && isset($_POST["consignesgen"])
    && isset($_POST["consigneparticulier"]) && isset($_POST["nommachine"])) {


    $sql = $conn->prepare("UPDATE tableau_consignes SET 
                     datee = '$date' , 
                     heure   = '$time', 
                     nom     = '$name', 
                     consignesgen    = '$newgen', 
                     consigneparticulier ='$newconsignes',
                     nommachine ='$nomm'                        

                 WHERE id = '$id'  ");
    $sql->execute();
}
header("location: ../../lien_admin/recuperation_tableau_consignes.php");

?>
