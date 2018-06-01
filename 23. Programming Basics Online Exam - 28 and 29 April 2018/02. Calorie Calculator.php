<?php
$gender = readline();
$weightInKg = floatval(readline());
$heightInMeters = floatval(readline());
$age = intval(readline());
$activity = readline();

$calories = 0.0;

if ($gender == 'm') {
    $calories = 66 + 13.7 * $weightInKg + 5 * $heightInMeters * 100 - 6.8 * $age;
} elseif ($gender == 'f') {
    $calories = 655 + 9.6 * $weightInKg + 1.8 * $heightInMeters * 100 - 4.7 * $age;
}

if ($activity == "sedentary") {
    $calories *= 1.2;
} elseif ($activity == "lightly active") {
    $calories *= 1.375;
} elseif ($activity == "moderately active") {
    $calories *= 1.55;
} elseif ($activity == "very active") {
    $calories *= 1.725;
}
printf("To maintain your current weight you will need %d calories per day.", ceil($calories));