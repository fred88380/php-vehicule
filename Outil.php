<?php
require_once 'Vehicule.php';
require_once 'Deux_Roues.php';
require_once 'Camion.php';

// Classe utilitaire pour afficher les attributs des objets
class Outils {
    public static function afficher_attribut($objet) {
        $attributs = get_object_vars($objet);
        foreach ($attributs as $nom => $valeur) {
            echo ucfirst($nom) . " : " . $valeur . "<br>";
        }
    }
}

// Création d'un objet Deux_Roues
$deux_roues = new Deux_Roues("Rouge", 150, 5000);

// Ajout d'une personne sur le deux-roues
$deux_roues->ajouter_personne(70);

echo "Poids total du deux-roues après ajout d'une personne : " . $deux_roues->getPoids() . " kg<br>";

// Repeindre et modifier la cylindrée
$deux_roues->repeindre("Vert");
$deux_roues->setCylindree(1000);

// Affichage des attributs du deux-roues
echo "<br><strong>Attributs du deux-roues :</strong><br>";
Outils::afficher_attribut($deux_roues);

echo "<br>";

// Création d'un objet Camion
$camion = new Camion("Blanc", 6000, 2, 10);

// Ajout d'une personne dans le camion
$camion->ajouter_personne(84);

// Repeindre le camion et modifier le nombre de portes
$camion->repeindre("Bleu");
$camion->setNombrePorte(2);

// Affichage des attributs du camion
echo "<br><strong>Attributs du camion :</strong><br>";
Outils::afficher_attribut($camion);
?>
