<?php
class Utilisateur {
  private $_id;
  private $_nom;
  private $_prenom;
  private $_mail;
  private $_mdp = "1234";
  private $_d_naissance;

  public function setNom($nvNom) {
      if (strlen($nvNom) == 0) 
        exit("Utilisateur : le nom est obligatoire");
      
      $this->_nom = $nvNom;
  }

  public function setPrenom($nvPrenom) {
    if (strlen($nvPrenom) == 0) 
        exit("Utilisateur : le nom est obligatoire");  

    $this->_prenom = $nvPrenom;
  }

  public function setMail($nvMail) {
    if (strlen($nvMail) < 5 or strlen($nvMail) > 15) 
      exit("Non Valide mail !"); 

    $this->_mail = $nvMail;
  }

  public function setMDP($nvMDP) {
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

  public function enregistrer(Mysql $bdd){
    $req = `
      INSERT INTO 
        utilisateur (id, nom, prenom, d_naissance, mail, mdp) 
        VALUES (
          null, 
          '$this->_nom', 
          '$this->_prenom', 
          '$this->_d_naissance', 
          '$this->_mail', 
          '$this->_mdp'
        )
      `;
    
    return $bdd->requete($req);
  }

  public function supprimer(Mysql $bdd){

    if ($this->_id) {
      $req = "DELETE FROM utilisateur WHERE id = $this->_id";
      return $bdd->requete($req);
    }
  }

}
