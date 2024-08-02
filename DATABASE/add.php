<?php
require_once './config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['user']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);


    try {

        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT;
        $connection = new PDO($dsn, DB_USER, DB_PASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SQL d'insertion
        $sql = 'INSERT INTO ' . DB_TABLE . ' (username, email, password) VALUES (:pseudo, :mail, :pwd) ';

        // Préparation de la requête
        $stmt = $connection->prepare($sql);

        // Liaison des parametres nommé à leurs valeurs réelles
        $stmt->bindParam(':pseudo', $username, PDO::PARAM_STR);
        $stmt->bindParam(':mail', $email, PDO::PARAM_STR);
        $stmt->bindParam(':pwd', $password, PDO::PARAM_STR);

        // Exécution de la requête
        if ($stmt->execute()) {

            echo 'Données insérées avec succès';
        } else {
            echo "Erreur survenue lors l'insertion de données : " . $stmt->errorInfo();
        }

        $connection = null;
    } catch (Exception $e) {
        echo  'Une erreur est survenue dans le fichier ' . $e->getFile();
        echo  ' à la ligne ' . $e->getLine() . "<br>";
        echo  'Message correspondant à votre erreur ' . $e->getMessage();
    }
}
