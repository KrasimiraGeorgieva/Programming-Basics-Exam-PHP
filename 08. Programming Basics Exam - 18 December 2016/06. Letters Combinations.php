<?php

$first = readline();
$second = readline();
$third = readline();
$count = 0;
for ($i = $first; $i <= $second; $i++) {
    for ($i1 = $first; $i1 <= $second; $i1++) {
        for ($i2 = $first; $i2 <= $second; $i2++) {
            if ($i != $third && $i1 != $third && $i2 != $third) {
                print ($i . $i1 . $i2 . " ");
                $count++;
            }
        }
    }
}
echo "$count\n";