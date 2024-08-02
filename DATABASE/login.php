<?php
// déclarer IMPERATIVEMENT session_start() en tout début de script ET AVANT TOUTE SORTIE (echo) OU REDIRECTION (header('Location')) envisagées.
session_start();

//Si l'appel de la page "login.php" provient de "logout.php"
if (isset($_SESSION['logout'])) {

    $logout_message = $_SESSION['logout'];

    //Detruire les variables de sessions (session toujours existante)
    session_unset();

    //Destruction de la session
    session_destroy();
};




if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // Récupérer les données utilisateurs sans des variables de sessions
    // $_SESSION est un tableau associatif
    $_SESSION['user'] = htmlspecialchars($_POST['user']);
    $_SESSION['password'] = htmlspecialchars($_POST['password']);
    //Redirection vers la page welcome.php
    header('Location: welcome.php');
    exit(); // pour éviter que le reste du script se soit exécuté après la redirection
} ?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM_POST</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        form p {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p.message {
            font-size: 1.2em;
            color: #333;
        }
    </style>
</head>

<body>
    <form action="welcome.php" method="POST">

        <?php
        $logout_message = $logout_message ??= "";
        echo "<p>" . $logout_message . "<p>";
        ?>

        <label for="user">utilisateur:</label>
        <input type="text" id="user" name="user">
        </p>
        <p>
            <label for="password">mot de passe:</label>
            <input type="password" id="password" name="password">
        </p>
        <input type="hidden" name='hidden' value="<?php echo date('d/m/Y H:i:s'); ?>">
        <input type="submit" name="submit" value="Envoyer">
        <p>
            Pas encpre inscrit ? : <a href="register.php"> Inscrivez-vous</a>
        </p>
    </form>
</body>