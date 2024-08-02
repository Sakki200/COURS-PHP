-- Creation de la base de donnée
CREATE DATABASE IF NOT EXISTS logsystem;
-- Utilisation de la base de données
USE logsystem;
-- Création de la table users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
) ENGINE = innoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- Insérer des valeurs dans la table "users"
INSERT INTO
    users (id, username, email, password)
VALUES (
        'benoit',
        'benoit@gmail.com',
        '1234'
    ),
    (
        'bob',
        'bob@gmail.com',
        '4321'
    ),
    (
        'charlie',
        'charlie@gmail.com',
        'abc'
    );