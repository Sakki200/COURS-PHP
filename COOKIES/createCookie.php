<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREER_COOKIE</title>
    <link rel="stylesheet" href="./css/cookie.css">
</head>

<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

        $name = $_POST['nom'];
        $value = $_POST['valeur'];
        $duree = $_POST['duree'];

        setcookie($name, $value, time() + $duree * 60, "/", "", true, true);

        // Afficher un message de confirmation
        echo "<p>Le cookie '$name' avec la valeur '$value' a été créé pour $duree minutes.</p>";
    } ?>
    <h1>Créer un cookie en PHP</h1>
    <form method="POST">
        <label for="nom">Nom du cookie :</label>
        <input type="text" name="nom" id="nom" required>

        <label for="valeur">Valeur du cookie :</label>
        <input type="text" name="valeur" id="valeur" required>

        <label for="duree">Durée de vie du cookie (en minute) :</label>
        <input type="number" name="duree" id="duree" required>

        <input type="submit" name="submit" value="Créer le cookie">
    </form>
</body>

</html>