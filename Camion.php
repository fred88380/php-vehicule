<?php
require_once "Quatre_Roues.php";
require_once "Action.php";

class Camion extends Quatre_Roues {
    use Action;
    
    protected $longueur;

    public function __construct($couleur, $poids, $nombre_porte = null, $longueur = 0) {
        parent::__construct($couleur, $poids, $nombre_porte);
        $this->longueur = $longueur;
    }

    public function ajouter_personne($poids_personne) {
        $this->poids += $poids_personne;
    }

    public function ajouter_remorque($longueur_remorque) {
        $this->longueur += $longueur_remorque;
    }

    public function getLongueur() {
        return $this->longueur;
    }

    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }
}
?>
