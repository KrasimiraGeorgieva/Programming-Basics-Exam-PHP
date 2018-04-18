<?php

$tomatoesInKg = floatval(readline());
$boxesNum = intval(readline());
$jarNum = intval(readline());

$totalLutenitsaInKg = $tomatoesInKg / 5;
$jarsWithLutenitsa = $totalLutenitsaInKg / 0.535;
$leftBoxes = $jarsWithLutenitsa / $jarNum;

printf("Total lutenica: %d kilograms.\n", floor($totalLutenitsaInKg));
if ($leftBoxes >= $boxesNum) {
    printf("%d boxes left.\n", floor($leftBoxes - $boxesNum));

    $jarsLeft = $jarsWithLutenitsa - $boxesNum * $jarNum;
    printf("%d jars left.", floor($jarsLeft));
} else {
    printf("%d more boxes needed.\n", floor($boxesNum - $leftBoxes));

    $jarsNeeded = $boxesNum * $jarNum - $jarsWithLutenitsa;
    printf("%d more jars needed.", floor($jarsNeeded));
}