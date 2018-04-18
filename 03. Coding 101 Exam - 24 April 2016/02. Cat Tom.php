<?php

$numHolidays = intval(readline());
$workDays = (365 - $numHolidays) * 63;
$numHolidays *= 127;
$minPlay = $workDays + $numHolidays;
$result = abs(30000 - $minPlay);

$hours = floor($result / 60);
$minutes = $result % 60;

if ($minPlay > 30000) {
    echo 'Tom will run away' . "\n";
    echo "$hours hours and $minutes minutes more for play";
    //printf("%.0f hours and %.0f minutes more for play", $hours , $minutes);
} else {
    echo 'Tom sleeps well' . "\n";
    printf("%.0f hours and %.0f minutes less for play", $hours, $minutes);
}