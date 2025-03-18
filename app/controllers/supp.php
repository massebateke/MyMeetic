<?php

session_start();

include '../models/supp.php';

class DeleteController{

    private $deleteModel;

    public function __construct() {
        $this->deleteModel = new Delete();
    }

    public function deleteAccount() {
        if (!isset($_SESSION['email'])) {
            echo "Utilisateur non connecté.";
            return;
        }

        $email = $_SESSION['email'];
        var_dump($email);
        $ok = $this->deleteModel->delete($email);
        
        if (!$ok) {
            var_dump($ok);
            echo "Erreur lors de la suppression du compte.";
            print_r($_SESSION);
        } else if($ok) {
                session_destroy();
                header("location: ../../index.php");
                exit();
        }


}}