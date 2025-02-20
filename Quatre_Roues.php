<?php
require_once "Vehicule.php";

class Quatre_Roues extends Vehicule {
    protected $nombre_porte;

    public function __construct($couleur, $poids, $nombre_porte = 4) {
        parent::__construct($couleur, $poids);
        $this->nombre_porte = $nombre_porte;
    }

    public function setNombrePorte($nombre_porte) {
        $this->nombre_porte = $nombre_porte;
    }

    public function getNombrePorte() {
        return $this->nombre_porte;
    }
}
?>
