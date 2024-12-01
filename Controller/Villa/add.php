<?php
require_once "../../Model/CRUDVilla.php";
$crud = new CRUDVilla();
include "../../View/Villa/add.php";
if (isset($_POST['ok'])) {
    $ref = htmlspecialchars($_POST['ref']);
    $prop = htmlspecialchars($_POST['prop']);
    $loc = htmlspecialchars($_POST['loc']);
    $surface = htmlspecialchars($_POST['surface']);
    $du = htmlspecialchars($_POST['du']);
    $nbPieces = htmlspecialchars($_POST['nbPieces']);
    $nbEtages = htmlspecialchars($_POST['nbEtages']);
    $v = new Villa($ref, $prop, $loc, $surface, $du, $nbPieces, $nbEtages);
    $res = $crud->ajouterVilla($v);
    if ($res) {
        header("location: ../../View/Villa/succès.php?etat=Insertion");
        exit;
    }
}
