<?php

$n1 = intval(readline());
$n2 = intval(readline());
$a = readline();
$b = '';

if ($a == '+' || $a == '-' || $a == '*') {
    if ($a == '+') {
        if (($n1 + $n2) % 2 == 0) {
            $b = "even";
        } else {
            $b = "odd";
        }
        printf("%d %s %d = %d - %s", $n1, $a, $n2, $n1 + $n2, $b);
    } elseif ($a == '-') {
        if (($n1 - $n2) % 2 == 0) {
            $b = "even";
        } else {
            $b = "odd";
        }
        printf("%d %s %d = %d - %s", $n1, $a, $n2, $n1 - $n2, $b);
    } elseif ($a == '*') {
        if (($n1 * $n2) % 2 == 0) {
            $b = "even";
        } else {
            $b = "odd";
        }
        printf("%d %s %d = %d - %s", $n1, $a, $n2, $n1 * $n2, $b);
    }
} elseif ($a == '/') {
    if ($n1 == 0) {
        printf("Cannot divide %d by zero", $n2);
    } elseif ($n2 == 0) {
        printf("Cannot divide %d by zero", $n1);
    } else {
        printf("%d / %d = %.2f", $n1, $n2, $n1 / $n2);
    }
} elseif ($a == '%') {
    if ($n1 == 0) {
        printf("Cannot divide %d by zero", $n2);
    } elseif ($n2 == 0) {
        printf("Cannot divide %d by zero", $n1);
    } else {
        printf("%d %s %d = %d", $n1, $a, $n2, $n1 % $n2);
    }
}