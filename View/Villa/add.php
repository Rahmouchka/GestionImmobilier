<?php
ob_start();
?>

<form action="../../Controller/Villa/add.php" method="post" class="form-control" name="FormAjout">
    <label for="">Référence:</label>
    <input type="text" name="ref" class="form-control"><br>
    <label for="">Propriétaire:</label>
    <input type="text" name="prop" class="form-control"><br>
    <label for="">Localité:</label>
    <input type="text" name="loc" class="form-control"><br>
    <label for="">Surface:</label>
    <input type="text" name="surface" class="form-control"><br>
    <label for="">Domaine d'usage:</label>
    <select name="du" class="form-control">
        <option>Bureau</option>
        <option>Domicile</option>
    </select><br>
    <label for="">Nombre de pièces:</label>
    <input type="text" name="nbPieces" class="form-control"><br>
    <label for="">Nb d'étages</label>
    <input type="text" name="nbEtages" class="form-control"><br>
    <input type="submit" name="ok" value="Ajouter" class="btn btn-primary btn-lgs">
</form>

<?php
$contenu = ob_get_clean();
$titre = "Ajout d'une villa";
include "layout.php";
