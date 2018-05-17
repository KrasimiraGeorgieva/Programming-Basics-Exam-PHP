<?php
$break = intval(readline());
$packPrice = floatval(readline());
$adventurePrice = floatval(readline());
$coffeePrice = floatval(readline());

$leftTimeForRest = $break - 15;

$spendMoneyForPacks = 3 * $packPrice;
$spendMoneyForAdventure = 2 * $adventurePrice;
$totalSpendMoney = $spendMoneyForPacks + $spendMoneyForAdventure + $coffeePrice;

printf("%0.2f", $totalSpendMoney);
echo PHP_EOL;
echo $leftTimeForRest;