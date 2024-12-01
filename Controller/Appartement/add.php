<?php
require_once "../../Model/CRUDAppartement.php";
$crud = new CRUDAppartement();
include "../../View/Appartement/add.php";
if (isset($_POST['ok'])) {
    $ref = htmlspecialchars($_POST['ref']);
    $prop = htmlspecialchars($_POST['prop']);
    $loc = htmlspecialchars($_POST['loc']);
    $surface = htmlspecialchars($_POST['surface']);
    $du = htmlspecialchars($_POST['du']);
    $nbPieces = htmlspecialchars($_POST['nbPieces']);
    $SurfaceEspaceCommun = htmlspecialchars($_POST['SurfaceEspaceCommun']);
    $app = new Appartement($ref, $prop, $loc, $surface, $du, $nbPieces, $SurfaceEspaceCommun);
    $res = $crud->ajouterApp($app);
    if ($res) {
        header("location: ../../View/Appartement/succès.php?etat=Insertion");
        exit;
    }
}
