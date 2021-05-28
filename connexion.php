<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>connection</title>
</head>
<body>
    <?php
        include "templates/header.php"; 
    ?>
<main>
    <form action="controller/session.php" method="post">
        <div>
            <label for="login">Identifiant : </label>
            <input type="text" name="pseudo" id="">
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



