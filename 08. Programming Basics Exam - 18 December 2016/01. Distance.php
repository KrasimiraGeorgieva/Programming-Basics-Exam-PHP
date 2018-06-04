<?php

$speed = intval(readline());
$timeInMin1 = doubleval(readline());
$timeInMin1 /= 60.00;
$timeInMin2 = doubleval(readline());
$timeInMin2 /= 60.00;
$timeInMin3 = doubleval(readline());
$timeInMin3 /= 60.00;

$distance = $speed * $timeInMin1;
$distanceUp = ($speed + ($speed * 0.10)) * $timeInMin2;
$distanceDown = (($speed + ($speed * 0.10)) - (($speed + ($speed * 0.10)) * 0.05)) * $timeInMin3;
$totalDistance = $distance + $distanceUp + $distanceDown;
printf("%.2f",$totalDistance);