<?php
 
$distance = intval(readline());
$gasPerKm = intval(readline());
$pricePerL = doubleval(readline());
$money = doubleval(readline());

$carExp = ($distance * $gasPerKm )/ 100;
$totalExp = $carExp * $pricePerL;

if($money >= $totalExp){
    $x = abs($money - $totalExp);
    printf("You can take a trip. %.2f money left.", $x);
}else{
    $y = $money / 5;
    printf("Sorry, you cannot take a trip. Each will receive %.2f money.", $y);
}