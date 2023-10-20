<?php
include("..\inc\connection.php");
include("..\classes\utilisateur.class.php");


$user = new Utilisateur();
$user->setNom($_POST['nom']);
$user->setPrenom($_POST['prenom']);
$user->setMail($_POST['mail']);
$user->setMDP($_POST['mdp']);
$user->setDNaissance($_POST['date-naissance']);

if ($user->enregistrer($bdd)) {
    echo "User has been added succefully.";
} else {
    echo "ERROR : Failed to add this user !";
}
