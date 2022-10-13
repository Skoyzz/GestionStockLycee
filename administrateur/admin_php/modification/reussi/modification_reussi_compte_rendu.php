<?php
include "../../../../utilisateur/php/page_compte/dbconnexion.php" ;


$nomemetteur = $_POST['nomdelemetteur'];
$nomintervenant1 = $_POST['nomdelintervenant1'];

$nomintervenant2 = $_POST['nomdelintervenant2'];
$nommaintenance = $_POST['nomdelamaintenance'];

$datee = $_POST['dateMachine'];
$systeme = $_POST['systemeMachine'];

$ensemblefonction = $_POST['sousensemblefonctionnell'];
$composant = $_POST['composantMachine'];

$commentairetMachine = $_POST['commentairetravailMachine'];
$commentairedMachine = $_POST['commentairediffrenMachine'];

$designation1 = $_POST['designation1Machine'];
$reference1 = $_POST['reference1Machine'];
$quantite1 = $_POST['quantite1Machine'];

$designation2 = $_POST['designation2Machine'];
$reference2 = $_POST['reference2Machine'];

$quantite2 = $_POST['quantite2Machine'];
$designation3 = $_POST['designation3Machine'];

$reference3 = $_POST['reference3Machine'];
$quantite3 = $_POST['quantite3Machine'];

$designation4 = $_POST['designation4Machine'];
$reference4 = $_POST['reference4Machine'];

$quantite4 = $_POST['quantite4Machine'];
$designation5 = $_POST['designation5Machine'];

$reference5 = $_POST['reference5Machine'];
$quantite5 = $_POST['quantite5Machine'];

$symptomedefaillance = $_POST['symptomedefaillanceMaintenance'];



$id = $_POST['id'];
if(isset($_POST["nomdelemetteur"]) && isset($_POST["nomdelintervenant1"]) && isset($_POST["nomdelintervenant2"])
    && isset($_POST["nomdelamaintenance"]) && isset($_POST["dateMachine"])&& isset($_POST["systemeMachine"])
    && isset($_POST["sousensemblefonctionnell"]) && isset($_POST["composantMachine"]) && isset($_POST["commentairetravailMachine"])
    && isset($_POST["commentairediffrenMachine"]) && isset($_POST["designation1Machine"]) && isset($_POST["designation1Machine"])
    && isset($_POST["reference1Machine"]) && isset($_POST["quantite1Machine"]) && isset($_POST["designation2Machine"])
    && isset($_POST["reference2Machine"]) && isset($_POST["quantite2Machine"]) && isset($_POST["designation3Machine"])
    && isset($_POST["reference3Machine"]) && isset($_POST["quantite3Machine"]) && isset($_POST["designation4Machine"])
    && isset($_POST["reference4Machine"]) && isset($_POST["quantite4Machine"]) && isset($_POST["designation5Machine"])
    && isset($_POST["reference5Machine"]) && isset($_POST["quantite5Machine"]) && isset($_POST["symptomedefaillanceMaintenance"]))

    $sql = $conn->prepare("UPDATE compte_rendu_intervention SET
                     nomdelemetteur = '$nomemetteur' , 
                     nomdelintervenant1 = '$nomintervenant1', 
                     nomdelintervenant2 = '$nomintervenant2',
                     nomdelamaintenance = '$nommaintenance',
                     dateMachine = '$datee',
                    systemeMachine = '$systeme',
                    sousensemblefonctionnell = '$ensemblefonction',
                    composantMachine = '$composant',
                    commentairetravailmachine = '$commentairetMachine',
                    commentairediffrenmachine = '$commentairedMachine',
                   designation1Machine = '$designation1',
                    reference1Machine = '$reference1',
                    quantite1Machine = '$quantite1',
                    designation2Machine = '$designation2',
                    reference2Machine = '$reference2',
                    quantite2Machine = '$quantite2',
                    designation3Machine = '$designation3',
                    reference3Machine = '$reference3',
                    quantite3Machine = '$quantite3',
                    designation4Machine = '$quantite4',
                    desgination5Machine = '$designation5',
                    reference5Machine = '$reference5',
                    quantite5Machine = '$quantite5',
                    symptomedefaillanceMaintenance = '$symptomedefaillance'
                                 
                 WHERE id = '$id'  ");

$sql->execute();


?>



