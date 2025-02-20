<?php
require_once 'Vehicule.php';

class Voiture extends Vehicule {
    private $nombre_pneu_neige;

    public function __construct($couleur, $poids, $nombre_pneu_neige) {
        parent::__construct($couleur, $poids);
        $this->nombre_pneu_neige = $nombre_pneu_neige;
    }

    public function ajouter_pneu_neige($nombre) {
        $this->nombre_pneu_neige += $nombre;
    }

    public function enlever_pneu_neige($nombre) {
        $this->nombre_pneu_neige -= $nombre;
    }

    public function getNombrePneuNeige() {
        return $this->nombre_pneu_neige;
    }
}
?>
