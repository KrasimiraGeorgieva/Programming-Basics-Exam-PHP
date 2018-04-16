<?php

$n = intval(readline());
$rowLenght = 2 * $n;

$leftRightCols = str_repeat('^', floor($n / 2));
$center = str_repeat('_', ($rowLenght - 4) - floor($n / 2) * 2);
echo "/$leftRightCols\\$center/$leftRightCols\\\n";

for ($i = 0; $i < $n - 3; $i++) {
    $inside = str_repeat(' ', $rowLenght - 2);
    echo "|$inside|\n";
}
$row = str_repeat(' ', floor($n/2)+1);
$space = str_repeat('_', ($rowLenght - 4) - floor($n / 2) * 2);
echo "|$row$space$row|\n";

$lastRow = str_repeat('_', floor($n/2));
$lastSpaces = str_repeat(' ', ($rowLenght - 4) - floor($n / 2) * 2);
echo "\\$lastRow/$lastSpaces\\$lastRow/";