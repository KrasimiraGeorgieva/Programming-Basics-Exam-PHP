<?php

$month = strtolower(readline());
$hours = intval(readline());
$peopleCount = intval(readline());
$timeOfDay = strtolower(readline());

$price = 0.0;

if ($month == "march" || $month == "april" || $month == "may") {
    if ($timeOfDay == "day") {
        $price = 10.50;
    } elseif ($timeOfDay == "night") {
        $price = 8.4;
    }
} elseif ($month == "june" || $month == "july" || $month == "august") {
    if ($timeOfDay == "day") {
        $price = 12.60;
    } elseif ($timeOfDay == "night") {
        $price = 10.20;
    }
}
if ($peopleCount >= 4) {
    $price *= 0.9;
}
if ($hours >= 5) {
    $price *= 0.5;
}
printf("Price per person for one hour: %.2f\n", $price);
printf("Total cost of the visit: %.2f", $price * $hours * $peopleCount);

