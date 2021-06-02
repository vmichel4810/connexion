<?php
session_start();
include "idarray.php";

$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
$isConnected = 0;
foreach($users as $key => $value){
    if($pseudo === $value['name'] && $mdp === $value['password']){
        $_SESSION['pseudo'] = $_POST['pseudo']; 
        header('Location: /');
    }
    if(empty($_SESSION['pseudo']) && empty($_SESSION['mdp'])){
        header('Location: /connexion.php?error=');
    }
}

