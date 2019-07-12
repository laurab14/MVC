<?php
//il faut tjrs appeler la base de donnée dans le controller
require '../model/DataBase.php';
require '../model/User.php';

if(count($_POST) > 0){
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    //objet qui contient les attributs et les méthodes de la class User
    $user = new User();
    $user->mail = $mail;
    $user->password = $password;
    if($user->addUser()){
        header('Location: ../index.php');
    }
}