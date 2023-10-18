<?php

require "voiture.class.php";

class voitureElectrique extends voiture
{
    public $autonomie;

    public function __construct($matricule, $marque, $modele, $annee, $autonomie)
    {
        parent::__construct($matricule, $marque, $modele, $annee);
        $this->autonomie = $autonomie;
    }

    public function AfficherAutonomie()
    {
        echo "Autonomie : {$this->autonomie}";
    }

    public function Afficher()
    {
        parent::Afficher();
        echo "Autonomie : {$this->autonomie}";
    }
}