<?php
require_once '../../../utilisateur/php/page_compte/dbconnexion.php';
session_start();
if($_SESSION['connecte'] !="oui")
{
    header("localistion : ../Accueil&Bienvenue/accueiladmin.php");
}
else
{
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compte rendu  - Admin</title>

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


<! debut du body -->
<?php
$user = "root";
$pass = "";
$namedb = 'mysql:dbname=site_filiere_stjo;host=localhost;charset=utf8';

$bdd = new PDO($namedb, $user, $pass);


$requete1 = 'SELECT * FROM compte_rendu_intervention';

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
            <td>Nom de l'émetteur</td>
            <td>Nom de l'intervenant 1</td>
            <td>Nom de l'intervenant 2</td>

            <td>Nom de la maintenance (émetteur)</td>
            <td>Date</td>

            <td>Système machine</td>
            <td>Sous-ensemble fonctionnel</td>
            <td>Composant de machine</td>
            <td>Commentaire travail de machine</td>
            <td>Commentaire different de machine</td>

            <td>Designation n°1 Machine</td>
            <td>Référence n°1 Machine</td>
            <td>Quantité n°1 Machine</td>

            <td>Designation n°2 Machine</td>
            <td>Référence n°2 Machine</td>
            <td>Quantité n°2 Machine</td>

            <td>Designation n°3 Machine</td>
            <td>Référence n°3 Machine</td>
            <td>Quantité n°3 Machine</td>

            <td>Designation n°4 Machine</td>
            <td>Référence n°4 Machine</td>
            <td>Quantité n°4 Machine</td>

            <td>Designation n°5 Machine</td>
            <td>Référence n°5 Machine</td>
            <td>Quantité n°5 Machine</td>

            <td>Symptôme défaillance de maintenance</td>
            <td>Modifier</td>
            <td>Supprimer</td>

        <tr>
            <?php
            while($ligne = $resultat->fetch()) {
                "<tr>";
                echo "<td>".$ligne['nomdelemetteur']."</td>";
                echo "<td>".$ligne['nomdelintervenant1']."</td>";
                echo "<td>" .$ligne['nomdelintervenant2']."</td>";
                echo "<td>".$ligne['nomdelamaintenance']."</td>";
                echo "<td>" .$ligne['dateMachine']."</td>";
                echo "<td>" .$ligne['systemeMachine']."</td>";
                echo "<td>" .$ligne['sousensemblefonctionnell']."</td>";
                echo "<td>" .$ligne['composantMachine']."</td>";
                echo "<td>" .$ligne['commentairetravailMachine']."</td>";
                echo "<td>" .$ligne['commentairediffrenMachine']."</td>";
                echo "<td>". $ligne['designation1Machine']."</td>";
                echo "<td>" .$ligne['reference1Machine']."</td>";
                echo "<td>" .$ligne['quantite1Machine']."</td>";
                echo "<td>" .$ligne['designation2Machine']."</td>";
                echo "<td>" .$ligne['reference2Machine']."</td>";
                echo "<td>" .$ligne['quantite2Machine']."</td>";
                echo "<td>" .$ligne['designation3Machine']."</td>";
                echo "<td>" .$ligne['reference3Machine']."</td>";
                echo "<td>" .$ligne['quantite3Machine']."</td>";
                echo "<td>" .$ligne['designation4Machine']."</td>";
                echo "<td>" .$ligne['reference4Machine']."</td>";
                echo "<td>" .$ligne['quantite4Machine']."</td>";
                echo "<td>" .$ligne['designation5Machine']."</td>";
                echo "<td>" .$ligne['reference5Machine']."</td>";
                echo "<td>" .$ligne['quantite5Machine']."</td>";
                echo "<td>" .$ligne['symptomedefaillanceMaintenance']."</td>";

                echo "<td>".   "<a href='../modification/en_cours/modification_compte_rendu.php?id=".$ligne['id']."'<button>Modifier le compte rendu</button></a>" . "<br>" ;
                echo "<tr+>"."<td>" .  "<a href='../supprimer/supprimer_compte_rendu.php?id=".$ligne['id']."'<button>Supprimer le compte rendu</button></a>" . "</td>" . "</tr>";

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