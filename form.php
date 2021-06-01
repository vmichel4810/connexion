<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
   <?php
    include "templates/header.php"; 
   ?>
    <main>
        <form action="./popForm.php" method="post" class="form">
            <div class="nav">
                <label for="firstName">Prénom :</label>
                <input type="text" name="name" id="firsName">
            </div>
            <div class="nav">
                <label for="lastName">Nom : </label>
                <input type="text" name="lname" id="lastName">
            </div>
            <div class="nav">
                <label for="dateOfBirthday">Date de naissance : </label>
                <input type="date" name="date" id="dateOfBirthday">
            </div> 
            <div class="nav">
                <label for="email">e-mail :</label>
                <input type="email" name="email" id="mail">
            </div>            
            <div class="nav">
                <label for="mdp">Mot de passe</label>
                <input type="password" name="" id="">
            </div>
            <div class="nav">
                <input type="submit" value="Envoyer le formulaire">
            </div>
        </form>
    </main>
    <footer>
        <p>MICHEL Vincent</p>
    </footer>        
</body>
</html>