<?php
require_once '../../../utilisateur/php/page_compte/dbconnexion.php';

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
    <title>Membres - Admin</title>

</head>

<! début du header -->
<div class="header_navbar-logo">
<a href="../bienvenue_admin.php"> <img class="header_navbar-logo" src="../../../utilisateur/image/logo-stjo.png"></a>
<div class="header_menu">
    <a href="../lien_admin/recuperation_carnet.php" class="header_menu">Carnet d'utilisation</a>

    <a href="../lien_admin/recuperation_suivi.php" class ="header_menu">Suivi des tâches</a>

    <a href="../lien_admin/recuperation_fiche_historique.php" class ="header_menu">Fiche Historique</a>

    <a href="../lien_admin/recuperation_tableau_consignes.php" class ="header_menu">Tableau des consignes</a>

    <a href="../lien_admin/recuperation_compte_rendu.php" class ="header_menu">Compte rendu</a>

    <a href="../lien_admin/recuperation_stock_piece.php" class ="header_menu">Stock pièce</a>

    <a href="../lien_admin/recuperation_operation_maintenance.php" class ="header_menu">Operation Maintenance</a>

    <a href="../lien_admin/recuperation_utilisateur.php" class="header_menu">Membre du site</a>

    <a href="../../../utilisateur/php/page_compte/deconnexion.php" class="header_menu" onclick="alert('Vous allez être deconnectée')" <button>Se déconnecter</button> </a>
    <br><br>

</div>
<! fin du header -->
<?php
    $user = "root";
    $pass = "";
    $namedb = 'mysql:dbname=site_filiere_stjo;host=localhost;charset=utf8';

    $bdd = new PDO($namedb, $user, $pass);

    $requete1 = 'SELECT * FROM compte_user';

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
        <td>Identifiant</td>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Modifier</td>
        <td>Supprimer</td>
    <tr>
        <?php
        while($ligne = $resultat->fetch()) {
            echo "<td>".$ligne['nomIdentifiant']  ."</td>";
            echo "<td>".$ligne['nomUtilisateur']."</td>";
            echo "<td>".$ligne['prenomUtilisateur']."</td>";
            echo "<td>".   "<a href='../modification/en_cours/modification_utilisateur.php?id=".$ligne['id']."'<button>Modifier l'utilisateur</button></a>" . "<br>" ;
            echo "<tr+>"."<td>" .  "<a href='../supprimer/supprimer_utilisateur.php?id=".$ligne['id']."'<button>Supprimer l'utilisateur</button></a>" . "</td>" . "</tr>";
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