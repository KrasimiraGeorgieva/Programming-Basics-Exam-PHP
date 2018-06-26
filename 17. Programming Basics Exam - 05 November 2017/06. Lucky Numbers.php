<?php

$n = intval(readline());

for ($one = 1; $one <= 9; $one++) {
    for ($two = 1; $two <= 9; $two++) {
        for ($three = 1; $three <= 9; $three++) {
            for ($four = 1; $four <= 9; $four++) {
                if ($one + $two == $three + $four && $n % ($one + $two) == 0) {
                    printf("%d%d%d%d ", $one, $two, $three, $four);
                }
            }
        }
    }
}