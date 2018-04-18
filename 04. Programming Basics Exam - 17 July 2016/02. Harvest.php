<?php

$ereaGrapes = intval(readline());
$grapesPerOneQuaterMeters = floatval(readline());
$winesInLiters = intval(readline());
$workers = intval(readline());

$totalGrapes = $ereaGrapes * $grapesPerOneQuaterMeters;
$totalWine = $totalGrapes * 0.40 / 2.5;

if ($totalWine < $winesInLiters){
    printf("It will be a tough winter! More %d liters wine needed.", floor($winesInLiters - $totalWine));
}

elseif ($totalWine >= $winesInLiters){
    printf("Good harvest this year! Total wine: %d liters.", floor($totalWine));
    echo "\n";
    printf("%d liters left -> %d liters per person.", ceil($totalWine - $winesInLiters), ceil
        (($totalWine - $winesInLiters) / $workers));
}