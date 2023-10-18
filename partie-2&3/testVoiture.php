<?php
include 'voitureElectrique.class.php';

if (isset($_POST['matricule'], $_POST['marque'], $_POST['modele'], $_POST['annee'])) {
  
  if ($_POST['autonomie'] == '') {
    $voiture = new voiture($_POST['matricule'], $_POST['marque'], $_POST['modele'], $_POST['annee']);
  } else {
    $voiture = new voitureElectrique($_POST['matricule'], $_POST['marque'], $_POST['modele'], $_POST['annee'], $_POST['autonomie']);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP 3 : Evaluation MySQL et PHP | classe Voiture</title>
</head>

<body>
  <?php if (isset($voiture)) : ?>
    <?php $voiture->Afficher() ?>
  <?php else : ?>
    <h1>Veuillez remplir les infos suivantes: </h1>
    <form action="testVoiture.php" method="post">
      Matricule: <input type="text" name="matricule"><br><br>
      Marque: <input type="text" name="marque"><br><br>
      Modèle: <input type="text" name="modele"><br><br>
      Autonomie: <input type="text" name="autonomie"><br><br>
      Annee:
      <select name="annee" id="annee">
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
      </select><br><br>
      <input type="submit" value="valider">
    </form>
  <?php endif; ?>
</body>

</html>