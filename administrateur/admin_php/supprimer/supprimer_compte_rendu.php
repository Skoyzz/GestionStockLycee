<?php
include "../../../utilisateur/php/page_compte/dbconnexion.php";
$sql = "DELETE FROM compte_rendu_intervention WHERE id=?";
$sth = $conn->prepare($sql);
$sth->execute(array($_GET['id']));
header("location: ../lien_admin/recuperation_compte_rendu.php");
?>