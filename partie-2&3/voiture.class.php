<?php

class voiture {
  private $matricule;
  private $marque;
  private $modele;
  private $annee;

  public function __construct($matricule, $marque, $modele, $annee) {
    $this->matricule = $matricule;
    $this->marque = $marque;
    $this->modele = $modele;
    $this->annee = $annee;
}

  // !getters :
  public function getMatricule() { return $this->matricule; } 
  public function getMarque() { return $this->marque; } 
  public function getModele() { return $this->modele; } 
  public function getAnnee() { return $this->annee; }

  // !setters :
  public function setMatricule($newMatricule) {
    $this->matricule = $newMatricule;
  }
  public function setMarque($newMarque) {
    $this->matricule = $newMarque;
  }
  public function setModele($newModele) {
    $this->matricule = $newModele;
  }
  public function setAnnee($newAnnee) {
    $this->matricule = $newAnnee;
  }

  // !La methode afficher :
  public function Afficher() {
    echo "<h1>Les informations de la voiture </h1>";
    echo "Matricule: " . $this->matricule . "<br><br>";
    echo "Marque: " . $this->marque . "<br><br>";
    echo "Modèle: " . $this->modele . "<br><br>";
    echo "Année: " . $this->annee . "<br><br>";
}
}