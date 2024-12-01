<?php
require_once "../../Model/CRUDVilla.php";
$crud = new CRUDVilla();
$ref = $_GET['ref'];
$res = $crud->supprimerVilla($ref);
if ($res) {
    header("location: ../../View/Villa/succès.php?etat=Suppression");
    exit;
} else {
    echo "problème de suppression";
}
