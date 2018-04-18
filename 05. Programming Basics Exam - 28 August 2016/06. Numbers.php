<?php

$n = intval(readline());
$first = floor($n / 100);
$secound = ($n / 10) % 10;
$third = $n % 10;

$row = $first + $secound;
$coloum = $first + $third;

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $coloum; $j++) {
        if ($n % 5 == 0) {
            $n = $n - $first;
        } else if ($n % 3 == 0) {
            $n = $n - $secound;
        } else {
            $n = $n + $third;
        }
        printf("%d ", $n);
    }
    echo "\n";
}