<?php

$sideA = floatval(readline());
$heightB = floatval(readline());

$leftRightSides = $sideA * ($sideA / 2) * 2;
$backSide = (($sideA / 2) * ($sideA / 2)) + (($sideA / 2) * ($heightB - ($sideA / 2)) / 2);
$door = ($sideA / 5) * ($sideA / 5);
$frontSide = $backSide - $door;
$totalSides = $leftRightSides + $backSide + $frontSide;

$greenPaint = $totalSides / 3;

$roof = $sideA * ($sideA / 2) * 2;
$redPaint = $roof / 5;

printf("%.2f\n", $greenPaint);
printf("%.2f", $redPaint);