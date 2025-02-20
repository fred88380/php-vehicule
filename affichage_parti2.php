<?php
require_once 'Vehicule.php';

$vehicule = new Vehicule("Noir", 1500);

$vehicule->rouler();

$vehicule->ajouter_personne(70);

echo "Nouveau poids du véhicule : " . $vehicule->getPoids() . " kg<br>";
?>
