<?php

// Appel du fichier de configuration
require_once './config.php';

// Tentative d'excution du code
try {

    // DSN ! Data Source Name
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT;

    // Connection à la base de données
    $connection = new PDO($dsn, DB_USER, DB_PASSWORD);

    // Définir le mode d'erreur PDO sur Exception
    // Comment PDO doit gérer les erreurs
    // En cas d'erreur PDO va lancer des Exceptions
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création de la requête SQL : récupérer toutes les données contenues dans la table "users"
    $sql = 'SELECT * FROM' . DB_TABLE;

    // Récupération d'un jeu de résultat via query() de PDO
    $result = $connection->query($sql);

    // Résultat ?
    if ($result->rowCount() > 0) {
        // Traitement du jeu de résultat

    } else {
        echo "Aucun résultat trouvé";
    }

    // Le jeu de résultat occupe de la mémoire qu'il faut libérer
    $result->closeCursor();

    // Fermeture de la connexion
    $connection = null;
}
// Exceptions
catch (Exception $e) {
    echo  'Une erreur est survenue dans le fichier ' . $e->getFile();
    echo  ' à la ligne ' . $e->getLine() . "<br>";
    echo  'Message correspondant à votre erreur ' . $e->getMessage();
}
