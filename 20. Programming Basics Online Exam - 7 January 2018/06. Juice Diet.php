<?php

$raspberries = intval(readline());
$strawberries = intval(readline());
$cherries = intval(readline());
$juiceCapacity = intval(readline());

$result = '';
$maxAlcohol = -1;

for ($i = $cherries; $i >= 0; $i--) {
    for ($j = $strawberries; $j >= 0; $j--) {
        for ($k = $raspberries; $k >= 0; $k--) {
            $currJuice = $k * 4.5 + $j * 7.5 + $i * 15;
            if ($currJuice <= $juiceCapacity && $maxAlcohol < $currJuice) {
                $maxAlcohol = $currJuice;
                $result = "$k Raspberries, $j Strawberries, $i Cherries. Juice: $maxAlcohol ml.";
            }
        }
    }
}

echo $result;