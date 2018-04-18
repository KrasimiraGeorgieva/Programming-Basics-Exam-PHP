<?php

$age = intval(readline());

$priceWashingMashine = floatval(readline());
$toyPrice = intval(readline());

$money = null;
$toys = null;
$count = null;
for ($i = 1; $i <= $age; $i++) {
    if ($i % 2 == 0) {
        $money += $i * 10 / 2;
        $money -= 1;
        $count++;;
    } else {
        $toys++;
    }
}

$toys *= $toyPrice;
$allMoney = $money + $toys;

if ($allMoney >= $priceWashingMashine) {
    echo "Yes! " . number_format(abs($allMoney - $priceWashingMashine), 2, '.', '');
} else {
    echo "No! " . number_format(abs($allMoney - $priceWashingMashine), 2, '.', '');
}