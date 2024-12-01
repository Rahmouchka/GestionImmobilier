<?php
require_once "../../Model/CRUDVilla.php";
$crud = new CRUDAppartement();
$lesApp = $crud->listerVilla();
include "../../View/Villa/listeApp.php";
