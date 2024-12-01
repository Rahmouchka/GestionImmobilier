<?php
require_once "../../Model/CRUDAppartement.php";
$crud = new CRUDAppartement();
$ref = $_GET['ref'];
$res = $crud->supprimerApp($ref);
if ($res) {
    header("location: ../../View/Appartement/succès.php?etat=Suppression");
    exit;
} else {
    echo "problème de suppression";
}
