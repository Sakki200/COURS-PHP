<?php
error_reporting(E_ALL);
#Enregistrer les erreurs survenues sur un fichier de log
ini_set("log_errors", 1);
ini_set("error_log", "./FONDAMENTAUX/error.log");

//ENTIERS CLASSIQUES
$int = 1; //entier
$float = 2.3; // flotant
$vrai = true; //boolean
$faux = false; //boolean

echo nl2br("\$vrai :" . $vrai . PHP_EOL); //result = $vrai :1
echo nl2br("\$faux :" . $faux . PHP_EOL); //result = $faux :


//DONNÉES COMPOSÉES

#Arrays
$arr1 = [$int, $float];

#Objects
// $obj = new Animal();

#Functions
$displayName = function () {
    echo "je suis moi !";
};

//Récupération d'un type d'une donnée
#gettype()
echo nl2br(gettype($arr1) . PHP_EOL);
echo nl2br(gettype($displayName) . PHP_EOL);

#is_???
echo nl2br("is_int for \$int : " . is_int($int) . PHP_EOL);
echo nl2br("is_int for \$float : " . is_int($float) . PHP_EOL);
echo nl2br("bool for \$vrai : " . is_bool($vrai) . PHP_EOL);


//CONVERSION

#Conversion implicite (mauvaise pratique)
$n1 = 2;
$str1 = "10 unités";
echo nl2br($n1 + $str2 . PHP_EOL);

#Conversion explicite (bonne pratique)
$n2 = 6;
$str2 = "10";
echo nl2br($n2 + (int) $str2 . PHP_EOL);

#Utilisation de settype (bonne pratique)
$n3 = 6;
$str3 = "10";
settype($str3, "int");
echo nl2br($n3 + $str3 . PHP_EOL);

#??val()
$n4 = "20.55BC";
echo nl2br(floatval($n4 . PHP_EOL));
