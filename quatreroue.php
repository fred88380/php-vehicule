<?php
require_once 'vehicule.php';
class Quatre_roues extends Vehicule {
    private $nombre_porte;

    public function __construct($couleur, $poids, $nombre_porte) {
        parent::__construct($couleur, $poids);
        $this->nombre_porte = $nombre_porte;
    }

    public function getNombrePorte() {
        return $this->nombre_porte;
    }

    public function setNombrePorte($nombre_porte) {
        $this->nombre_porte = $nombre_porte;
    }

    public function repeindre($couleur) {
        $this->setCouleur($couleur);
    }
}
?>