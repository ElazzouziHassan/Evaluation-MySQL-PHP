<?php

require('chaine.class.php'); 

$texte = new Chaine("Codeur Web ISEEM");

echo "Gras: " . $texte->gras() . "<br>";
echo "Italique: " . $texte->italique() . "<br>";
echo "Souligné: " . $texte->souligne() . "<br>";
echo "Majuscule: " . $texte->majuscule();
