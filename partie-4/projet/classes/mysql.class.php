<?php
class Mysql
{
    private $_serveur = "localhost";
    private $_login = "root";
    private $_mdp = "";
    private $_bdd = "travail_collaboratif";
    private $_cnx;

    public function setServeur($serveur) {
      $this->_serveur = $serveur;
    }

    public function setLogin($login) {
      $this->_login = $login;
    }

    public function setMDP($mdp){
      $this->_mdp = $mdp;
    }

    public function setDB($db) {
      $this->_bdd = $db;
    }

    public function getCNX() {
      return $this->_cnx;
    }

    public function connexion() {
      $this->_cnx = new mysqli($this->_serveur, $this->_login, $this->_mdp, $this->_bdd);

      if ($this->_cnx->connect_error)
        exit("Erreur de connexion bdd : " . $this->_cnx->connect_error);
    
    }

    public function requete($req) {
      $res = $this->_cnx->query($req);

      if (!$res)
        exit("<pre>Erreur dans la requête [$req] : " . $this->_cnx->error . "</pre>");

      return $res;
    }

}