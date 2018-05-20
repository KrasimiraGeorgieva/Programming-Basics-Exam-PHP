<?php

$compoteJar = intval(readline()) + 1;
$jamJar = intval(readline()) + 1;
//$compoteJar = intval(readline());
//$jamJar = intval(readline());

$cherriesForCompote = ($compoteJar * 0.300) + ($compoteJar * 0.300)* 0.05;
$cherriesForJam = ($jamJar * 0.650) + ($jamJar * 0.650) * 0.10;
//$cherriesForCompote = ($compoteJar + 1) * 0.300 * 1.05;
//$cherriesForJam = ($jamJar + 1) * 0.650 * 1.10;

$totalCherries = $cherriesForCompote + $cherriesForJam;
$totalMoney = $totalCheeries * 3.20;

printf("%.2f", $totalMoney);