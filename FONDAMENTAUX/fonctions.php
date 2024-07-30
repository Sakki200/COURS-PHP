<?php

declare(strict_types=1);

$addition = function ($a, $b) {
    $somme = $a + $b;
    return $somme;
};

echo nl2br($addition(3, 5) . PHP_EOL);

//TYPAGE DES PARAMETRES (PHP 8)
function customerData(string $prenom, string $civilite, int $age, bool|int $dispo): array
{
    $arr = [
        "prenom" => $prenom,
        'civilite' => $civilite,
        'age' => $age,
        'disponibilite' => $dispo
    ];
    return $arr;
}

$client = customerData("Damien", "Mme", 24, true);
nl2br(print_r($client) . PHP_EOL);

//ARGUMENTS NOMMES (PHP 8)
function userInfos(string $prenom, string $civilite, int $age, bool|int $dispo): array
{
    is_string($civilite) ? $civilite : 'Monsieur/Madame';
    is_string($prenom) ? $prenom : 'Visiteur';
    is_int($age) ? $age : 'Unknown';
    is_int($dispo) | is_bool($dispo) ? $dispo : "false";

    $arr = [
        "prenom" => $prenom,
        'civilite' => $civilite,
        'age' => $age,
        'disponibilite' => $dispo
    ];
    return $arr;
}

$userInfos = userInfos(age: 24, dispo: true, civilite: "Mr", prenom: "Bruno");
print_r($userInfos);
