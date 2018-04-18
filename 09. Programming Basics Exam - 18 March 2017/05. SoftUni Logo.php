<?php

$n = intval(readline());
$rowLength = 12 * $n - 5;

printf("%s#%s\n",
    str_repeat('.', floor(($rowLength - 1) / 2)),
    str_repeat('.', floor(($rowLength - 1) / 2)));

for ($i = 1; $i <= $n * 2 - 2; $i++) {
    printf("%s%s%s\n",
        str_repeat('.', floor($rowLength / 2) - 3 * $i),
        str_repeat('#', 1 + 6 * $i),
        str_repeat('.', floor($rowLength / 2) - 3 * $i));
}

printf("%s\n", str_repeat('#', $rowLength));

for ($i = 1; $i <= $n - 2; $i++) {
    printf("|%s%s%s\n",
        str_repeat('.', 3 * $i - 1),
        str_repeat('#', $rowLength - 6 * $i),
        str_repeat('.', 3 * $i));
}

for ($i = 0; $i < $n - 1; $i++) {
    printf("|%s%s%s\n",
        str_repeat('.', 3 * $n - 4),
        str_repeat('#', 6 * $n + 1),
        str_repeat('.', 3 * $n - 4 + 1));
}

printf("@%s%s%s\n",
    str_repeat('.', 3 * $n - 4),
    str_repeat('#', 6 * $n + 1),
    str_repeat('.', 3 * $n - 4 + 1));