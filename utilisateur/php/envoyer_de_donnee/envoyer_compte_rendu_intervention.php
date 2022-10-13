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
include '../page_compte/dbconnexion.php';

if(isset($_POST['valider'])) {
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
                                   quantite5Machine,  symptomedefaillanceMaintenance) 
                VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,  ?)");


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
        /*(implode(",", $ch)),
        (implode(",", $sh)),
        (implode(",", $hh)),*/
        $_POST['symptomedefaillance']));
}
header("location: ../page_php_user/compte_rendu_intervention.php");


?>

