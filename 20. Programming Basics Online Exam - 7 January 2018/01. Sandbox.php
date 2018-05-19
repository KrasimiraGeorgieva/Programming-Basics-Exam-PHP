<?php

$a = floatval(readline());
$b = floatval(readline());
$priceSand = floatval(readline());
$priceWood = floatval(readline());

$area = $a * $b;
$areaSandBox = ($a - (0.2 + 0.2)) * ($b - (0.2 + 0.2));
$areaBurdur = $area - $areaSandBox;
$neededSand = ceil($areaSandBox * 20);
$neededWood = ceil($areaBurdur / (2.2 * 0.2));

$moneyForSand = $neededSand * $priceSand;

$moneyForWood = $neededWood * $priceWood;
$totalMoney = ($moneyForSand + $moneyForWood);
printf("%.2f", $totalMoney);