<?php

$salary = floatval(readline());
$years = intval(readline());
$isSyndicate = (readline() == "Yes");

$currYear = 1;
while ($currYear <= $years && $salary < 5000) {
    $salary += $salary * 0.06;

    if ($currYear % 10 == 0) {
        $salary += 200;
    } else if ($currYear % 5 == 0) {
        $salary += 100;
    } else if ($isSyndicate) {
        $salary -= $salary * 0.001;
    }

    $currYear++;
}

if ($salary > 5000) {
    $salary = 5000;
}

printf("Current salary: %.2f\n", $salary);
$yearsLeft = null;

while ($salary < 5000) {
    $salary += $salary * 0.06;

    if (($currYear + $yearsLeft) % 10 == 0) {
        $salary += 200;
    } else if (($currYear + $yearsLeft) % 5 == 0) {
        $salary += 100;
    } else if ($isSyndicate) {
        $salary -= $salary * 0.001;
    }

    $yearsLeft++;
}

if ($yearsLeft > 0) {
    $yearsLeft--;
}

printf("%d more years to max salary.", $yearsLeft);