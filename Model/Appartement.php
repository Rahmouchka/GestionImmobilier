<?php
require_once "Immobilier.php";
class Appartement extends Immobilier
{
    private float $surfaceEspaceCommun;

    function __construct($ref, $prop, $loc, $surface, $nbPieces, $domaineUsage, $surfaceEspaceCommun)
    {
        parent::__construct($ref, $prop, $loc, $surface, $nbPieces, $domaineUsage);
        $this->surfaceEspaceCommun = $surfaceEspaceCommun;
    }
    function __set($name, $value)
    {
        $this->$name = $value;
    }
    function __get($name)
    {
        return $this->$name;
    }
}
