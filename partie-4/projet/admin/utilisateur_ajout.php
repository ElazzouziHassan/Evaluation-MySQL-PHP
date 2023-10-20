<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>User Registration</title>
</head>
<body>
    
<form id="form1" name="form1" method="post" action="utilisateur_ajout_action.php">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" required ><br>

            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" id="prenom"><br>

            <label for="mail">Mail:</label>
            <input type="email" name="mail" id="mail" required><br>

            <label for="mdp">Mot de passe:</label>
            <input type="password" name="mdp" id="mdp" required><br>

            <label for="d_naissance">Date de naissance (JJ/MM/AAAA):</label>
            <input type="text" name="date-naissance" id="date-naissance" placeholder="JJ/MM/AAAA"><br>

            <div class="center-button">
                <input type="submit" name="b_ajouter" value="Envoyer">
            </div>
            

        </form>

    <script src="../js/script.js"></script>
</body>
</html>
