<?php
require_once "Villa.php";
require_once "config.php";

class CRUDVilla
{
    private $pdo;

    function __construct()
    {
        $cnx = new Config();
        $this->pdo = $cnx->getConfig();
    }
    function ajouterVilla(Villa $v)
    {
        $prop = $v->propriétaire;
        $loc = $v->localité;
        $surface = $v->surface;
        $nbPieces = $v->nbPieces;
        $domaineUsage = $v->domaineUsage;
        $nbEtages = $v->nbEtages;
        $sql = "INSERT INTO immobilier
        VALUES(null,'$prop','$loc',$surface,$nbPieces,'$domaineUsage','Villa',$nbEtages,null)";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function recupererVilla(string $ref)
    {
        $sql = "SELECT * from immobilier WHERE reference=$ref";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    function supprimerVilla(string $ref)
    {
        $sql = "DELETE from immobilier WHERE reference=$ref";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function modifierVilla(Villa $v)
    {
        $ref = $v->ref;
        $prop = $v->propriétaire;
        $loc = $v->localité;
        $surface = $v->surface;
        $nbPieces = $v->nbPieces;
        $domaineUsage = $v->domaineUsage;
        $nbEtages = $v->nbEtages;
        $sql = "UPDATE immobilier
        SET proprietaire='$prop',localite='$loc',surface=$surface,nbPieces=$nbPieces,domaineUsage='$domaineUsage',nbEtages=$nbEtages
        WHERE reference=$ref";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function listerVilla()
    {
        $sql = "SELECT * from immobilier";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
}
