<?php

$n = intval(readline());
$rowLenght = 2 * $n + 3;
for ($i = 1; $i <= $n; $i++){
    printf("%s\\%s/%s", 
            str_repeat('*', $i), 
            str_repeat('-', ((2*$n) - ($i*2) + 1)), 
            str_repeat('*', $i));
    echo "\n";  
}
for ($i = 0; $i < floor($n/3); $i++){
    printf("|%s\\%s/%s|", 
            str_repeat('*',(floor($n/2) + $i)), 
            str_repeat('*', ($n  - ($i*2))), 
            str_repeat('*',(floor($n/2) + $i)));
    echo "\n";
}
for ($i = 1; $i <= $n; $i++){
    printf("%s\\%s/%s", 
            str_repeat('-', $i), 
            str_repeat('*', ((2 * $n) - ($i * 2) + 1)), 
            str_repeat('-', $i));
    echo "\n";
}