<?php
$dbname = "site_filiere_stjo";
$dbuser = "root";
$dbhost = "localhost";
$dbpassword = "";
try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",
                        $dbuser ,$dbpassword);
} catch(PDOException $e)
        {
    echo "Erreur de connexion : " .$e->getMessage();
    die();
        }
?>