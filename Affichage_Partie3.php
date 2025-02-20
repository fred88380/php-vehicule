<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Vehicule.php';
    require_once 'Deux_Roues.php';
    require_once 'Voiture.php';
    require_once 'Camion.php';

$voiture = new Voiture("vert", 1400);
$voiture->ajouter_personne(65);
$voiture->ajouter_personne(65);

echo "Couleur de la voiture : " . $voiture->getCouleur() . "<br>";
echo "Poids de la voiture après ajout des passagers : " . $voiture->getPoids() . " kg<br>";

$voiture->repeindre("rouge");
$voiture->ajouter_pneu_neige(2);

echo "Nouvelle couleur de la voiture : " . $voiture->getCouleur() . "<br>";

$deux_roues = new Deux_Roues("noir", 120);
$deux_roues->ajouter_personne(80);
$deux_roues->mettre_essence(20);

echo "Couleur du deux-roues : " . $deux_roues->getCouleur() . "<br>";
echo "Poids du deux-roues après ajout de la personne : " . $deux_roues->getPoids() . " kg<br>";

$camion = new Camion("bleu", 10000);
$camion->ajouter_remorque(5);
$camion->ajouter_personne(80);

echo "Couleur du camion : " . $camion->getCouleur() . "<br>";
echo "Poids du camion après ajout de la personne : " . $camion->getPoids() . " kg<br>";

?>
