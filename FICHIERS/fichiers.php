<?php

// On va récupérer le chemin absolu du dosseir dans lequel se trouve le fichier "data.txt"
define('DATA', __DIR__ . '/data.txt');
echo DATA . PHP_EOL;

// Chemin qui mène au fichier
$file_path = DATA;

// ouverture du fichier en écriture et en ajout
// le mode 'a' ajoute des données  à la suite des donnéées déjà existantes dans le fichier
$file = fopen($file_path, 'a');

// Vérouillage de l'accès au fichier pendant son utilisation en écriture pour éviter les accès concurentiels
// recours au drapeau LOCK_EX = vérouillage EXclusif en écriture 
flock($file, LOCK_EX);

// écriture des données dans le fichier
$text = "Bonjour\n";
fwrite($file, $text);
$text = "Bonsoir\n";
fwrite($file, $text);

// Déverouillage de l'accès au fichier
flock($file, LOCK_UN);

// fermeture du fichier
fclose($file);
