<?php

class MdpEdit{

    private $db;
  
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=meetic','massebtk','azerty');
    }

    public function modifmdp($password,$email){
      
        $query = $this->db->prepare("UPDATE user set password = :password where email = :email");
        $query->execute(array('password'=> password_hash($password, PASSWORD_DEFAULT),
                              'email' => $email));

        
        return $query->fetch(PDO::FETCH_ASSOC);

    }

    }



