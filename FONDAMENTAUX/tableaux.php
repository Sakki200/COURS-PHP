Preview Document
"tableaux.php"
<?php

// tableau indexé
$fruits = ['🍎', '🥝', '🍇'];
$fruitsLength = count($fruits);
echo $fruits[1] . PHP_EOL; // 🥝

// tableau associatif
$animals = ['f' => '🐟', 's' => '🐍', 'l' => '🦁'];
echo $animals['l'] . PHP_EOL; // 🦁

# Parcours du tableau associatif

foreach ($animals as $key => $value) {
    echo $value . PHP_EOL;
}


// tableau multidimensionnel
$clients = [
    ['prenom' => 'Alice', 'age' => 30, 'dispo' => true],
    ['prenom' => 'Bob', 'age' => 25, 'dispo' => false],
    ['prenom' => 'Charlie', 'age' => 42, 'dispo' => false],
];

# Accès aux données de Bob
$bob = $clients[1];

// var_dump() pour afficher la structure du tableau mais de manière générale var_dump() est une fonction de debogage
var_dump($bob);
print_r($bob);


//PHP + HTML
?>
<table>
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Age</th>
            <th>Disponibilité</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($clients as $value) {
        ?> <tr>
                ?><td><?php echo htmlspecialchars($value["prenom"]) ?></td>;
                <td><?php echo htmlspecialchars($value["age"]) ?></td>
                <td><?php echo $value["dispo"] ? "✅" : "❌";
                    ?></td>
            </tr><?php
                }; ?>
    </tbody>
</table>

<?php
//TABLEAUX METHODES
#Array_map()
$numbers = [1, 2, 3, 4, 5];
function double($n)
{
    return ($n * 2);
}
$numbersDouble = array_map('double', $numbers);
print_r($numbersDouble);

#Array_filter()
function pair($n)
{
    return ($n % 2 == 0);
}
print_r(array_filter($numbers, "pair"));

#Array_reduce()
function somme($accumulateur, $n)
{
    $accumulateur += $n;
    return $accumulateur;
};

var_dump(array_reduce($numbers, "somme", 0)); //pour 0 pas obligé de le mettre
var_dump(array_reduce($numbers, "somme", 100));
