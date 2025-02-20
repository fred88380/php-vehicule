<?php
require_once "Vehicule.php";

class Deux_Roues extends Vehicule {
    private $cylindree;

    public function __construct($couleur, $poids, $cylindree = 125) {
        parent::__construct($couleur, $poids);
        $this->cylindree = $cylindree;
    }

    // On surcharge l'ajout d'une personne pour inclure un supplément de 2 kg pour l'équipement
    public function ajouter_personne($poids_personne) {
        $this->poids += ($poids_personne + 2);
    }

    public function mettre_essence($nombre_litre) {
        echo "Ajout de $nombre_litre litres d'essence.<br>";
    }

    public function getCylindree() {
        return $this->cylindree;
    }

    public function setCylindree($cylindree) {
        $this->cylindree = $cylindree;
    }
}
?>
