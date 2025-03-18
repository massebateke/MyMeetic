<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte</title>
    <style>
            body{
            background-color: purple;
            }
            p{
                font-size: 0.5em;
            }
            .container{
                padding: 3em;
                /* border: 1px solid black;
                border-radius: 2em; */
            }
            
        </style>
</head>
<body>
<h1>
    <div class="container">
        <p>Prenom:<?php echo $_SESSION['firstname']; ?></p>
        <p>Nom:<?php echo $_SESSION['lastname']; ?></p>
        <p>Date de naissance:<?php echo $_SESSION['birthdate']; ?></p>
        <p>Ville:<?php echo $_SESSION['city']; ?></p>
        <p>Genre:<?php echo $_SESSION['genre_name']; ?></p>
        <p>Email:<?php echo $_SESSION['email']; ?></p>
        <p>Centre d'interêt:<?php echo $_SESSION['hobbies_name']; ?></p>
        <p>Mot de passe:<?php echo $_SESSION['password']; ?></p>
    </div>
    <a href="./modifmdp.php">Modifier votre mot de passe</a>
    <a href="./supp.php">Supprimer votre compte</a>


</body>
</html>