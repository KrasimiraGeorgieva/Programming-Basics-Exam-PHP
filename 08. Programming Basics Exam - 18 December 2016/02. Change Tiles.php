<?php

$money = doubleval(readline());
$flatW = doubleval(readline());
$flatL = doubleval(readline());
$sideTriangle = doubleval(readline());
$heightTriangle = doubleval(readline());
$pricePerTiles = doubleval(readline());
$workermanMoney = doubleval(readline());

$areaFlat = $flatW * $flatL;
$areaTile = $sideTriangle * $heightTriangle/2;
$neededTiles = ceil($areaFlat / $areaTile) + 5;
$totalMoney = $neededTiles * $pricePerTiles + $workermanMoney;

if ($totalMoney <= $money){
    printf("%.2f lv left.", $money - $totalMoney);
}
else{
    printf("You'll need %.2f lv more.", $totalMoney - $money);
}