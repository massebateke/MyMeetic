<?php
    require_once('../app/models/register.php');
    
class RegisterController{
    private $registerModel;
    public function __construct() {
        $this->registerModel = new Register();
    }
     
    public function register() {
        if(!isset($_POST['firstname'], $_POST['lastname'] , $_POST['birthdate'] ,$_POST['password'], $_POST['genre_name'],$_POST['hobbies_name'] , $_POST['city'])){
            echo 'champs vide ';
           }
           else{
            $email = $_POST['email'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $birthdate = $_POST['birthdate'];
            $genre_name = $_POST['genre_name'];
            $hobbies_name = $_POST['hobbies_name'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $city = $_POST['city'];

            $count = $this->registerModel->subscribe($email, $firstname, $lastname, $birthdate, $genre_name,$hobbies_name, $password, $city);
            
            if ($count){
                session_start();
                $_SESSION['firstname'] = $count['firstname'];
                $_SESSION['lastname'] = $count['lastname'];
                $_SESSION['birthdate'] = $count['birthdate'];
                $_SESSION['city'] = $count['city'];
                $_SESSION['genre_name'] = $count['genre_name'];
                $_SESSION['email'] = $count['email'];
                $_SESSION['hobbies_name'] = $count['hobbies_name'];
                header("location: ../app/views/recherche.php");
                exit();
            } else{
               echo'redire pas';
                header("location : /app/views/test.php");
            }
        }
    }


}