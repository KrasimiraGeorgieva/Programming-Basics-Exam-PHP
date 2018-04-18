<?php

$n1 = intval(readline());
$n2 = intval(readline());
$brKombo = intval(readline());

$count = 0;
for ($i = $n1; $i <= $n2; $i++) {
    for ($i1 = $n1; $i1 <= $n2; $i1++) {
        if ($count == $brKombo) {
            break;
        }

        printf("<%d-%d>", $i, $i1);
        $count++;
    }
}
echo "\n";