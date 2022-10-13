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
    <title>Suivi des tâches</title>
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

    <a href="../page_php_user/stock/stock_piece.php">Stock pièce</a>

    <a href="../page_php_user/operation_maintenance.php"   class ="header_menu">Operation Maintenance</a>

    <a href="../page_compte/deconnexion.php" class="header_menu" onclick="alert('Vous allez être deconnectée')" <button>Se déconnecter</button> </a>
</div>
<! fin du header -->

<! debut du body -->
<body>
    <div id="formContent">
        <h2 class="active">Suivi des tâches</h2>

        <form method="post" action="../envoyer_de_donnee/envoyer_suivi.php" enctype="multipart/form-data">

            <input type="text" id="nom"  name="nom" placeholder="Nom" required><br><br>
            <input type="text" id="prenom"  name="prenom" placeholder="Prénom" required><br><br>
            <input type="number" id="numero" name="numero" placeholder="Numéro de la machine" required><br><br>
            <input type="text" id="panne"  name="panne" placeholder="Panne" required><br><br>
            <input type="text" id="reparation"  name="reparation" placeholder="Si besoin de réparation"><br><br>
            <textarea cols="41.50" id="commentaire" rows="12.50" name="commentaire" placeholder="Commentaire" required></textarea><br><br>
            <input type="submit"  value="Envoyez votre formulaire"><br><br>
        </form>
    </div>
</div>

<?php
$user = "root";
$pass = "";
$namedb = 'mysql:dbname=site_filiere_stjo;host=localhost;charset=utf8';

$bdd = new PDO($namedb, $user, $pass);

$requete1 = 'SELECT * FROM suivi_des_taches';

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
            <td>Nom</td>
            <td>Prénom</td>
            <td>Numéro de machine</td>
            <td>Panne</td>
            <td>Réparation</td>
            <td>Commentaire</td>

        <tr>
            <?php
            while($ligne = $resultat->fetch()) {
                echo "<td>". $ligne['nomUtilisateur']. "</td>";
                echo "<td>". $ligne['prenomUtilisateur']. "</td>";
                echo "<td>". $ligne['numeroMachine']. "</td>";
                echo "<td>". $ligne['panneUtilisateur']. "</td>";
                echo "<td>". $ligne['reparationUtilisateur']. "</td>";
                echo "<tr+>". "<td>" . $ligne['commentaireUtilisateur'] . "</tr>" . "</td>";
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
<! fin du body -->



<! début du footer -->

<! fin du footer -->
</body>
</html>