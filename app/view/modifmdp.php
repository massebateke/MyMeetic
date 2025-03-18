<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../../public/root.php" method="POST" id="form">
            <input type="text" name="modif_password">
            <button type="submit" name="edit_mdp">Modifier le mot de passe</button>

        </form>
</body>
</html>