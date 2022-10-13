<?php
include "../../../../utilisateur/php/page_compte/dbconnexion.php" ;
$nom = $_POST['nomUtilisateur'];
$prenom = $_POST['prenomUtilisateur'];
$codeoperation = $_POST['codeoperationMachine'];
$descriptifmachine = $_POST['descriptionoperationMachine'];
$commentaire = $_POST['commentaireUtilisateur'];


$id = $_POST['id'];
if(isset($_POST["nomUtilisateur"]) && isset($_POST["prenomUtilisateur"]) && isset($_POST["codeoperationMachine"]) && isset($_POST["descriptionoperationMachine"]) && isset($_POST["commentaireUtilisateur"])) {
    $sql = $conn->prepare("UPDATE operation_maintenance   SET 
                     nomUtilisateur = '$nom' , 
                     prenomUtilisateur = '$prenom', 
                     codeoperationMachine = '$codeoperation', 
                     descriptionoperationMachine = '$descriptifmachine', 
                     commentaireUtilisateur ='$commentaire'
                 WHERE id = '$id'  ");

    $sql->execute();
}
header("location: ../../lien_admin/recuperation_operation_maintenance.php");

?>
