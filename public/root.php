<?php
require_once("../app/controllers/register.php");
require_once("../app/models/register.php");
require_once("../app/controllers/login.php");
require_once ("../app/models/login.php");
require_once("../app/controllers/supp.php");
require_once ("../app/models/supp.php");
require_once("../app/controllers/modifmdp.php");
require_once ("../app/models/modifmdp.php");
require_once("../app/controllers/recherche.php");
require_once ("../app/models/recherche.php");



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'],$_POST['firstname'],$_POST['lastname'],$_POST['birthdate'],$_POST['password'],$_POST['genre_name'],$_POST['hobbies_name'],$_POST['city'])){
    $controller = new RegisterController();
    $controller->register($_POST['email'],$_POST['firstname'],$_POST['lastname'],$_POST['birthdate'],$_POST['password'],$_POST['genre_name'],$_POST['hobbies_name'],$_POST['city']);
    require('../app/views/recherche.php');

}
else if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'],$_POST['password'])){
    $controller2 = new LoginController();
    $controller2->registerLogin($_POST['email']);
    require('../app/views/recherche.php');
}
else if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_account"])) {
    $controller = new DeleteController();
    $controller->deleteAccount();
    require('../index.php');
}
else if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["modif_password"])) {
    $controller = new MdpEditController();
    $controller->editMdp();
    require('../app/views/compte.php');
}
else if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['genre_name'], $_POST['city'], $_POST['hobbies_name'])) {
    $controller = new SearchController();
    $controller->searchUser();
    require('../app/views/match.php');
}



