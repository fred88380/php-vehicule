<?php
require_once 'Vehicule.php';
require_once 'Quatre_Roues.php';
require_once 'Camion.php';
require_once 'Action.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$camion = new Camion("bleu", 10000, 2);

$camion->ajouter_remorque(10);

$camion->mettre_essence(100);

$camion->repeindre("vert");

Vehicule::afficher_attribut($camion);
?>
