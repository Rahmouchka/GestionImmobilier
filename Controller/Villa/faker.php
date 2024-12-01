<?php
require_once "../../Model/config.php";
$cnx = new Config();
$pdo = $cnx->getConfig();

$sql = "";
for ($i = 1; $i < 100; $i++) {
    $ref = $i;
    $prop = "Rahma";
    $loc = "Tunis";
    $surface = random_int(20, 10000);
    $du = "Domicile";
    $nbPieces = random_int(1, 20);
    $nbEtages = random_int(1, 4);
    $sql .=  "INSERT INTO  immobilier
     VALUES ($ref,'$prop','$loc',$surface,$nbPieces,'$du','Appartement',$nbEtages,null);";
}
$pdo->exec($sql);
