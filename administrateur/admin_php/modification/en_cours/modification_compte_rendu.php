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
    $reponse = $conn->query('SELECT * FROM compte_rendu_intervention WHERE id='.$_GET['id']);
    $donnees = $reponse->fetch();

    echo '<form action="../reussi/modification_reussi_compte_rendu.php" method="post">
        
                     <input type="text"  name="nomdelemetteur" placeholder="Nom emetteur" value="' . $donnees['nomdelemetteur'] . '"/>
                     <input type="text"  name="nomdelintervenant1" placeholder="Nom intervenant1    " value="' . $donnees['nomdelintervenant1'] . '"/>
                     <input type="text"  name="nomdelintervenant2" placeholder="Nom intervenant2   " value="' . $donnees['nomdelintervenant2'] . '"/>
                     <input type="text"  name="nomdelamaintenance" placeholder="Nom de la maintenance   " value="' . $donnees['nomdelamaintenance'] . '"/>
                     <input type="date"  name="dateMachine" placeholder="    " value="' . $donnees['dateMachine'] . '"/>
                     <input type="text"  name="systemeMachine" placeholder="Systeme Machine   " value="' . $donnees['systemeMachine'] . '"/>
                     <input type="text"  name="sousensemblefonctionnell" placeholder="Sous ensemble fonctionnell   " value="' . $donnees['sousensemblefonctionnell'] . '"/>
                     <input type="text"  name="composantMachine" placeholder="Composant Machine    " value="' . $donnees['composantMachine'] . '"/>
                     <input type="text"  name="commentairetravailMachine" placeholder="Commentaire travail Machine"  " value="' . $donnees['commentairetravailMachine'] . '"/>
                     <input type="text"  name="commentairediffrenMachine" placeholder="Commentaire diffrentMachine"  " value="' . $donnees['commentairediffrenMachine'] . '"/>
                     <input type="text"  name="designation1Machine" placeholder="Désignation n°1" value="' . $donnees['designation1Machine'] . '"/>
                     <input type="text"  name="reference1Machine" placeholder="Référence n°1" value="' . $donnees['reference1Machine'] . '"/>
                     <input type="text" name="quantite1Machine" placeholder="Quantité n°1" value="' . $donnees['quantite1Machine'] . '"/>
                     <input type="text"  name="designation2Machine" placeholder="Désignation n°2"value="' . $donnees['designation2Machine'] . '"/>
                     <input type="text"  name="reference2Machine" placeholder="Référence n°2"value="' . $donnees['reference2Machine'] . '"/>
                     <input type="text"  name="quantite2Machine" placeholder="Quantité n°2" value="' . $donnees['quantite2Machine'] . '"/>
                     <input type="text"  name="designation3Machine" placeholder="Désignation n°3" value="' . $donnees['designation3Machine'] . '"/>
                     <input type="text" name="reference3Machine" placeholder="Référence n°3" value="' . $donnees['reference3Machine'] . '"/>
                     <input type="text"  name="quantite3Machine" placeholder="Quantité n°3" value="' . $donnees['quantite3Machine'] . '"/>
                     <input type="text"  name="designation4Machine" placeholder="Désignation n°4" value="' . $donnees['designation4Machine'] . '"/>
                     <input type="text"  name="reference4Machine" placeholder="Référence n°4" value="' . $donnees['reference4Machine'] . '"/>
                     <input type="text"  name="quantite4Machine" placeholder="Quantité n°4" value="' . $donnees['quantite4Machine'] . '"/>
                     <input type="text" name="designation5Machine" placeholder="Désignation n°5" value="' . $donnees['designation5Machine'] . '"/>
                     <input type="text" name="reference5Machine" placeholder="Référence n°5" value="' . $donnees['reference5Machine'] . '"/>
                     <input type="text" name="quantite5Machine" placeholder="Quantité n°5" value="' . $donnees['quantite5Machine'] . '"/>
                     <input type="text" name="symptomedefaillanceMaintenance" placeholder="Symptome defaillance machine" value="' . $donnees['symptomedefaillanceMaintenance'] . '"/>

                     <input type="hidden" name="id" value="' . $donnees['id'] . '"/>
                     <input type="submit" value="Modifier la fiche"/>';

    ?>
</div>
<! fin du body -->

<! début du footer -->

<! fin du footer -->

</body>
</html>
