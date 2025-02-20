<?php
require_once 'Vehicule.php';
require_once 'Quatre_Roues.php';
require_once 'Voiture.php';

$voiture = new Voiture("Vert", 2100, 2);

$voiture->ajouter_pneu_neige(2);
$voiture->ajouter_personne(80);

$voiture->setCouleur("Bleu");

$voiture->enlever_pneu_neige(4);

$voiture->setCouleur("Noir");

// Affichage des attributs de la voiture via la méthode statique de Vehicule
Vehicule::afficher_attribut($voiture);
?>
