<?php
if (isset($_GET['etat'])) {
    $etat = $_GET['etat'];
    echo "$etat avec succès";
}
?>
<a href="../../Controller/Appartement/listeApp.php" class="btn btn-info btn-lg">Lister</a>