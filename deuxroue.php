<?php
require_once 'Vehicule.php';

class Deux_roues extends Vehicule {
    private $kilometrage;

    // Constructeur
    public function __construct($couleur, $poids, $kilometrage) {
        parent::__construct($couleur, $poids);
        $this->kilometrage = $kilometrage;
    }

    // Mettre de l'essence (modifie le poids)
    public function mettre_essence($nombre_litre) {
        $this->poids += $nombre_litre;  // Un litre d'essence = 1 kg
    }
}
?>
