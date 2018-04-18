<?php

$pokemonsPlayer1 = intval(readline());
$pokemonsPlayer2 = intval(readline());
$numBattles = intval(readline());

$count = 0;
for ($i = 1; $i <= $pokemonsPlayer1; $i++) {
    for ($y = 1; $y <= $pokemonsPlayer2; $y++) {

        if ($count == $numBattles) {
            break;
        }
        printf("(%d <-> %d) ", $i, $y);
        $count++;
    }
}
echo "\n";
