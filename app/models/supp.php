<?php

class Delete{

    private $db;
  
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=meetic','massebtk','azerty');
    }

    public function delete($email){
        $query = $this->db->prepare("UPDATE user SET is_actif = 1 WHERE email = :email");//pas sur 
        return $query->execute(['email' => $email]);
    }

    }
