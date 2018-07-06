<?php

$stoticiMax = intval(readline());
$deseticiMax = intval(readline());
$ediniciMax = intval(readline());

for ($a = 1; $a <= $stoticiMax; $a++) {
    for ($b = 1; $b <= $deseticiMax; $b++) {
        for ($c = 1; $c <= $ediniciMax; $c++) {
            if ($a % 2 == 0 &&
                $c % 2 == 0 &&
                ($b == 2 || $b == 3 || $b == 5 || $b == 7)) {
                printf("%d %d %d\n", $a, $b, $c);
            }
        }
    }
}