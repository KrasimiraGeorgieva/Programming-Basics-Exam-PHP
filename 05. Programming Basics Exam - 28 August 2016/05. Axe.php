<?php

$n = intval(readline());
$rowLenght = 5 * $n;
for ($i = 0; $i < $n; $i++){
   printf("%s*%s*%s", 
           str_repeat('-', 3 * $n), 
           str_repeat('-', $i), 
           str_repeat('-', $rowLenght - 2 - $i - 3 * $n));
   echo "\n";
}

for ($i = 1; $i <= floor($n / 2); $i++){
    printf("%s%s*%s\n", 
            str_repeat('*', 3 * $n + 1), 
            str_repeat('-', $n - 1), 
            str_repeat('-', $n - 1));
}
$a = 0;
$b = 0; 
$c = 0;
for ($i = 0; $i < floor($n / 2) - 1; $i++){
    printf("%s*%s*%s\n", 
            str_repeat('-', 3 * $n + $a), 
            str_repeat('-', $n - 1 + $b), 
            str_repeat('-', $n -1 + $c));
    $a--;
    $b += 2;
    $c--;
}
$x = floor($n / 2) - 1;

   printf("%s*%s*%s\n", 
           str_repeat('-', (3 * $n) - $x), 
           str_repeat('*', $n-1+($x*2)), 
           str_repeat('-', $n-1-$x));