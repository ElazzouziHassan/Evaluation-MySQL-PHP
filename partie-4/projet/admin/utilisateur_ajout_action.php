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
    echo "Ajout utilisateur OK.";
} else {
    echo "Erreur lors de l'ajout de l'utilisateur.";
}
