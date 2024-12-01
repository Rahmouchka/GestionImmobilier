<?php
class Immobilier
{
    protected String $ref;
    protected String $propriétaire;
    protected String $localité;
    protected String $surface;
    protected String $nbPieces;
    protected String $domaineUsage;

    function __construct($ref, $prop, $loc, $surface, $nbPieces, $domaineUsage)
    {
        $this->ref = $ref;
        $this->propriétaire = $prop;
        $this->localité = $loc;
        $this->surface = $surface;
        $this->nbPieces = $nbPieces;
        $this->domaineUsage = $domaineUsage;
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
