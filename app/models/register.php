<?php

class Register{

    private $db;
  
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=meetic','massebtk','azerty');
    }
 
    public function subscribe($email,$firstname,$lastname,$birthdate,$genre_name,$hobbies_name,$password,$city) {
        $query = $this->db->prepare("INSERT INTO user (email,firstname,lastname,birthdate,genre_name,hobbies_name,password,city) 
        VALUES (:email,:firstname, :lastname,:birthdate,:genre_name,:hobbies_name,:password,:city)");
        $query->execute(array(
            'email' => $email,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'birthdate' => $birthdate,
            'genre_name' => $genre_name,
            'hobbies_name'=>$hobbies_name,
            'password' => $password,
            'city' => $city
        ));
        $selectQuery = $this->db->prepare("SELECT * FROM user WHERE email = :email");
        $selectQuery->execute(['email' => $email]);
        return $selectQuery->fetch(PDO::FETCH_ASSOC);
    }

}