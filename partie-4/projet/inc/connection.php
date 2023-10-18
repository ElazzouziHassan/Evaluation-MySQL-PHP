<?php

include("..\classes\mysql.class.php");

$bdd = new Mysql();
$bdd->setServeur("localhost");
$bdd->setLogin("root");
$bdd-> setMDB("");
$bdd->setDB("travail_collaboratif");
$bdd->connexion();



