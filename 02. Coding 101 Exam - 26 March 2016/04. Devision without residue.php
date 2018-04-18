<?php

$n = floatval(readline());

$p1 = null;
$p2 = null;
$p3 = null;

for ($i = 1; $i <= $n; $i++) {
    $countNum = floatval(readline());
    if ($countNum % 2 == 0) {
        $p1++;
    }
    if ($countNum % 3 == 0) {
        $p2++;
    }
    if ($countNum % 4 == 0) {
        $p3++;
    }
}

echo number_format(($p1 / $n * 100), 2, '.', '') . '%' . "\n";
echo number_format(($p2 / $n * 100), 2, '.', '') . '%' . "\n";
echo number_format(($p3 / $n * 100), 2, '.', '') . '%';