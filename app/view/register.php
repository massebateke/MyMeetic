<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles.css" rel="stylesheet" type="text/css">
    <title>Inscription</title>
    <style>
        body {
        background-color: purple;
        }
        form{
            display: block;
            text-align: center;
            padding: 9em;
            margin-bottom: 4em;
        }
        input{
            background-color: rgba(255, 213, 85, 0.896);
            margin-bottom: 2em;
            width: 15em;
            border-radius: 0.2em;
            padding: 0.5em;
        }
        a{
            border: 1px solid black;
            padding: 0.5em;
            text-decoration: none;
            margin-left: 45%;
            background-color: rgba(255, 213, 85, 0.896);
        }
  
    </style>
</head>
<body>
    <form action="../../public/root.php" method="POST" id="form">

        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>

        <label for="firstname">Prenom</label>
        <input type="text" name="firstname" id="firstname"><br>

        <label for="lastname">Nom</label>
        <input type="text" name="lastname" id="lastname"><br>

        <label for="birthdate">Date de naissance</label>
        <input type="date" name="birthdate" id="birthdate"><br>
        
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password"><br>

        <label for="genre_name">Genre</label>
        <select name="genre_name" id = "genre_name" required>
            <option value="">Choose</option>
            <option value="femme">Femme</option>
            <option value="homme">Homme</option>
            <option value="autre">Autre</option>
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

        <label for="city">Ville</label>
        <select name="city" id="city" required>
            <option value="">Choose</option>
            <option value="paris">Paris</option>
            <option value="lyon">Lyon</option>
            <option value="marseille">Marseille</option>
        </select>
        <button type="submit">Valider</button>
    </form>
        <a href="../../app/views/login.php">Déja inscrit ? Se connecter</a>
</body>
</html>