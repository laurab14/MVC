<?php
//la class User qui hérite de DataBase.php (DB)
class User extends DB{
    public $id;
    public $mail;
    public $password;
    public function __construct(){
        //On récupere le constructeur de la page DataBase.php qui est le parent de la class User
        parent::__construct();
    }
    public function addUser(){
        $query = 'INSERT INTO `user`(`mail`, `password`) VALUES (:mail, :password)';
        // création de la variable $addUser qui nous a permis de préparer la requête
        $addUser = $this->db->prepare($query);
        $addUser->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $addUser->bindValue(':password', $this->password, PDO::PARAM_STR);
        if($addUser->execute()){
            return true;
        }
    }
}