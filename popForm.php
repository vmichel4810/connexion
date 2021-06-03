<?php 
session_start();
$_SESSION['firstname'] = $_POST['name'];

?>
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
    <?php
    include "templates/header.php";      
    
    ?>
    <p>Tu as bien envoyer ton formulaire <?= $_POST['name'].' '. $_POST['lname']?>tu es né le <?= $_POST['date']?></p>
    <footer>
        <p>MICHEL Vincent</p>
    </footer>
</body>
</html>