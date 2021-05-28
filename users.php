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
var_dump($users);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css">
        <title>PHP</title>
    </head>
    <body>
        <?php
            include "templates/header.php"; 
        ?>
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
        
    </body>
    </html>