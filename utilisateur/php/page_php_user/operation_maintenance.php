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
    <title>Stock Pièce</title>
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
</div>
<! fin du header -->

<! debut du body -->
<body>

    <div id="formContent">
        <h2 class="active">Operation maintenance</h2>

        <form method="post" action="../envoyer_de_donnee/envoyer_operation_maintenance.php" enctype="multipart/form-data">
            <input type="text" id="nom" name="nom" placeholder="Nom" required><br><br>
            <input type="text" id="prenom"  name="prenom" placeholder="Prénom" required><br><br>
            <input type="text" id="codeoperation" name="codeoperation" placeholder="Code pièce" required><br><br>
            <textarea cols="41.50" id="descriptionoperation" rows="5.50" name="descriptionoperation" placeholder="Description operation" required ></textarea><br><br>
            <textarea cols="41.50" id="commentaireee" rows="5.50" name="commentaireee" placeholder="Commantaire Faculatif"></textarea><br><br>

            <input type="submit" class="fadeIn second" value="Envoyer">
            <br><br>
        </form>
    </div>
</div>
<?php
$user = "root";
$pass = "";
$namedb = 'mysql:dbname=site_filiere_stjo;host=localhost;charset=utf8';

$bdd = new PDO($namedb, $user, $pass);

$requete1 = 'SELECT * FROM operation_maintenance';

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
            <td>Code opéation machine</td>
            <td>Description operation machines</td>
            <td> Commentaire </td>

        <tr>
            <?php
            while($ligne = $resultat->fetch()) {
                "<tr>";
                echo "<td>".$ligne['nomUtilisateur']."</td>";
                echo "<td>".$ligne['prenomUtilisateur']."</td>";
                echo "<td>" .$ligne['codeoperationMachine']."</td>";
                echo "<td>" .$ligne['descriptionoperationMachine']."</td>";
                echo "<tr+>" . "<td>" . $ligne['commentaireUtilisateur']."</tr>" ."</tr>";
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