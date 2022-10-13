<?php
include "../../../utilisateur/php/page_compte/dbconnexion.php";
$sql = "DELETE FROM operation_maintenance WHERE id=?";
$sth = $conn->prepare($sql);
$sth->execute(array($_GET['id']));
header("location: ../lien_admin/recuperation_operation_maintenance.php");
?>
