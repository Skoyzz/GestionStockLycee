<?php
include "../../page_compte/dbconnexion.php" ;

$Arepere=$_POST['repere'];
$Aquantite=$_POST['quantite'];
$Adesignation=$_POST['designation'];
$Areffabricant=$_POST['reffabricant'];
$Afabricant=$_POST['fabricant'];
$Afournisseur=$_POST['fournisseur'];


$id = $_POST['id'];
if(isset($_POST["repere"]) && isset($_POST["quantite"]) && isset($_POST["designation"]) && isset($_POST["reffabricant"]) && isset($_POST["fabricant"]) &&  isset($_POST["fournisseur"])) {
    $sql = $conn->prepare("UPDATE stock SET 
    
    repere = '$Arepere',
    quantite = '$Aquantite',
    designation = '$Adesignation',
    reffabricant = '$Areffabricant',
    fabricant = '$Afabricant',
    fournisseur = '$Afournisseur' 
             
                 WHERE id = '$id'  ");
    $sql->execute();
}


header("location: stock_piece.php");

?>
