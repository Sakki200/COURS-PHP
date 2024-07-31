<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIRE_COOKIE</title>
    <link rel="stylesheet" href="./css/cookie.css">
</head>

<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

        $nom_cookie = $_POST['nom_cookie'];

        if (isset($_COOKIE[$nom_cookie])) {

            $value = $_COOKIE[$nom_cookie];
            echo "<p>Le cookie '$nom_cookie' existe.</p>";
        } else {
            echo "<p>Le cookie '$nom_cookie' existe pas.</p>";
        }
        // Afficher un message de confirmation
    } ?>
    <h1>Lire un cookie en PHP</h1>
    <form method="POST">
        <label for="nom">Nom du cookie :</label>
        <input type="text" name="nom_cookie" id="nom" value="">
        <input type="submit" name="submit" value="Lire le cookie">
    </form>
</body>

</html>
</body>