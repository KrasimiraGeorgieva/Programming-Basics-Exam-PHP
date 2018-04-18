<?php

$numTable = intval(readline());
$lengthTable =floatval(readline()); // meter
$widthTable = floatval(readline()); //meter

$avanceTablecloths = 2 * 0.30;
$lengthExtension = ($lengthTable + $avanceTablecloths);
$widthExtension = ($widthTable + $avanceTablecloths);

// Общата площ на покривките 
$tableclothsArea = $numTable * $lengthExtension * $widthExtension;
 
// Общата площ на каретата  
$sideSquare = $lengthTable / 2;
//$squareArea = $numTable * ($sideSquare * $sideSquare);
$squareArea = $numTable * pow($sideSquare, 2);

$usdPrice = $tableclothsArea * 7 + $squareArea * 9;
$bgnPrice = $usdPrice * 1.85;

// Изход
printf("%.2f", $usdPrice);
echo " USD \n";
printf("%.2f", $bgnPrice);
echo " BGN";