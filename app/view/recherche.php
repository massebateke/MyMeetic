<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de recherche</title>
</head>
<body>
    <form action="../../public/root.php" method="POST" id="form">
        <a href="../../app/views/compte.php">mon compte </a>
    </form>

    <form action="../../public/root.php" method="POST" id="form">
        <label for="genre_name">Genre</label>
        <br>
            <select name="genre_name" id = "genre_name" required>
                <option value="">Choose</option>
                <option value="femme">Femme</option>
                <option value="homme">Homme</option>
                <option value="autre">Autre</option>
            </select>
        <br>
        <label for="city">Ville</label>
        <br>
        <select name="city" id="city" required>
            <option value="">Choose</option>
            <option value="paris">Paris</option>
            <option value="lyon">Lyon</option>
            <option value="marseille">Marseille</option>
        </select>
        <label for="hobbies_name">Hobbies</label>
        <select name="hobbies_name" id = "hobbies_name" required>
            <option value="">Choose</option>
            <option value="J'aime les mangas , j'aime aussi la dance">Manga</option>
            <option value="J'aime la dance , j'aime aussi la cuisine">Dance</option>
            <option value="J'aime la dance , j'aime aussi le skateboard">Skateboard</option>
            <option value="J'aime les mangas , j'aime aussi les licornes">Licorne</option>
            <option value="J'aime la cuisine , j'aime aussi les licornes">Cuisine</option>
        </select>
        <input type="submit" value="valide">
    </form>
   


</body>
</html>