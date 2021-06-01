<?php

$name = 'vincent';
$age = 24;
$array = ['marc', 35, 'george'];
// $obj = {};
$bool = true; //false
$null = null;
$users = [
    [
        'name'=>'marc',
        'color'=>'vert',
        'age'=> 34,
        'other'=> ['toto','rien',46, 2342]
    ],
    [
        'name'=>'paulette',
        'color'=> 'bleu',
        'age'=> 90
    ],
    [
        'name'=>'Eskarina',
        'color'=> 'octarine',
        'age'=> 13
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <title>PHP</title>
</head>
<body>
    <?php
        include "templates/header.php"; 
    ?>
<main>

    <table>
        <tr>
            <th>Prénom</th>
            <th>Couleur</th>
            <th>Age</th>
        </tr>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user['name']?></td>
                <td><?=$user['color']?></td>
                <td><?=$user['age']?></td>
            </tr>
            <?php endforeach ?>
            <?php $users[0]['other'][2];?>
        </table>
</main>
    <footer>
        <p>MICHEL Vincent</p>
    </footer>        
</body>
</html>