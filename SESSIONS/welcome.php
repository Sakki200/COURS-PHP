<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><a href="logout.php">DECONNEXION</a></p>
    <p>Utilisateur : <?php echo $_SESSION['user'] ?></p>
    <p>Mot de passe : <?php echo $_SESSION['password'] ?></p>
</body>

</html>