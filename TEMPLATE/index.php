<?php
//inclure le fichier de configuration du projet
require_once("./config/config.php");

require_once("./inc/header.php");

#isset() détermine si un variable existe et si elle n'est pas null
$page = isset($_GET['page']) ? $_GET['page'] : "home";
//Alternative avec l'opérateur de fusion null (je préfère elle)
$page = $_GET["pg"] ?? "home";

if (!file_exists("./pages/" . $page . ".php")) {
    header("Location: index.php");
    exit();
};
echo $page;
require_once("./pages/" . $page . ".php");

require_once("./inc/footer.php");
