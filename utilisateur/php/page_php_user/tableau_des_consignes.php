<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau des consignes    </title>
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

    <a href="../page_php_user/operation_maintenance.php"   class ="header_menu">Operation Maintenance</a>

    <a href="../page_compte/deconnexion.php" class="header_menu" onclick="alert('Vous allez être deconnectée')" <button>Se déconnecter</button> </a>
    <br><br>
</div>
<! fin du header -->


<body>
<center>
    <form method="post" action="../envoyer_de_donnee/envoyer_tableau_consignes.php" enctype="multipart/form-data">


    <table border="5" colspan="3">
    <thead>
    <tr>
        <th id="haut_tableau" colspan="2">Tableau des consignes</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Date</td>
        <td>Heure</td>
        <td>Nom</td>
        <td>Consignes Générales</td>
        <td>Consignes Particulières</td>
        <td>Nom de la machine</td>
    <tr>
        <td>&nbsp; <input type="date" id="Saisie_Date" name="datee" </td>
        <td>&nbsp; <input type="time" id="Saisie_Heure" name="heure"</td>
        <td>&nbsp; <input type="text" id="Saisie_Nom" name="nom"</td>
        <td>&nbsp; <input type="text" id="Saisie_ConsignesGen" name="consignesgen"</td>
        <td>&nbsp; <input type="text" id="Saisie_ConsignParticu" name="consigneparticulier"</td>
        <td>&nbsp; <input type="text" id="Saisie_NomMachine" name="nommachine"</td>
    </tr>

    </tbody>
    </table>
<input type="submit" name="valider" value="Envoyer">
        <br><br>
</center>
<?php
$user = "root";
$pass = "";
$namedb = 'mysql:dbname=site_filiere_stjo;host=localhost;charset=utf8';

$bdd = new PDO($namedb, $user, $pass);

$requete1 = 'SELECT * FROM tableau_consignes';

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
            <td>Heure</td>
            <td>Nom</td>
            <td>Consignes générale</td>
            <td>Consignes particulier</td>
            <td>Nom de machine</td>
<tr>
            <?php
            while($ligne = $resultat->fetch()) {
                "<tr>";
                echo "<td>".$ligne['datee']."</td>";
                echo "<td>".$ligne['heure']."</td>";
                echo "<td>" .$ligne['nom']."</td>";
                echo "<td>".$ligne['consignesgen']."</td>";
                echo "<td>" .$ligne['consigneparticulier']."</td>";
                echo "<tr+>" . "<td>" .$ligne['nommachine']."</tr>" . "</td>";
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