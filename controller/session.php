<?php
session_start();
include "idarray.php";

$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
foreach($users as $value){
    if($pseudo === $value['name'] && $mdp === $value['password']){
        $_SESSION['pseudo'] = $_POST['pseudo'];
        $_SESSION['password'] = md5($value['password']);
        $_SESSION['mail'] = $value['mail'];
        $_SESSION['age'] = $value['age'];
        var_dump($_SESSION['mdp']);
        header('Location: /');
        exit();
    }
    // if(empty($_SESSION['pseudo']) && empty($_SESSION['mdp'])){
    //     header('Location: /connexion.php?error=');
    // }
}
$_SESSION['error'] =true;
header('Location: /connexion.php');

