<?php
include("../classes/mysql.class.php"); 

$bdd = new Mysql();
$bdd->setServeur("localhost");
$bdd->setLogin("root"); 
$bdd->setMDP(""); 
$bdd->setDB("travail_collaboratif"); 
$bdd->connexion();
