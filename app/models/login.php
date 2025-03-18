<?php

class Login{

    private $db;
  
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=meetic','massebtk','azerty');
    }

    public function connect($email){
        $query = $this->db->prepare("SELECT * from user WHERE email = :email AND is_actif = 0");//pas sur 
        $query->execute(['email' => $email]);

        return $query->fetch(PDO::FETCH_ASSOC);

    }

    }



