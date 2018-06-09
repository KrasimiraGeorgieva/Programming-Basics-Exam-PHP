<?php

$gender = strtolower(readline());
$age = intval(readline());
$stajVGodini = intval(readline());

if ($gender == "male") {
    if ($age >= 64 && $stajVGodini >= 38) {
        echo "Ready to retire at $age and $stajVGodini years of experience!";
    } if ($age < 64 && $stajVGodini >= 38) {
        $left = 64 - $age;
        echo "Worked enough, but not old enough. Years left to retirement: $left.";
    } if ($age >= 64 && $stajVGodini < 38) {
        $result = 38 - $stajVGodini;
        echo "Old enough, but haven't worked enough. Work experience left to retirement: $result.";
    } if ($age < 64 && $stajVGodini < 38) {
        printf("Too early. Years left to retirement: %d. Work experience left to retirement: %d.", 64 - $age, 38 - $stajVGodini);
    }
} elseif ($gender == "female") {
    if ($age >= 61 && $stajVGodini >= 35) {
        echo "Ready to retire at $age and $stajVGodini years of experience!";
    }
    if ($age < 61 && $stajVGodini >= 35) {
        $left = 61 - $age;
        echo "Worked enough, but not old enough. Years left to retirement: $left.";
    }
    if ($age >= 61 && $stajVGodini < 35) {
        $result = 35 - $stajVGodini;
        echo "Old enough, but haven’t worked enough. Work experience left to retirement: $result.";
    }
    if ($age < 61 && $stajVGodini < 35) {
        printf("Too early. Years left to retirement: %d. Work experience left to retirement: %d.", 61 - $age, 35 - $stajVGodini);
    } 
} else {
        echo "Invalid input.";
    }
