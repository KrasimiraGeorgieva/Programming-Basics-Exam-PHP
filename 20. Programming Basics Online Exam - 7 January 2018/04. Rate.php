<?php

$sum = floatval(readline());
$monthCount = intval(readline());

$totall = $sum;

for ($i = 1; $i <= $monthCount; $i++) {
    $totall = (1.00 + 0.027) * $totall;
}
printf("Simple interest rate: %.2f lv.\n", (1.00 + $monthCount * 0.03) * $sum);
printf("Complex interest rate: %.2f lv.\n", $totall);

if ((1.00 + $monthCount * 0.03) * $sum > $totall) {
    printf("Choose a simple interest rate. You will win %.2f lv.\n", (1.00 + $monthCount * 0.03) * $sum - $totall);
} else {
    printf("Choose a complex interest rate. You will win %.2f lv.", $totall - (1.00 + $monthCount * 0.03) * $sum);
}