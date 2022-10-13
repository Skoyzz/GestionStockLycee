<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock pièce</title>
</head>
<! début du header -->
<div class="header_navbar-logo">
<a href = "../../bienvenue.php"><img class="header_navbar-logo" src="../../../image/logo-stjo.png">

</div>
<div class="header_menu">
    <a href="../../page_php_user/carnet_utilisation.php" class="header_menu">Carnet d'utilisation</a>

    <a href="../../page_php_user/suivi_des_taches.php" class ="header_menu">Suivi des tâches</a>

    <a href="../../page_php_user/fiche_historique.php" class ="header_menu">Fiche Historique</a>

    <a href="../../page_php_user/tableau_des_consignes.php" class ="header_navbar-menu-link">Tableau des consignes</a>

    <a href="../../page_php_user/compte_rendu_intervention.php" class ="header_menu">Compte rendu</a>

    <a href="../../page_php_user/stock/stock_piece.php" class ="header_menu">Stock pièce</a>

    <a href="../../page_php_user/operation_maintenance.php"   class ="header_menu">Operation Maintenance</a>

    <a href="../../page_compte/deconnexion.php" class="header_menu" onclick="alert('Vous allez être deconnectée')" <button>Se déconnecter</button> </a>
</div>

<! fin du header -->


<?php
require_once '../../page_compte/dbconnexion.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Gestion des Stocks</title>
    <meta charset="utf8">
</head>

<body>
<h3 align="center">Gestion de stock</h3>
<div align="center" >
    <form action="

    <?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST"  >
        <table align="">

            <tr><td></td><td><strong >Repere</strong></td></tr>
            <tr><td></td><td><input type="text" name="repere" class="champ" size="25"  required></td></tr>

            <tr><td></td><td><strong>Quantité</strong></td></tr>
            <tr><td></td><td><input type="number" name="quantite" class="champ" size="25" required></td></tr>

            <tr><td></td><td><strong>Designation</strong></td></tr>
            <tr><td></td><td><input type="text" name="designation" class="champ" size="25" required></td></tr>

            <tr><td></td><td><strong>Ref.Fabricant</strong></td></tr>
            <tr><td></td><td><input type="text" name="reffabricant" class="champ" size="25" required></td></tr>

            <tr><td></td><td><strong>Fabricant</strong></td></tr>
            <tr><td></td><td><input type="text" name="fabricant" class="champ" size="25" required></td></tr>

            <tr><td></td><td><strong>Fournisseur</strong></td></tr>
            <tr><td></td><td><input type="text" name="fournisseur" class="champ" size="25" required></td></tr>

        </table>

        <input type="submit" name="bajout" value="Ajouter">
    </form>
    <p><br></p>



    <?php
    $user = "root";
    $pass = "";
    $namedb = 'mysql:dbname=site_filiere_stjo;host=localhost;charset=utf8';


    $mess="";
    $Arepere=@$_POST['repere'];
    $Aquantite=@$_POST['quantite'];
    $Adesignation=@$_POST['designation'];
    $Areffabricant=@$_POST['reffabricant'];
    $Afabricant=@$_POST['fabricant'];
    $Afournisseur=@$_POST['fournisseur'];


    if(isset($_POST['bajout'])){
        $exe1 = "INSERT into stock(repere, quantite, designation, reffabricant, fabricant, fournisseur) VALUES (?, ?, ?, ?, ?, ?)";
        $request = $conn->prepare($exe1);
        $request->execute(array($Arepere, $Aquantite, $Adesignation, $Areffabricant, $Afabricant, $Afournisseur));
        if($exe1){
            $mess="Ajout réussie !!";
        }
        else
            $mess="Echec ajout !!";
    }
    ?>

    <?php
    $user = "root";
    $pass = "";
    $namedb = 'mysql:dbname=site_filiere_stjo;host=localhost;charset=utf8';

    $bdd = new PDO($namedb, $user, $pass);

    $requete1 = 'SELECT * FROM stock';

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
                <td>Repere</td>
                <td>Quantite</td>
                <td>Designation</td>
                <td>Ref. Fabricant</td>
                <td>Fabricant</td>
                <td>Fournisseur</td>
                <td>Modifier</td>
            </tr>

            <?php
            while($ligne = $resultat->fetch()) {
                "<tr>";
                echo "<td>".$ligne['repere']."</td>";
                echo "<td>".$ligne['quantite']."</td>";
                echo "<td>".$ligne['designation']."</td>";
                echo "<td>".$ligne['reffabricant']."</td>";
                echo "<td>".$ligne['fabricant']."</td>";
                echo "<td>".$ligne['fournisseur']."</td>";

                echo "<td>".   "<a href='stock_piece_modifier.php?id=".$ligne['id']."'<button>Modifier le stock</button></a>" . "<br>" . "</td>" . "</tr>";
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
</div>
</body>
</html>