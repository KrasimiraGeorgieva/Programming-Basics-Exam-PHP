<?php

$first = ord(readline());
$second = ord(readline());
$third = ord(readline());
$count = 0;
for ($i = $first; $i <= $second; $i++) {
    for ($i1 = $first; $i1 <= $second; $i1++) {
        for ($i2 = $first; $i2 <= $second; $i2++) {
            if ($i != $third && $i1 != $third && $i2 != $third) {
                print (chr($i) . chr($i1) . chr($i2) . " ");
                $count++;
            }
        }
    }
}
echo "$count\n";