<?php
require_once 'vehicule.php';
require_once 'deuxroue.php';
require_once 'camion.php';

abstract class Vehicule_Partie4 extends Vehicule {
    public static function afficher_attribut($objet) {
        $attributs = get_object_vars($objet);
        foreach ($attributs as $nom => $valeur) {
            echo ucfirst($nom) . " : " . $valeur . "<br>";
        }
    }
}

class Deux_roues_Partie4 extends Deux_roues {
    private $cylindree;

    public function ajouter_personne($poids_personne) {
        $this->poids += ($poids_personne + 2);
    }

    public function setCylindree($cylindree) {
        $this->cylindree = $cylindree;
    }
}

class Camion_Partie4 extends Camion {
    public function ajouter_personne($poids_personne) {
        $this->poids += $poids_personne;
    }
}

$deux_roues = new Deux_roues_Partie4("Rouge", 150, 5000);

$deux_roues->ajouter_personne(70);

echo "Poids total du deux-roues après ajout d'une personne : " . $deux_roues->getPoids() . " kg<br>";

$deux_roues->repeindre("Vert");
$deux_roues->setCylindree(1000);

echo "<br>Attributs du deux-roues :<br>";
Vehicule_Partie4::afficher_attribut($deux_roues);

echo "<br>";

$camion = new Camion_Partie4("Blanc", 6000, 2, 10);

$camion->ajouter_personne(84);

$camion->repeindre("Bleu");
$camion->setNombrePorte(2);

echo "<br>Attributs du camion :<br>";
Vehicule_Partie4::afficher_attribut($camion);
?>
