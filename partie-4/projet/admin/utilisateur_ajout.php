<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un utilisateur</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form id="form1" name="form1" method="post" action="utilisateur_ajout_action.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <label for="mail">E-mail :</label>
        <input type="email" name="mail" id="mail" required><br><br>

        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp" required><br><br>

        <label for="d_naissance">Date de naissance (jj/mm/aaaa) :</label>
        <input type="text" name="d_naissance" id="d_naissance"><br><br>

        <input type="submit" name="b_ajouter" value="Ajouter">
    </form>
</body>
</html>
