<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification Carnet </title>
</head>


<! début du header -->
<div class="header_navbar-logo">
    <a href="../../../admin_php/accueil_bienvenue-admin/bienvenue_admin.php"> <img class="header_navbar-logo" src="../../../image/logo-stjo.png"></a></div>
<div class="header_menu">
    <a href="../../lien_admin/recuperation_carnet.php" class="header_menu">Carnet d'utilisation</a>

    <a href="../../lien_admin/recuperation_suivi.php" class ="header_menu">Suivi des tâches</a>

    <a href="../../lien_admin/recuperation_fiche_historique.php" class ="header_menu">Fiche Historique</a>

    <a href="../../lien_admin/recuperation_tableau_consignes.php" class ="header_menu">Tableau des consignes</a>

    <a href="../../lien_admin/recuperation_compte_rendu.php" class ="header_menu">Compte rendu</a>

    <a href="../../lien_admin/recuperation_stock_piece.php" class ="header_menu">Stock pièce</a>

    <a href="../../lien_admin/recuperation_operation_maintenance.php" class ="header_menu">Operation Maintenance</a>

    <a href="../../lien_admin/recuperation_utilisateur.php" class="header_menu">Membre du site</a>

    <a href="../../../../utilisateur/php/page_compte/deconnexion.php" class="header_menu" onclick="alert('Vous allez être deconnectée')" <button>Se déconnecter</button> </a>
    <br><br>

</div>
<! fin du header -->



<! debut du body -->
<body>
<div class="bodycentre">
    <?php
    include("../../../../utilisateur/php/page_compte/dbconnexion.php");
    $reponse = $conn->query('SELECT * FROM operation_maintenance WHERE id='.$_GET['id']);
    $donnees = $reponse->fetch();

    echo '<form action="../reussi/modification_reussi_operation_maintenance.php" method="post">
        <input type="date" name="nomUtilisateur" placeholder="Nouveau nom utilisateur" value="' . $donnees['nomUtilisateur'] . '"/>
        <input type="text" name="prenomUtilisateur" placeholder="Nouveau prénom utilisateur" value="' . $donnees['prenomUtilisateur'] . '"/>
        <input type="text" name="codeoperationMachine" placeholder="Nouveau code d\'opération machine" value="' . $donnees['codeoperationMachine'] . '"/>
        <input type="text" name="descriptionoperationMachine" placeholder="Nouveau descriptif machine" value="' . $donnees['descriptionoperationMachine'] . '"/>
        <input type="text" name="commentaireUtilisateur" placeholder="Nouveau descriptif machine" value="' . $donnees['commentaireUtilisateur'] . '"/>

        <input type="hidden" name="id" value="' . $donnees['id'] . '"/>
        <input type="submit" value="Modifier l\opération"/>';

    ?>
</div>
<! fin du body -->

<! début du footer -->

<! fin du footer -->

</body>
</html>
