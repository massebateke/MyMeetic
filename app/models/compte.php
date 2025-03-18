<?php

class Account{

    private $db;
  
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=meetic','massebtk','azerty');
    }

    public function showUser($email){
        $query = $this->db->prepare(" SELECT * from user WHERE email = :email");//pas sur 
        $query->execute(['email' => $email]);

        return $query->fetch(PDO::FETCH_ASSOC);

    }

    }


    