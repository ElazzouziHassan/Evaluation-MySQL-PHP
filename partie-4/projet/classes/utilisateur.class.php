<?php
class Utilisateur {
  private $_id;
  private $_nom;
  private $_prenom;
  private $_mail;
  private $_mdp;
  private $_d_naissance;

  public function setNom($nvNom) {
      if (strlen($nvNom) == 0) 
        exit("Utilisateur : le nom est obligatoire");
      
      $this->_nom = $nvNom;
  }

  public function set_prenom($nvPrenom) {
    if (strlen($nvPrenom) == 0) 
        exit("Utilisateur : le nom est obligatoire");  

    $this->_prenom = $nvPrenom;
  }

  public function setMail($nvMail) {
    if (strlen($nvMail) < 5 or strlen($nvMail) > 15) 
      exit("Non Valide mail !"); 

    $this->_mail = $nvMail;
  }

  public function set_mdp($nvMDP) {
      if (empty($nvMDP)) {
          $nvMDP = "1234";
      }
      if (strlen($nvMDP) < 4 || strlen($nvMDP) > 15) 
        exit("Utilisateur : le mdp doit être compris entre 4 et 15 caractères");

      $this->_mdp = $nvMDP;
  }

  public function setDNaissance($nvDN) {
      $this->_d_naissance = $nvDN;
  }

  public function setID($nvID) {
      $this->_id = $nvID;
  }
}