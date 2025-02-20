<?php
require_once "Quatre_Roues.php";

class Voiture extends Quatre_Roues {
    private $nombre_pneu_neige = 0;

    public function __construct($couleur, $poids, $nombre_porte = 4) {
        parent::__construct($couleur, $poids, $nombre_porte);
    }

    public function ajouter_pneu_neige($quantite) {
        $this->nombre_pneu_neige += $quantite;
        echo "Ajout de $quantite pneus neige.<br>";
    }

    public function enlever_pneu_neige($quantite) {
        if ($this->nombre_pneu_neige >= $quantite) {
            $this->nombre_pneu_neige -= $quantite;
            echo "Retrait de $quantite pneus neige.<br>";
        } else {
            echo "Impossible de retirer plus de pneus neige que disponible.<br>";
        }
    }

    public function getNombrePneuNeige() {
        return $this->nombre_pneu_neige;
    }
}
?>
