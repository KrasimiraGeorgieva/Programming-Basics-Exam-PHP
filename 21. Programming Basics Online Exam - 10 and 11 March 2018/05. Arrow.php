<?php

$n = intval(readline());
$rowLength = $n+5;

printf("%s^%s\n",
    str_repeat('_', floor(($rowLength - 1)/2)),
    str_repeat('_', floor(($rowLength - 1)/2)));

printf("%s/|\\%s\n",
    str_repeat('_', floor(($rowLength - 3)/2)),
    str_repeat('_', floor(($rowLength - 3)/2)));

for($i = 0; $i < floor($n/2); $i++){
    printf("%s/%s|||%s\\%s",
        str_repeat('_', $n/2 - $i),
        str_repeat('.', $i),
        str_repeat('.', $i),
        str_repeat('_', $n/2 - $i));
    echo"\n";
}

printf("%s/%s|||%s\\%s",
    str_repeat('_', $n - $i - 2),
    str_repeat('.', 2),
    str_repeat('.', 2),
    str_repeat('_', $n - $i - 2));
echo"\n";

printf("%s/.|||.\\%s",
    str_repeat('_', floor($rowLength - 7)/2 ),
    str_repeat('_', floor($rowLength - 7)/2 ));
echo"\n";

for ($i = 0; $i < $n; $i++){
    printf("%s|||%s\n",
        str_repeat('_', floor(($rowLength - 3)/2)),
        str_repeat('_', floor(($rowLength - 3)/2)));
}

printf("%s~~~%s\n",
    str_repeat('_', floor(($rowLength - 3)/2)),
    str_repeat('_', floor(($rowLength - 3)/2)));

for ($i = 0; $i < floor($n/2); $i++){
    printf("%s//%s!%s\\\\%s",
        str_repeat('_', floor($n/2)-$i),
        str_repeat('.', $i),
        str_repeat('.', $i),
        str_repeat('_', floor($n/2)-$i));
    echo"\n";
}