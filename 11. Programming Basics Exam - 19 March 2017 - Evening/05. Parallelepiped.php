<?php

$n = intval(readline());
$rowLenght = 3 * $n + 1;

printf("+%s+%s", 
		str_repeat('~', $n-2), 
		str_repeat('.', (2* $n) + 1));
echo "\n";

for($i = 0; $i< (2 * $n) + 1; $i++){
    printf("|%s\\%s\\%s", 
            str_repeat('.',$i),
            str_repeat('~', $n-2), 
            str_repeat('.', $rowLenght - $i - ($n - 2) - 3));
    echo "\n";
}

for($i = 0; $i< (2 * $n) + 1; $i++){
    printf("%s\\%s|%s|", 
            str_repeat('.', $i),
            str_repeat('.', $rowLenght - $i - ($n - 2) - 3),
            str_repeat('~', $n - 2));
    echo "\n";
    
}

printf("%s+%s+", str_repeat('.', (2* $n) + 1),
        str_repeat('~', $n-2));
echo "\n";
