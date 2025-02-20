<?php
require_once 'Vehicule.php';

class Camion extends Vehicule {
    private $longueur;
    private $nombre_porte;

    public function __construct($couleur, $poids, $nombre_porte, $longueur) {
        parent::__construct($couleur, $poids);
        $this->nombre_porte = $nombre_porte;
        $this->longueur = $longueur;
    }

    public function ajouter_remorque($longueur_remorque) {
        $this->longueur += $longueur_remorque;
    }

    public function getLongueur() {
        return $this->longueur;
    }

    public function getNombrePorte() {
        return $this->nombre_porte;
    }
}
?>
