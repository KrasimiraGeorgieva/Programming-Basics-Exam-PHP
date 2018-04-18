<?php

$n = intval(readline());

$thirdDigit = $n % 10;
$currentNum = $n / 10;
$secondDigit = $currentNum % 10;
$currentNum1 = $currentNum / 10;
$firstDigit = $currentNum1 % 10;

for( $lastDigits = 1; $lastDigits <= $thirdDigit; $lastDigits++){
    for( $middleDigits = 1; $middleDigits <= $secondDigit; $middleDigits++){
        for($beginningDigits = 1; $beginningDigits <= $firstDigit; $beginningDigits++){
            $multiply = $lastDigits * $middleDigits * $beginningDigits;
            echo "$lastDigits * $middleDigits * $beginningDigits = $multiply;". "\n";
        }
    }
}