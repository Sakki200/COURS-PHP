<?php

# for
for ($i = 0; $i < 5; $i++) {
    echo $i;  // Code exécuté à chaque itération
}

# for imbriqué
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "Boucle externe : $i, Boucle interne : $j<br>";
    }
}

# while
$i = 9;
while ($i > 5) {
    echo $i; // Code exécuté à chaque itération
    $i--;
}

# do ... while 
$i = 9;
do {
    echo $i; // Code exécuté à chaque itération
    $i--;
} while ($i < 5);

#endwhile
$i = 10;
?>
<ul>
    <?php while ($i < 5) : ?>
        <li> <?php echo $i; ?> </li>
    <?php $i++;
    endwhile ?>
</ul>