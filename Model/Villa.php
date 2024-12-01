<?php
require_once "Immobilier.php";
class Villa extends Immobilier
{
    private int $nbEtages;

    function __construct($ref, $prop, $loc, $surface, $nbPieces, $domaineUsage, $nbEtages)
    {
        parent::__construct($ref, $prop, $loc, $surface, $nbPieces, $domaineUsage);
        $this->nbEtages = $nbEtages;
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
