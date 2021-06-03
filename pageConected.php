<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php include "templates/header.php";?>
    <main>
        <?php if(isset($_SESSION['pseudo'])) : ?>
        <h1>WELCOME</h1>
        <p>Vous avez accéder à la page secrete chut !!!</p>
        
        <p>votre pseudo est <?= $_SESSION['pseudo'] ?></p>
        <p> votre mot de passe est <?= $_SESSION['password'] ?></p>
        <p> votre mail est <?= $_SESSION['mail'] ?></p>
        <p> votre Age est <?= $_SESSION['age'] ?></p>
        <?php else : ?>
        <?php endif ?>
    </main>
    <footer>
        <p>MICHEL Vincent</p>
    </footer>
</body>
</html>



