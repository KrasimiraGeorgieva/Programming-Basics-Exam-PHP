<?php

$n = intval(readline());
$row = (2 * $n) - 1;

printf("@%s@%s@\n", (str_repeat(' ', $n - 2)), (str_repeat(' ', $n - 2)));
printf("**%s*%s**\n", str_repeat(' ', $n-3), str_repeat(' ', $n-3));

$a = 0;
$b = 1;
for ($i = 1; $i < floor($n / 2) - 1; $i++) {
    printf("*%s*%s*%s*%s*%s*\n",
        (str_repeat('.', $i)),
        (str_repeat(' ', floor(($row - 6)/2) - 1 + $a)),
        (str_repeat('.', $b)),
        (str_repeat(' ', floor(($row-6)/2) - 1 + $a)),
        (str_repeat('.', $i)));

    $a -= 2;
    $b += 2;
}

printf("*%s*%s*%s*\n",
        str_repeat('.',floor($n/2)-1), 
        str_repeat('.',$n-3),
        str_repeat('.',floor($n/2)-1));

printf("*%s%s.%s%s*\n", 
        str_repeat('.', floor($n / 2)), 
        str_repeat('*', ceil($n / 2) - 2), 
        str_repeat('*', ceil($n / 2) - 2), 
        str_repeat('.', floor($n / 2)));

echo str_repeat('*', $row) . "\n";
echo str_repeat('*', $row);