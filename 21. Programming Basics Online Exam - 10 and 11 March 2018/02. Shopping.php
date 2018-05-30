<?php
$budget = floatval(readline());
$chocolatesCount = intval(readline());
$milkInLiters = floatval(readline());

$moneyForChocolates = $chocolatesCount * 0.65;
$moneyForMilk = $milkInLiters * 2.70;
$moneyForMandarins = floor($chocolatesCount * 0.65) * 0.20;

$moneySpend = $moneyForChocolates + $moneyForMilk + $moneyForMandarins;

if($budget >= $moneySpend){
    printf("You got this, %.2f money left!", $budget - $moneySpend);
} else {
    printf("Not enough money, you need %.2f more!", $moneySpend - $budget);
}
