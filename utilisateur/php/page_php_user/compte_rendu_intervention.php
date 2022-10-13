<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compte rendu intervention</title>
</head>


    <?php
    session_start();
    if($_SESSION['connecte'] !="oui")
    {
        header("localistion : ../page_compte/inscription.php");
    }
    else
    {
    }
    ?>

    <?php
    if(isset($_POST['valider'])){
        @$ch = $_POST["ch"];
        @$sh = $_POST["sh"];
        @$hh = $_POST["hh"];
        $req = $conn->prepare ("INSERT INTO compte_rendu_intervention(
                                     nomdelemetteur, nomdelintervenant1, nomdelintervenant2,
                                    nomdelamaintenance, dateMachine, systemeMachine,
                                    sousensemblefonctionnell, composantMachine, commentairetravailMachine,
                                    commentairediffrenMachine, designation1Machine, reference1Machine,
                                    quantite1Machine, designation2Machine, reference2Machine,
                                   quantite2Machine,  designation3Machine, reference3Machine,
                                   quantite3Machine, designation4Machine, reference4Machine, quantite4Machine,
                                    designation5Machine,  reference5Machine,
                                   quantite5Machine, Operation, TypeDeMaintenance, CauseDeDefaillance,symptomedefaillanceMaintenance) 
                VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, /* ?, ?, ? */, ?)");
        $req->execute(array(
            $_POST['nomemetteur'],
            $_POST['nomintervenant1'],
            $_POST['nomintervenant2'],
            $_POST['nommaintenance'],
            $_POST['datee'],
            $_POST['systeme'],
            $_POST['sousensemblefonctionnel'],
            $_POST['composant'],
            $_POST['commentairetravail'],
            $_POST['commentairediffren'],
            $_POST['designation1'],
            $_POST['reference1'],
            $_POST['quantite1'],
            $_POST['designation2'],
            $_POST['reference2'],
            $_POST['quantite2'],
            $_POST['designation3'],
            $_POST['reference3'],
            $_POST['quantite3'],
            $_POST['designation4'],
            $_POST['reference4'],
            $_POST['quantite4'],
            $_POST['designation5'],
            $_POST['reference5'],
            $_POST['quantite5'],
           /* (implode(",",$ch)),
            (implode(",",$sh)),
            (implode(",",$hh)),*/
            $_POST['symptomedefaillance']));
    }

    ?>
    <! début du header -->
    <div class="header_navbar-logo">
    <a href = "../bienvenue.php"><img class="header_navbar-logo" src="../../image/logo-stjo.png">

                </div>
                <div class="header_menu">
                    <a href="../page_php_user/carnet_utilisation.php" class="header_menu">Carnet d'utilisation</a>

                    <a href="suivi_des_taches.php" class ="header_menu">Suivi des tâches</a>

                    <a href="../page_php_user/fiche_historique.php" class ="header_menu">Fiche Historique</a>

                    <a href="../page_php_user/tableau_des_consignes.php" class ="header_menu">Tableau des consignes</a>

                    <a href="../page_php_user/compte_rendu_intervention.php" class ="header_menu">Compte rendu</a>

                    <a href="../page_php_user/stock/stock_piece.php" class ="header_menu">Stock pièce</a>

                    <a href="../page_php_user/operation_maintenance.php" class ="header_menu">Operation Maintenance</a>

                    <a href="../page_compte/deconnexion.php" class="header_menu" onclick="alert('Vous allez être deconnectée')" <button>Se déconnecter</button> </a>
                </div>

    <! fin du header -->


    <! debut du body -->
    <form method="post" action="../envoyer_de_donnee/envoyer_compte_rendu_intervention.php" enctype="multipart/form-data">

        <div class="tableau">
            <center><br><table border="1">
                    <thead>
                    <td>Compte-rendu d'intervention</td>
                    <tr>
                        <th>Demandeur<br>
                            Service Production</th>
                        <th>Emetteur<br>
                            <input type="text" id="nomemetteur"  name="nomemetteur" placeholder="Nom de l'émetteur" required> <br>
                            Secteur : Maintenance</th>
                        <td></td>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Intervenant(s)<br>
                            <input type="text" id="nomintervenant1"  name="nomintervenant1" placeholder="Nom n°1" required>           <br>
                            <input type="text" id="nomintervenant2" name="nomintervenant2" placeholder="Nom n°2" required>             <br>
                            Secteur : Maintenance</th>
                        <th> <input type="text" id="nommaintenance"  name="nommaintenance" placeholder="Temps intervention" required>  <br></th>
                        <th>Date : <input type="date" id="meeting-time" id="datee" name="datee" value=" "
                                          min="2022-01-01" max="2050-12-25" required><br></th>
                    </tr>
                    <td>Localisation de l'intervention
                    </td>
                    <tr>
                        <th>Système<br>
                            <input type="text" id="systeme"  name="systeme" placeholder="Système" required>  <br></th>
                        </th>
                        <th>Sous-Ensemble fonctionnel
                            <input type="text" id="sousensemblefonctionnel"  name="sousensemblefonctionnel" placeholder="Sous ensemble fonctionnel" required>  <br></th>

                        </th>
                        <th>Composant(s)
                            <input type="text" id="composant" name="composant" placeholder="Composant" required>  <br></th>

                        </th>
                    </tr>
                    <td></td>
                    <th>Travail effectué<br>
                        <textarea cols="41.50" id="commentairetravail" rows="5.50" name="commentairetravail" placeholder="Descriptif de la tâche"></textarea>
                    </th>
                    <td></td>
                    </tr>
                    <td></td>

                    <th>
                        Difficultés rencontrées<br>
                        <textarea cols="41.50" id="commentairediffren" rows="5.50" name="commentairediffren" placeholder="Décrivez les difficultés rencontrées"></textarea>
                    </th>
                    <td></td>
                    <tr>
                        <td></td>
                        <th>Pièces de rechange et consommables
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Désignation
                        </th>
                        <th>
                            Référence
                        </th>
                        <th>Quantité</th>
                    </tr>
                    <tr>
                        <th>&nbsp;<input type="text" id="designation1"  name="designation1" placeholder="Désignation n°1" required>   </th>
                        <th>&nbsp;<input type="text" id="reference1" name="reference1" placeholder="Référence n°1" required>   </th>
                        <th>&nbsp;<input type="text" id="quantite1"  name="quantite1" placeholder="Quantité n°1" required>   </th>

                    </tr>
                    <tr>
                        <th>&nbsp;<input type="text" id="designation2"  name="designation2" placeholder="Désignation n°2" required>   </th>
                        <th>&nbsp;<input type="text" id="reference2"  name="reference2" placeholder="Référence n°2" required>   </th>
                        <th>&nbsp;<input type="text" id="quantite2"  name="quantite2" placeholder="Quantité n°2" required>   </th>

                    </tr>
                    <tr>
                        <th>&nbsp;<input type="text" id="designation3"  name="designation3" placeholder="Désignation n°3" required>   </th>
                        <th>&nbsp;<input type="text" id="reference3"  name="reference3" placeholder="Référence n°3" required>   </th>
                        <th>&nbsp;<input type="text" id="quantite3"  name="quantite3" placeholder="Quantité n°3" required>   </th>

                    </tr>
                    <tr>
                        <th>&nbsp;<input type="text" id="designation4"  name="designation4" placeholder="Désignation n°4" required>   </th>
                        <th>&nbsp;<input type="text" id="reference4"  name="reference4" placeholder="Référence n°4" required>   </th>
                        <th>&nbsp;<input type="text" id="quantite4"  name="quantite4" placeholder="Quantité n°4" required>   </th>

                    </tr>
                    <tr>
                        <th>&nbsp;<input type="text" id="designation5"  name="designation5" placeholder="Désignation n°5" required>   </th>
                        <th>   <input type="text" id="reference5"  name="reference5" placeholder="Référence n°5" required>   </th>
                        <th>&nbsp;<input type="text" id="quantite5"  name="quantite5" placeholder="Quantité n°5" required>   </th>

                    </tr>
                    <th>
                        Operation
                    </th>
                    <th>
                        Type de maintenance
                    </th>
                    <th>Cause de défaillance</th>

                    </tr>
                    <tr>
                        <th>Remplacement<input type="checkbox" name="ch[]" value="Remplacement"></th>
                        <th>Corrective<input type="checkbox" name="sh[]" value="Corrective"></th>
                        <th>Usure normale<input type="checkbox" name="hh[]" value="Usure Normale"></th>

                    </tr>
                    <tr>
                        <th>Réglage<input type="checkbox" name="ch[]" value="Reglage"></th>
                        <th>Préventive systématique<input type="checkbox" name="sh[]" value="PreventiveSystematique"></th>
                        <th>Défaut utilisateur<input type="checkbox" name="hh[]" value="DefautUser"></th>

                    </tr>
                    <tr>
                        <th>Nettoyage<input type="checkbox" name="ch[]" value="Nettoyage"></th>
                        <th>Préventive conditionnelle<input type="checkbox" name="sh[]" value="PreventiveConditionnelle"></th>
                        <th>Préventive Défaut maintenance<input type="checkbox" name="hh[]" value="PreventDefautMaintenance"></th>

                    </tr>
                    <tr>
                        <th>Diagnostic<input type="checkbox" name="ch[]" value="Diag"</th>
                        <th>Préventive prévisionnelle<input type="checkbox" name="sh[]" value="PreventPrevisio"</th>
                        <th>Préventive conception<input type="checkbox" name="hh[]" value="PreventConcept"</th>

                    </tr>
                    <tr>
                        <th>Amélioration<input type="checkbox" name="ch[]" value="Amelioration"></th>
                        <th></th>
                        <th>Défaut environnement<input type="checkbox" name="hh[]" value="DefautEnvironnement"></th>

                    </tr>
                    <tr>
                        <th>Contrôle<input type="checkbox" name="ch[]" value="Controle"</th>
                        <th></th>
                        <th> Défaut produit<input type="checkbox" name="hh[]" value="DefautProduit"</th>

                    </tr>


                    <td>
                    <th>Symptôme lié à la défaillance<br>
                        <textarea cols="41.50" id="symptomedefaillance" rows="5.50" name="symptomedefaillance" placeholder="Descriptif du Symptôme défaillance"></textarea>
                    </th>
                    </td>
                    <td></td>
                    </tfoot>
                </table>
            </center>
            <tbody>
            <tr>

            </tbody>
        </div>
        <center><input type="submit" name="valider" value="Envoyer"></center>

        <br> <br>

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
    </form>

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

                        echo "<tr+>"."<td>" .$ligne['symptomedefaillanceMaintenance']. "</td>" . "</tr>";
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

</head>
</html>

