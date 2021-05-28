<?php 
session_start();
$_SESSION['firstname'] = $_POST['name'];
var_dump($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
    include "templates/header.php";  
   ?>
    <p>Tu as bien envoyer ton formulaire <?= $_POST['name'].' '. $_POST['lname']?>tu es né le <?= $_POST['date']?></p>
    
</body>
</html>