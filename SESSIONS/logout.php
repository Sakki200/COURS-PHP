<?php
session_start();

//Définir un message de déconnexion réussie
$_SESSION['logout'] = "Déconnexion réussie !";

//Redirection vers la page d'accueil
header("Location: login.php?state=logout");
