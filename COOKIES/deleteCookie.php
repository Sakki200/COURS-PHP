<!DOCTYPE html>
<html lang="en">
 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SUPPRIMER_COOKIE</title>
        <link rel="stylesheet" href="./css/cookie.css">
    </head>
 
    <body>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
 
            // Récupérer le nom
            $nomCookie = $_POST['nom_cookie'];
 
            // Si le cookie existe 
            if (isset($_COOKIE[$nomCookie])) {
 
                // Définir la date d'expiration dans le passé pour supprimer le cookie
                setcookie($nomCookie, '', time() - 3600, "/");
 
                // Supprimer le cookie du tableau $_COOKIE
                unset($_COOKIE[$nomCookie]);
 
                echo "<p>La cookie a été supprimé avec succès ! </p>";
            } else
            // cookie inexistant
            {
                echo "<p>Le cookie n'existe pas.</p>";
            }
        }
        ?>
        <h1>Supprimer un cookie en PHP</h1>
        <form method="post">
            <label for="nom">Nom du cookie :</label>
            <input type="text" name="nom_cookie" id="nom" value="">
            <input type="submit" name="submit" value="Supprimer le cookie">
        </form>
    </body>
 
</html>