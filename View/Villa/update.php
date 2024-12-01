<?php
ob_start();
?>

<form action="../../Controller/Appartement/update.php" method="post" class="form-control" name="FormModif">
    <label for="">Référence:</label>
    <input type="text" name="ref" class="form-control" value="<?= $app[0] ?>"><br>
    <label for="">Propriétaire:</label>
    <input type="text" name="prop" class="form-control" value="<?= $app[1] ?>"><br>
    <label for="">Localité:</label>
    <input type="text" name="loc" class="form-control" value="<?= $app[2] ?>"><br>
    <label for="">Surface:</label>
    <input type="text" name="surface" class="form-control" value="<?= $app[3] ?>"><br>
    <label for="">Domaine d'usage:</label>
    <select name="du" class="form-control" value="<?= $app[4] ?>">
        <option>Bureau</option>
        <option>Domicile</option>
    </select><br>
    <label for="">Nombre de pièces:</label>
    <input type="text" name="nbPieces" class="form-control" value="<?= $app[5] ?>"><br>
    <label for="">Nb étages</label>
    <input type="text" name="nbEtages" class="form-control" value="<?= $app[7] ?>"><br>
    <input type="submit" name="ok2" value="Modifier" class="btn btn-primary btn-lgs">
</form>

<?php
$contenu = ob_get_clean();
$titre = "Modification des données d'un appartement";
include "layout.php";
