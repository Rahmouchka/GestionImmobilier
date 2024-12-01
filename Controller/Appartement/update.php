<?php
require_once "../../Model/CRUDAppartement.php";
$crud = new CRUDAppartement();

$ref = $_GET['ref'];
$app = $crud->recupererApp($ref);
include "../../View/Appartement/update.php";

if (isset($_POST['ok2'])) {
    $ref = htmlspecialchars($_POST['ref']);
    $prop = htmlspecialchars($_POST['prop']);
    $loc = htmlspecialchars($_POST['loc']);
    $surface = htmlspecialchars($_POST['surface']);
    $du = htmlspecialchars($_POST['du']);
    $nbPieces = htmlspecialchars($_POST['nbPieces']);
    $SurfaceEspaceCommun = htmlspecialchars($_POST['SurfaceEspaceCommun']);
    $app = new Appartement($ref, $prop, $loc, $surface, $du, $nbPieces, $SurfaceEspaceCommun);
    $res = $crud->modifierApp($app);
    if ($res) {
        header("location: ../../View/Appartement/succès.php?etat=Modification");
        exit;
    }
}
