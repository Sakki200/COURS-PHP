<?php

$value1 = 2;
$value2 = 50;

//If Elseif Else
if ($value1 < $value2) {
    echo nl2br("Value 1 is less than Value 2" . PHP_EOL);
} elseif ($value1 > $value2) {
    echo nl2br("Value 1 is greater than Value 2" . PHP_EOL);
} else {
    echo nl2br("Values are equal" . PHP_EOL);
};

//Ternaire
echo nl2br(($value1 > 100) ? "Réussite !" : "Echec !" . PHP_EOL);

//Switch
$langue = "fr";
switch ($langue) {
    case "de":
        echo nl2br("Hallo" . PHP_EOL);
        break;
    case "en":
        echo nl2br("Hello" . PHP_EOL);
        break;
    case "fr":
        echo nl2br("Bonjour" . PHP_EOL);
        break;
    default:
        echo nl2br("Bienvenue" . PHP_EOL);
        break;
};

//MATCH depuis PHP 8 / mieux que switch en PHP

echo nl2br(match ($langue) {
    "de" => "Hallo",
    "en" => "Hello",
    "fr" => "Bonjour",
    default => "Bienvenue",
}
    . PHP_EOL);


$produit1 = 15;
$produit2 = 18;
$identique = "Les 2 produits sont au même prix.";

#Methode classique
if ($produit1 < $produit2) {
    echo nl2br("Le produit 2 est plus cher que le 1" . PHP_EOL);
} elseif ($produit1 > $produit2) {
    echo nl2br("Le produit 1 est plus cher que le 2" . PHP_EOL);
} else {
    echo nl2br($identique . PHP_EOL);
};

#Methode avec spaceship operator
$spaceship = $produit1 <=> $produit2;
echo nl2br(match ($spaceship) {
    1 => "Le produit 1 est plus cher que le 2",
    0  => $identique,
    -1  => "Le produit 2 est plus cher que le 1",
}
    . PHP_EOL);

#Operateur de fusion null
$userName = null;
$defaultUserName = "Visiteur";
$string = $userName ?? $defaultUserName; //if userName = null alors defaultUserName

#Affectation de l'opérateur de fusion null ??
$civilite = null;
$civilite ??= "M.";
echo nl2br($civilite . PHP_EOL);
