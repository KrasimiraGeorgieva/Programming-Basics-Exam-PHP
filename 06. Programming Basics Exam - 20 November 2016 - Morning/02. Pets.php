<?php

$days = intval(readline());
$foodKg = intval(readline());
$dogFoodKg = doubleval(readline());
$dogFoodKg *= $days;
$catFoodKg = doubleval(readline());
$catFoodKg *= $days;
$turtleFoodKg = doubleval(readline()); // food in grams
$turtleFoodKg = $turtleFoodKg / 1000 * $days;

$totalFood = $dogFoodKg + $catFoodKg + $turtleFoodKg;

if ($totalFood <= $foodKg){
    printf("%.2f kilos of food left.", floor($foodKg-$totalFood));
}else{
    printf("%.2f more kilos of food are needed.", ceil($totalFood-$foodKg));
}