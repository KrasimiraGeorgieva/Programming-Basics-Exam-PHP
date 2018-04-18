<?php

$firstNum = intval(readline());
$secondNum = intval(readline());
$controlNum = intval(readline());
$numCombinations = 0;
$sumOfNumbers = 0;
$checkControlNum = false;

for ($combination1 = 1; $combination1 <= $firstNum; $combination1++){
    for ($combination2 = $secondNum; $combination2 >= 1; $combination2--){
        $numCombinations++;
        $sumOfNumbers += $combination1 * 2 + $combination2  * 3;
        if($sumOfNumbers >= $controlNum){
            $checkControlNum = true;
            break;
        }
    }
    if ($checkControlNum) break;
}

printf("%d moves",$numCombinations );
echo "\n";

if ($checkControlNum){
    printf("Score: %d >= %d",$sumOfNumbers,$controlNum );
    echo "\n";
}