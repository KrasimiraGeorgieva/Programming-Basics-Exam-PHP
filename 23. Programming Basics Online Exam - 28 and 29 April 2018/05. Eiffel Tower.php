<?php

$n = intval(readline());
$rowLength = 2 * $n + 6;

for ($i = 0; $i < $n; $i++) {
    printf("%s**%s", 
            str_repeat('-', floor(($rowLength - 2) / 2)), 
            str_repeat('-', floor(($rowLength - 2) / 2)));
    echo "\n";
}

for ($i = 0; $i < $n - 3; $i++) {
    printf("%s****%s", 
            str_repeat('-', floor(($rowLength - 4) / 2)),
            str_repeat('-', floor(($rowLength - 4) / 2)));
    echo "\n";
}

printf("%s******%s", 
        str_repeat('-', floor(($rowLength - 6) / 2)), 
        str_repeat('-', floor(($rowLength - 6) / 2)));
echo "\n";

for ($i = 0; $i < $n - 4; $i++) {
    printf("%s**--**%s", 
            str_repeat('-', floor(($rowLength - 6) / 2)), 
            str_repeat('-', floor(($rowLength - 6) / 2)));
    echo "\n";
}

for ($i = 0; $i < $n - 3; $i++) {
    printf("%s**----**%s", 
            str_repeat('-', floor(($rowLength - 8) / 2)), 
            str_repeat('-', floor(($rowLength - 8) / 2)));
    echo "\n";
}

printf("%s**********%s", 
        str_repeat('-', floor(($rowLength - 10) / 2)), 
        str_repeat('-', floor(($rowLength - 10) / 2)));
echo "\n";

for ($i = 0; $i < $n - 3; $i++) {
    printf("%s**%s**%s", 
            str_repeat('-', ($n - 3 - $i)), 
            str_repeat('-', ($rowLength - 2 * ($n - 3 - $i) - 4)),
            str_repeat('-', ($n - 3 - $i)));  
    echo "\n";
}

printf("***%s***", 
        str_repeat('-', ($rowLength - 6)));
echo "\n";