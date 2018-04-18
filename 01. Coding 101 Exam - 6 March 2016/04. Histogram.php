<?php

$n = intval(readline());
$p1 = null;
$p2 = null;
$p3 = null;
$p4 = null;
$p5 = null;

for ($i = 1; $i <= $n; $i++) {
    $number = intval(readline());
    if ($number >= 1 && $number < 200) {
        $p1++;
    } elseif ($number >= 200 && $number <= 399) {
        $p2++;
    } elseif ($number >= 400 && $number <= 599) {
        $p3++;
    } elseif ($number >= 600 && $number <= 799) {
        $p4++;
    } elseif ($number >= 800) {
        $p5++;
    }
}
echo number_format(($p1 * 100 / $n), 2, '.', '').'%' . "\n";
echo number_format(($p2 * 100 / $n), 2, '.', '').'%' . "\n";
echo number_format(($p3 * 100 / $n), 2, '.', '').'%' . "\n";
echo number_format(($p4 * 100 / $n), 2, '.', '').'%' . "\n";
echo number_format(($p5 * 100 / $n), 2, '.', '').'%';