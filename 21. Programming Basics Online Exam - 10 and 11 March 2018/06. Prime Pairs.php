<?php

$pair1Start = intval(readline());
$pair2Start = intval(readline());
$pair1Diff = intval(readline());
$pair2Diff = intval(readline());
 
$pair1End = $pair1Start + $pair1Diff;
$pair2End = $pair2Start + $pair2Diff;
 
for ($i = $pair1Start; $i <= $pair1End; $i++){
    for ($j = $pair2Start; $j <= $pair2End; $j++){
        if (($i % 2 != 0 && $j % 2 != 0) &&
            ($i % 3 != 0 && $j % 3 != 0) &&
            ($i % 5 != 0 && $j % 5 != 0) &&
            ($i % 7 != 0 && $j % 7 != 0)){
        echo $i . $j. "\n";
        }
    }            
}