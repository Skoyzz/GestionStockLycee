<?php
include "../../../utilisateur/php/page_compte/dbconnexion.php";
$sql = "DELETE FROM carnet_utilisation WHERE id=?";
$sth = $conn->prepare($sql);
$sth->execute(array($_GET['id']));
header("location: ../lien_admin/recuperation_carnet.php");
?>