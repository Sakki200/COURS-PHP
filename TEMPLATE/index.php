<?php
require("./inc/header.php");

#isset() détermine si un variable existe et si elle n'est pas null
$page = isset($_GET['page']) ? $_GET['page'] : "home";
//Alternative avec l'opérateur de fusion null (je préfère elle)
$page = $_GET["pg"] ?? "home";
echo $page;

require("./inc/footer.php");
