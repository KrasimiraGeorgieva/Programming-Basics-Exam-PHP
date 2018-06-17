<?php

$n = intval(readline());
$rowLength = (2 * $n) + 2;

for ($i = 0; $i < $n-1; $i++){
    printf("%s/%s|%s|%s\\%s",
        str_repeat(' ', $n - $i - 2),
        str_repeat(' ', $i),
        str_repeat(' ', 2),
        str_repeat(' ', $i),
        str_repeat(' ', $n - $i - 2));
    echo"\n";
}

echo str_repeat('-', $rowLength);
echo "\n";

printf("|%s%s%s%s%s|\n",
    str_repeat(' ',floor(($rowLength - $n -4)/2)),
    str_repeat('_',1),
    str_repeat(' ',$n+1),
    str_repeat('_',1),
    str_repeat(' ',floor(($rowLength - $n -4)/2))
    );

printf("|%s%s%s%s%s|\n",
    str_repeat(' ',floor(($rowLength - $n -4)/2)),
    str_repeat('@',1),
    str_repeat(' ',$n+1),
    str_repeat('@',1),
    str_repeat(' ',floor(($rowLength - $n -4)/2))
);

for ($i = 0; $i < floor($n/2); $i++){
    printf("|%s|",
        str_repeat(' ', $rowLength - 2));
    echo"\n";
}

printf("|%sOO%s|\n",
    str_repeat(' ', floor(($rowLength-4)/2)),
        str_repeat(' ', floor(($rowLength-4)/2))
        );

printf("|%s/  \%s|\n",
    str_repeat(' ', floor(($rowLength-6)/2)),
    str_repeat(' ', floor(($rowLength-6)/2))
);

printf("|%s||||%s|\n",
    str_repeat(' ', floor(($rowLength-6)/2)),
    str_repeat(' ', floor(($rowLength-6)/2))
);

for ($i = 1; $i <= $n+1; $i++){
    printf("%s%s%s",
        str_repeat('\\', $i),
        str_repeat('`', ($rowLength - ($i*2))),
        str_repeat('/', $i));
    echo "\n";
}