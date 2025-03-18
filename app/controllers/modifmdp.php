<?php

session_start();

include '../models/modifmdp.php';

class MdpEditController{
    private $mdpEditModel;

    public function __construct() {
        $this->mdpEditModel = new MdpEdit();
    }

    public function editMdp() {
        if(!isset($_POST['edit_mdp']) || empty($_POST['modif_password'])){
            echo 'champs vide ';
        }
        else{
            $password = $_POST['modif_password'];
            $email = $_SESSION['email'];
            $result = $this->mdpEditModel->modifmdp($password,$email);

            if ($result) {
                header("location: /app/views/compte.php"); 
                exit();
            } else {
                echo "Erreur lors de la modification.";
            }
        }

}}
