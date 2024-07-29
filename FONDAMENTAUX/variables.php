<?php

//VARIABLES
$animal = "chien";
$chien   = "labrador";

echo nl2br("le $chien est un $animal" . PHP_EOL);
echo nl2br("$animal . $chien" . PHP_EOL);

//CONSTANTES
define("COULEUR", "rouge");
echo nl2br("ma couleur préféré est le " . COULEUR . PHP_EOL);

//CONSTANTES MAGIQUES
echo nl2br("__LINE__ : " . __LINE__ . PHP_EOL);
echo nl2br("__DIR__ : " . __DIR__ . PHP_EOL);
echo nl2br("__FILE__ : " . __FILE__ . PHP_EOL);


//VALEURS ET RÉFÉRANCES
$a = 10;
$b = $a;
$c = &$a; //Affectation par référence

$a = 20;
echo nl2br("a = " . $a . PHP_EOL);
echo nl2br("b = " . $b . PHP_EOL); //A garder la valeur initial
echo nl2br("c = " . $c . PHP_EOL); //A pris la valeur changer de a
