<?php

$daysCampaign = intval(readline());
$pastryCook = intval(readline());
$cakes = intval(readline());
$waffles = intval(readline());
$pancakes = intval(readline());

$cakesSumPerPastryCook = $cakes * 45; 
$wafflesSumPerPastryCook = $waffles * 5.80; 
$pancakesSumPerPastryCook = $pancakes * 3.20; 

$totalSumPerDay = ($cakesSumPerPastryCook + $wafflesSumPerPastryCook 
                   + $pancakesSumPerPastryCook) * $pastryCook;

$totalCharitySum = $totalSumPerDay * $daysCampaign;
$costs = $totalCharitySum * 0.125;

$netSum = $totalCharitySum - $costs;

printf("%.2f", $netSum);