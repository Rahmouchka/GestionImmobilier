<?php
require_once "Appartement.php";
require_once "config.php";

class CRUDAppartement
{
    private $pdo;

    function __construct()
    {
        $cnx = new Config();
        $this->pdo = $cnx->getConfig();
    }
    function ajouterApp(Appartement $app)
    {
        $prop = $app->propriétaire;
        $loc = $app->localité;
        $surface = $app->surface;
        $nbPieces = $app->nbPieces;
        $domaineUsage = $app->domaineUsage;
        $surfaceEspaceCommun = $app->surfaceEspaceCommun;
        $sql = "INSERT INTO immobilier
        VALUES(null,'$prop','$loc',$surface,$nbPieces,'$domaineUsage','Appartement',null,$surfaceEspaceCommun)";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function recupererApp(string $ref)
    {
        $sql = "SELECT * from immobilier WHERE reference=$ref";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    function supprimerApp(string $ref)
    {
        $sql = "DELETE from immobilier WHERE reference=$ref";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function modifierApp(Appartement $app)
    {
        $ref = $app->ref;
        $prop = $app->propriétaire;
        $loc = $app->localité;
        $surface = $app->surface;
        $nbPieces = $app->nbPieces;
        $domaineUsage = $app->domaineUsage;
        $surfaceEspaceCommun = $app->surfaceEspaceCommun;
        $sql = "UPDATE immobilier
        SET proprietaire='$prop',localite='$loc',surface=$surface,nbPieces=$nbPieces,domaineUsage='$domaineUsage',surfaceCommune=$surfaceEspaceCommun
        WHERE reference=$ref";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function listerApp()
    {
        $sql = "SELECT * from immobilier";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
}
