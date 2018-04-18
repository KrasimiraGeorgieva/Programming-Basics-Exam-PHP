<?php

$money = floatval(readline());
$yearTo = floatval(readline());

$moneyFinal = $money;
$counter = 0;
for ($i = 1800; $i <= $yearTo; $i++){
    if ($i % 2 == 0){
        $moneyFinal = $moneyFinal - 12000;
        $counter += 12000;
    } elseif ($i % 2 == 1){
        $moneyFinal = $moneyFinal - 12000 - (50 * (($i + 18) - 1800));
        $counter += 12000 + (50 * (($i + 18) - 1800));
    }
}

$sum = abs($moneyFinal);

if ($money >= $counter) {
    printf("Yes! He will live a carefree life and will have %.2f dollars left.", $sum);
} else {
    printf("He will need %.2f dollars to survive.", $sum);
}