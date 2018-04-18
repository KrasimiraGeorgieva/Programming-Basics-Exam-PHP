<?php

$m = intval(readline());
$n = intval(readline());
$l = intval(readline());
$specialNumber = intval(readline());
$checkNumber = intval(readline());
       
for ($i = $m; $i >= 1; $i--){
    for ($j = $n; $j >= 1; $j--){
        for ($k = $l; $k >= 1; $k--){
            $number = 100 * $i + 10 * $j + $k;
            if ($number % 3 == 0){
                $specialNumber += 5;
            }
            elseif ($number % 10 == 5){
                $specialNumber -= 2;
            }
            elseif ($number % 2 == 0){
                $specialNumber *= 2;
            }
            if ($specialNumber >= $checkNumber){
                printf("Yes! Control number was reached! Current special number is %d.", $specialNumber);
                echo "\n";
                return;
            }
        }
    }
}
printf("No! %d is the last reached special number.", $specialNumber);
echo "\n";