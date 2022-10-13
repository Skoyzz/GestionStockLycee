<?php
include "../../../../utilisateur/php/page_compte/dbconnexion.php" ;
$date = $_POST['date1'];
$type = $_POST['type1'];
$duree = $_POST['duree1'];
$nom = $_POST['nom1'];
$resume = $_POST['resume1'];
$numachine = $_POST['numachine1'];
$numserie = $_POST['numserie1'];



$id = $_POST['id'];
if(isset($_POST["date1"]) && isset($_POST["type1"]) && isset($_POST["duree1"]) && isset($_POST["nom1"]) && isset($_POST["resume1"]) && isset($_POST["numachine1"]) && isset($_POST["numserie1"])) {
    $sql = $conn->prepare("UPDATE fiche_historique SET 
                     date1 = '$date' , 
                     type1 = '$type', 
                     duree1 = '$duree', 
                     nom1 = '$nom', 
                     resume1 ='$resume',
                     numachine1 ='$numachine',
                     numserie1 ='$numserie'
                 WHERE id = '$id'  ");

    $sql->execute();
}

header("location: ../../lien_admin/recuperation_fiche_historique.php");

?>
