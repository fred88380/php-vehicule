<?php
class Vehicule {
    private $couleur;
    private $poids;

    public function __construct($couleur, $poids) {
        $this->couleur = $couleur;
        $this->poids = $poids;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function getPoids() {
        return $this->poids;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function setPoids($poids) {
        $this->poids = $poids;
    }

    public function repeindre($couleur) {
        $this->couleur = $couleur;
    }

    public function mettre_essence($nombre_litre) {
        $this->poids += $nombre_litre;  // Un litre d'essence = 1 kg
    }

    public function ajouter_personne($poids_personne) {
        $this->poids += $poids_personne;
    }
}
?>
