<?php

$start = intval(readline());
$end = intval(readline());
$magNum = intval(readline());

$count = 0;
for ($num1 = $start; $num1 <= $end; $num1++){
    for ($num2 = $start; $num2 <= $end; $num2++){
        $count++;
        if ($num1 + $num2 == $magNum){
            printf("Combination N:%d (%d + %d = %d)",
                    $count, $num1, $num2, $magNum);
            return;
        }
    }
}
printf("%d combinations - neither equals %d", $count, $magNum);
