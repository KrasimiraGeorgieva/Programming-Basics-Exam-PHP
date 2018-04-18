<?php

$sum = intval(readline());
$currentNumber = true;

for ($firstNumber = 1; $firstNumber <= 30; $firstNumber++){
    for ($secoundNumber = 1; $secoundNumber <= 30; $secoundNumber++){
        for ($thirdNumber = 1; $thirdNumber <= 30; $thirdNumber++){
            if ($firstNumber < $secoundNumber 
                    && $secoundNumber < $thirdNumber 
                    && $firstNumber + $secoundNumber + $thirdNumber == $sum){
                printf("%d + %d + %d = %d", 
                        $firstNumber, $secoundNumber, $thirdNumber, $sum);
                echo "\n";
                $currentNumber = false;
                break;
            }
            if ($firstNumber > $secoundNumber 
                    && $secoundNumber > $thirdNumber 
                    && $firstNumber * $secoundNumber * $thirdNumber == $sum){
                printf("%d * %d * %d = %d", 
                        $firstNumber, $secoundNumber, $thirdNumber, $sum);
                echo "\n";
                $currentNumber = false;
                break;
            }   
        }
    }
}

if($currentNumber){
    echo "No!\n";
}      