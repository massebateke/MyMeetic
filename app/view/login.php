<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles.css" rel="stylesheet" type="text/css">
    <title>Connexion</title>
    <style>
            body{
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
    <input type="email" name="email" id="email" required><br>

    <label for="password">Mot de passe:</label>
    <input type="password" name="password" id="password" required><br>

    <button type="submit">Valider</button>
</form>
<a href="./register.php">Pas inscrit ? S'inscrire</a>

</body>
</html>