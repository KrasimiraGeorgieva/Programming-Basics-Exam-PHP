<?php

$n = intval(readline());
$halfRows = $n - 2;
$dashes = str_repeat('-', $halfRows);
$stars = str_repeat('*', $halfRows);
$spaces = str_repeat(' ', $halfRows + 1);

for ($i = 1; $i <= $halfRows; $i++) {
    if ($i % 2 == 0) {
        echo "$dashes\\" . ' ' . "/$dashes\n";
    } else {
        echo "$stars\\" . ' ' . "/$stars\n";
    }
}
echo "$spaces" . '@' . "$spaces" . "\n";

for ($i = 1; $i <= $halfRows; $i++) {
    if ($i % 2 == 0) {
        echo "$dashes/" . ' ' . "\\$dashes\n";
    } else {
        echo "$stars/" . ' ' . "\\$stars\n";
    }
}
