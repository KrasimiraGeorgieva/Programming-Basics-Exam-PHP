<?php

// вход  изход
// 929   For 12 hours the pool overflows with 4399.0 liters.
// 123
// 321
// 12
// 5946  The pool is 84% full. Pipe 1: 99%. Pipe 2: 0%.
// 1000  
// 1
// 5

$volume = intval(readline());
$firstFlowRate = intval(readline());  // liters/hour
$secondFlowRate = intval(readline()); // liters/hour
$hoursMiss = floatval(readline());

$firstDebit = $firstFlowRate * $hoursMiss;
$secondDebit = $secondFlowRate * $hoursMiss;
$totalDebit = $firstDebit + $secondDebit;

if ($totalDebit <= $volume) {
    $full = floor(100 * $totalDebit / $volume);
    $fullFirstPipe = floor(100 * $firstDebit / $totalDebit);
    $fullSecondPipe = floor(100 * $secondDebit / $totalDebit);

    echo "The pool is $full% full. Pipe 1: $fullFirstPipe%. Pipe 2: $fullSecondPipe%.";
} else {
    $over = abs($volume - $totalDebit);
    echo "For $hoursMiss hours the pool overflows with ".number_format($over, 1, '.', '')." liters.";
}