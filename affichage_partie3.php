<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'vehicule.php';
require_once 'deuxroue.php';
require_once 'voiture.php';
require_once 'camion.php';

$voiture = new Voiture("Vert", 1400, 4);

$voiture->ajouter_personne(65);
$voiture->ajouter_personne(65);

echo "Couleur de la voiture : " . $voiture->getCouleur() . "<br>";
echo "Poids de la voiture après ajout des passagers : " . $voiture->getPoids() . " kg<br>";

$voiture->repeindre("Rouge");
$voiture->ajouter_pneu_neige(2);

echo "Nouvelle couleur de la voiture : " . $voiture->getCouleur() . "<br>";
echo "Nombre de pneus neige : " . $voiture->getNombrePneuNeige() . "<br>";

$deux_roues = new Deux_roues("Noir", 120, 5000);

$deux_roues->ajouter_personne(80);

$deux_roues->mettre_essence(20);

echo "Couleur du deux-roues : " . $deux_roues->getCouleur() . "<br>";
echo "Poids du deux-roues après ajout de la personne et essence : " . $deux_roues->getPoids() . " kg<br>";

$camion = new Camion("Bleu", 10000, 2, 10);

$camion->ajouter_remorque(5);

$camion->ajouter_personne(80);

echo "Couleur du camion : " . $camion->getCouleur() . "<br>";
echo "Poids du camion après ajout de la personne : " . $camion->getPoids() . " kg<br>";
echo "Longueur totale du camion avec remorque : " . $camion->getLongueur() . " mètres<br>";
echo "Nombre de portes du camion : " . $camion->getNombrePorte() . "<br>";
?>
