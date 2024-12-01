<?php
class Config
{
    private $pdo;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=gestionimmobiliers";
        $user = "root";
        $pw = "";
        $this->pdo = new PDO($dsn, $user, $pw);
    }
    public function getConfig()
    {
        return $this->pdo;
    }
}
