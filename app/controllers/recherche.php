<?php
session_start();

include '../models/search.php';

class SearchController {
    private $searchModel;

    public function __construct() {
        $this->searchModel = new Search();
    }

    public function searchUser() {
        if (isset($_POST['genre_name'], $_POST['city'], $_POST['hobbies_name'])) {
            $genre_name = $_POST['genre_name'];
            $city = $_POST['city'];
            $hobbies_name = $_POST['hobbies_name'];

            $users = $this->searchModel->search($genre_name, $city, $hobbies_name);
            
            if ($users) {
                    var_dump($users);
                    // header("location: ../app/views/match.php");
                    // exit();
                }
            } else {
                echo "Aucun utilisateur trouvé avec ces critères.";
            }

        }}
