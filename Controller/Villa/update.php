<?php
require_once "../../Model/CRUDVilla.php";
$crud = new CRUDVilla();

$ref = $_GET['ref'];
$app = $crud->recupererVilla($ref);
include "../../View/Villa/update.php";

if (isset($_POST['ok2'])) {
    $ref = htmlspecialchars($_POST['ref']);
    $prop = htmlspecialchars($_POST['prop']);
    $loc = htmlspecialchars($_POST['loc']);
    $surface = htmlspecialchars($_POST['surface']);
    $du = htmlspecialchars($_POST['du']);
    $nbPieces = htmlspecialchars($_POST['nbPieces']);
    $nbEtages = htmlspecialchars($_POST['nbEtages']);
    $v = new Villa($ref, $prop, $loc, $surface, $du, $nbPieces, $nbEtages);
    $res = $crud->modifierVilla($v);
    if ($res) {
        header("location: ../../View/Villa/succès.php?etat=Modification");
        exit;
    }
}
