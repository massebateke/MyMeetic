<?php
session_start(); 
include '../models/compte.php';

class AccountController{
     
    public function account() {
        if (!isset($_SESSION['email'])) {
            echo "Utilisateur non connecté.";
            return;
        }
}}



