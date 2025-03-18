<?php
 session_start();

include '../models/login.php';

class LoginController{
    private $loginModel;

    public function __construct() {
        $this->loginModel = new Login();
    }

    public function registerLogin() {
        if(!isset($_POST['email'], $_POST['password'])){
            echo 'champs vide ';
        }
        else{
        $message = ' ';
        $email = $_POST['email'];
        $user = $this->loginModel->connect($email);
        if ($user && password_verify($_POST['password'], $user['password'])) { 
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['birthdate'] = $user['birthdate'];
            $_SESSION['city'] = $user['city'];
            $_SESSION['genre_name'] = $user['genre_name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['hobbies_name'] = $user['hobbies_name'];
            $_SESSION['password'] = $user['password'];
            header("location: /app/views/recherche.php"); 
            exit();
        } else {
            $message = 'Mauvais identifiants';
            echo $message;
            header("location: ../../index.php"); 
            exit();
        }

        }

    }

}