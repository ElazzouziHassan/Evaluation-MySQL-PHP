<?php


class Mysql {
  private $_serveur = "localhost";
  private $_login = "";
  private $_mdp = "";
  private $_bdd = "";
  private $_cnx = null;

  public function setServeur($serveur){
    $this->_serveur = $serveur;
  }

  public function setLogin($login){
    $this->_login = $login;
  }

  public function setMDB($mdb){
    $this->_mdp = $mdb;
  }

  public function setDB($db){
    $this->_bdd = $db;
  }

  public function getCNX() {
    return $this->_cnx;
}

  public function connexion(){

    $this->_cnx = mysqli_connect($this->_serveur, $this->_login, $this->_mdp, $this->_bdd);

    if (!$this->_cnx)
      exit("Erreur de connexion bdd : " . mysqli_connect_error());

    if (!mysqli_select_db($this->_cnx, $this->_bdd))
      exit("Erreur : base de données inexistante : " . mysqli_error($this->_cnx));

  }

  public function requete($req) {

    $res = mysqli_query($this->_cnx, $req);

    if (!$res) {

        $error_message = mysqli_error($this->_cnx);

        exit("<pre>Erreur dans la requête [$req] : $error_message</pre>");
    }

    return $res;
  }

}
