<?php

$priseVacantion = floatval(readline());
$puzzelCounts = intval(readline());
$dollCounts = intval(readline());
$tedybearCounts = intval(readline());
$minionCounts = intval(readline());
$truckCounts = intval(readline());

$money = floatval($puzzelCounts * 2.60) + ($dollCounts * 3) + ($tedybearCounts * 4.10) + ($minionCounts * 8.20) + ($truckCounts * 2);
$toyCounts = floatval($puzzelCounts + $dollCounts + $tedybearCounts + $minionCounts + $truckCounts);

totalMoney = 0.0;

if ($toyCounts >= 50) {
    $totalMoney = $money - (0.25 * $money);
} else {
    $totalMoney = $money;
}
 
$rent = floatval(0.1 * $totalMoney);
$profit = floatval($totalMoney - $rent);

if ($profit >= $priseVacantion) {
    $profit = ($profit - $priseVacantion);

    printf("Yes! " . "%.2f", $profit);
    echo " lv left.";
} else {
    $profit = floatval($priseVacantion - $profit);

	printf("Not enough money! " . "%.2f", $profit);
    echo " lv needed.";
}
