<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <script src="./connexion.js" defer></script>
    <title>connection</title>
</head>
<body>
    <?php
        include "templates/header.php"; 
    ?>
<main id="connexion">
    <form action="controller/session.php" method="post" class="connec">
        <div class="nav">
            <label for="login">Identifiant : </label>
            <input type="text" name="pseudo" id="" required>
        </div>
        <div class="nav">
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp"required><php? endif ?>
            <img src="./img/eye.svg" alt="" class="eye">
            </div>
                <!-- par $_GET -->
            <!-- <?php if(isset($_GET['error'])) : ?>
                    <div class="nav"style="color:red">Votre identifiant ou mot de passe est incorect</div>
                <?php endif ?> -->
                <!-- par $_SESSION -->
                <?php if(isset($_SESSION['error'])) : ?>
                    <div class="nav"style="color:red">Votre identifiant ou mot de passe est incorect</div>
                <?php endif ?>
                    <?php session_destroy(); ?>
        <div class="nav">
            <input type="submit" name="submit" value="connection">
        </div>
    </form>
    <div class="vodka">
        <p>Si vous ne posséder pas de compte</p>
        <button id="is"type="submit">Inscrivez-vous</button>
    </div>
</main>
<main id="inscription" class="none">
    <form action="./popForm.php" method="post" class="form">
        <div class="formul">
            <label for="firstName">Prénom :</label>
            <input type="text" name="name" id="firsName">
        </div>
        <div class="formul">
            <label for="lastName">Nom : </label>
            <input type="text" name="lname" id="lastName">
        </div>
        <div class="formul">
            <label for="dateOfBirthday">Date de naissance : </label>
            <input type="date" name="date" id="dateOfBirthday">
        </div> 
        <div class="formul">
            <label for="email">e-mail :</label>
            <input type="email" name="email" id="mail">
        </div>            
        <div class="formul">
            <label for="mdp">Mot de passe</label>
            <input type="password" name="" id="">
        </div>
        <div class="formul">
            <input type="submit" value="Envoyer le formulaire">
        </div>
    </form>
</main>
<footer>
    <p>MICHEL Vincent</p>
</footer>
</body>
</html>



