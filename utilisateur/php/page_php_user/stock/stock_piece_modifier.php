<! debut du body -->
<body>
<div class="bodycentre">
    <div class="bodycentre">
        <?php
        include("../../page_compte/dbconnexion.php");
        $reponse = $conn->query('SELECT * FROM stock WHERE id='.$_GET['id']);
        $donnees = $reponse->fetch();

        echo '<form action="stock_piece_modifier_reussi.php" method="post">
        
             <input type="text" name="repere" class="champ"  value="' . $donnees['repere'] . '"/>

            <input type="number" name="quantite" class="champ" value="' . $donnees['quantite'] . '"/>

           <input type="text" name="designation" class="champ" value="' . $donnees['designation'] . '"/>

           <input type="text" name="reffabricant" class="champ" value="' . $donnees['reffabricant'] . '"/>

           <input type="text" name="fabricant" class="champ" value="' . $donnees['fabricant'] . '"/>

          <input type="text" name="fournisseur" class="champ" value="' . $donnees['fournisseur'] . '"/>
        
                 <input type="hidden" name="id" value="' . $donnees['id'] . '"/>
        <input type="submit" value="Modifier le stock"/>';

        ?>
    </div>
    <! fin du body -->
