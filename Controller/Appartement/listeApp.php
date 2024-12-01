<?php
require_once "../../Model/CRUDAppartement.php";
$crud = new CRUDAppartement();
$lesApp = $crud->listerApp();
include "../../View/Appartement/listeApp.php";
