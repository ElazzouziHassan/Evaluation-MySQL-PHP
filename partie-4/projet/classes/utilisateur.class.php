<?php
class Utilisateur {

  private $_id;
  private $_nom;
  private $_prenom;
  private $_d_naissance;
  private $_mail;
  private $_mdp = '1234'; 
  
  public function setNom($nom) {
    if ($nom === null || strlen($nom) == 0)
    exit("Utilisateur : le nom est obligatoire");
    
    $this->_nom = $nom;
  }
  
  public function setPrenom($prenom) {
    $this->_prenom = $prenom;
  }
  
  public function setMail($mail) {
    if (strlen($mail) < 5 || strlen($mail) > 50) 
    exit("Utilisateur : la taille du mail doit être entre 5 et 50 caractères");
    
    $this->_mail = $mail;
  }
  
  public function setMDP($mdp) {
    if (strlen($mdp) < 4 || strlen($mdp) > 15)
    exit("Utilisateur : le mdp doit être compris entre 4 et 15 caractères");
    
    $this->_mdp = $mdp;
  }

  public function setDNaissance($dateNaissance) {
    $this->_d_naissance = $dateNaissance;
  }
  
  public function setID($id) {
    $this->_id = $id;
  }
  
  public function enregistrer(Mysql $bdd) {
    $req = "INSERT INTO utilisateur (id, nom, prenom, d_naissance, mail, mdp) 
              VALUES (null, '$this->_nom', '$this->_prenom', '$this->_d_naissance', '$this->_mail', '$this->_mdp')";

      return $bdd->requete($req);
    }

  public function supprimer(Mysql $bdd) {
    if ($this->_id) {

    $req = "DELETE FROM utilisateur WHERE id = $this->_id";
      return $bdd->requete($req);
    }
  }

  
}
