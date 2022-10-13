<?php
session_start();
if($_SESSION['connecte'] !="oui")
{
    header("localistion : ../Connexion&Inscription/inscription.php");
}
else
{
}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche Historique</title>
</head>


<! début du header -->
<div class="header_navbar-logo">
    <a href = "../bienvenue.php"><img class="header_navbar-logo" src="../../image/logo-stjo.png">

</div>
<div class="header_menu">
    <a href="../page_php_user/carnet_utilisation.php" class="header_menu">Carnet d'utilisation</a>

    <a href="suivi_des_taches.php" class ="header_menu">Suivi des tâches</a>

    <a href="../page_php_user/fiche_historique.php" class ="header_menu">Fiche Historique</a>

    <a href="../page_php_user/tableau_des_consignes.php" class ="header_navbar-menu-link">Tableau des consignes</a>

    <a href="../page_php_user/compte_rendu_intervention.php" class ="header_menu">Compte rendu</a>

    <a href="../page_php_user/stock/stock_piece.php" class ="header_menu">Stock pièce</a>

    <a href="../page_php_user/operation_maintenance.php" class ="header_menu">Operation Maintenance</a>

    <a href="../page_compte/deconnexion.php" class="header_menu" onclick="alert('Vous allez être deconnectée')" <button>Se déconnecter</button> </a>
<br><br>

</div>
<! fin du header -->

<body>
<center>
    <form method="post" action="../envoyer_de_donnee/envoyer_fiche_historique.php" enctype="multipart/form-data">

    <table border="5" colspan="3">
        <tr>
            <td>
                <strong>Fiche Historique</strong>
                </td>
            </tr>
        <tr>
            <td>
                Date de l'intervention
            </td>
            <td>
                Type D'inter : <br>
                -Méca <b>(M)</b><br>
                -Elect <b>(E)</b><br>
                -Divers <b>(D)</b><br>
            </td>
            <td>
                Durée<br>
                <b>(Heures)</b>
            </td>
            <td>
                <b>NOMS </b>des intervenants
            </td>
            <td>
                <b>Résumé </b>succinct de la défaillance ou des travaux effectués
            </td>
            <td>
                Numéro Machine :<br>
            </td>
            <td>
                Numéro de série : <br>
            </td>
        </tr>
        <tr>
            <td><input type="date" name="date1"
            </td>
            <td>
                <input type="text" id="typeInter1" name="type1" placeholder="Type Inter"
            </td>
            <td>
                <input type="text" id="dureeInter1" name="duree1" placeholder="Durée"
            </td>
            <td>
                <input type="text" id="nomTech1" name="nom1" placeholder="Nom du Technicien"
            </td>
            <td>
                <input type="text" id="ResumeTache1" name="resume1" placeholder="Résumé panne ou tâche"
            </td>
            <td>
                <input type="text" id="NumMachine1" name="numachine1" placeholder="Numéro de la Machine"<br>
            </td>
            <td>
                <input type="text" id="NumSerie1" name="numserie1" placeholder="Numéro de Série">
            </td>
        </tr>
    </table>
    <input type="submit" name="valider" value="Envoyer"><br><br>

</center>
<?php
$user = "root";
$pass = "";
$namedb = 'mysql:dbname=site_filiere_stjo;host=localhost;charset=utf8';

$bdd = new PDO($namedb, $user, $pass);

$requete1 = 'SELECT * FROM fiche_historique';

$resultat = $bdd->prepare($requete1);
$resultat->execute();

$nbreResult = $resultat->rowCount();
$colcount = $resultat->columnCount();

if (!$resultat) {
    echo "Problème de requete";
}
else {
    ?>

    <table border="1">
        <tbody>
        <tr>
            <td>Date</td>
            <td>Type</td>
            <td>Durée</td>
            <td>Nom</td>
            <td>Résumé</td>
            <td>Numéro de machine</td>
            <td>Numéro de série</td>

<tr>
            <?php
            while($ligne = $resultat->fetch()) {
                "<tr>";
                echo "<td>" . $ligne['date1'] . "</td>";
                echo "<td>" . $ligne['type1'] . "</td>";
                echo "<td>" . $ligne['duree1'] . "</td>";
                echo "<td>" . $ligne['nom1'] . "</td>";
                echo "<td>" . $ligne['resume1'] . "</td>";
                echo "<td>" . $ligne['numachine1'] . "</td>";
                echo "<tr+>" . "<td>" . $ligne['numserie1'] . "</tr>" . "</td>";
            }
            ?>
        </tr>
        </tbody>
    </table>


    </ul>

    <?php
}
$resultat->closeCursor();
?>
</body>
</html>