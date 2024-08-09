<?php

session_start();

require_once('./config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['user']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);


    try {

        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT;
        $connection = new PDO($dsn, DB_USER, DB_PASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT * FROM' . DB_TABLE . 'WHERE email = ?';

        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':pseudo', $username, PDO::PARAM_STR);
        $stmt->bindParam(':mail', $email, PDO::PARAM_STR);
        $stmt->bindParam(':pwd', $password, PDO::PARAM_STR);

        $stmt->execute();
        $result = $connection->query($sql);

        if ($result->rowCount() > 0) {
          $result = $stmt->fetch(PDO::FETCH_OBJ);
            // Vérification du mot de passe
            if (password_verify($password, $result->password)) {
                // Initialiser les variables de session si le mot de passe est correct
                $_SESSION['username'] = $result->username;
                echo "Connexion réussie, bienvenue " . $_SESSION['username']; 
            } else {
                echo "Mot de passe incorrect";
            }
        } else {
            echo "Aucun résultat trouvé";
        }

        $result->closeCursor();

        $connection = null;
    } catch (Exception $e) {
        echo  'Une erreur est survenue dans le fichier ' . $e->getFile();
        echo  ' à la ligne ' . $e->getLine() . "<br>";
        echo  'Message correspondant à votre erreur ' . $e->getMessage();
    }
}
