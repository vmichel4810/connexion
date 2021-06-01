<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <title>connection</title>
</head>
<body>
    <?php
        include "templates/header.php"; 
    ?>
<main>
    <form action="controller/session.php" method="post" class="connec">
        <div>
            <label for="login">Identifiant : </label>
            <input type="text" name="pseudo" id="" required>
        </div>
        <div>
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" required><php? endif ?>
        </div>
        <div>
            <input type="submit" name="submit" value="connection">
        </div>
    </form>
</main>
<footer>
    <p>MICHEL Vincent</p>
</footer>
</body>
</html>



