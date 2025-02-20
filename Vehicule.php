<?php
class Vehicule {
    protected $couleur;
    protected $poids;

    public function __construct($couleur, $poids) {
        $this->couleur = $couleur;
        $this->poids = $poids;
    }

    public function rouler() {
        echo "Le véhicule roule.<br>";
    }

    public function ajouter_personne($poids_personne) {
        $this->poids += $poids_personne;
    }

    public function getPoids() {
        return $this->poids;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setPoids($poids) {
        $this->poids = $poids;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function repeindre($nouvelle_couleur) {
        $this->couleur = $nouvelle_couleur;
    }
    
    // Méthode statique pour afficher les attributs d'un objet
    public static function afficher_attribut($objet) {
        $attributs = get_object_vars($objet);
        foreach ($attributs as $nom => $valeur) {
            echo ucfirst($nom) . " : " . $valeur . "<br>";
        }
    }
}
?>
