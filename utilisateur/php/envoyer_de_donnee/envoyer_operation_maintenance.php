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

$req = $conn->prepare ("INSERT INTO operation_maintenance(
                      nomUtilisateur, prenomUtilisateur, codeoperationMachine, descriptionoperationMachine, commentaireUtilisateur) 
                VALUES(?, ?, ?, ?, ?)");

$req->execute(array($_POST['nom'],
    $_POST['prenom'],
    $_POST['codeoperation'],
    $_POST['descriptionoperation'],
    $_POST['commentaireee']));
header("location: ../page_php_user/operation_maintenance.php");

?>
