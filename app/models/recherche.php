<?php

class Search {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=meetic', 'massebtk', 'azerty');
    }

    public function search($genre_name, $city, $hobbies_name) {

        $query = $this->db->prepare("SELECT * FROM user WHERE genre_name = :genre_name AND city = :city AND hobbies_name LIKE :hobbies_name");
        $query->execute([
            'genre_name' => $genre_name,
            'city' => $city,
            'hobbies_name' => $hobbies_name
        ]);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
