<?php

$distanceAB = floatval(readline());
$truckSpeed = floatval(readline());
$speedDifference = floatval(readline()); // m/c

$speedDifferenceInKmH = $speedDifference/1000*3600;// km/h
$carSpeed = $truckSpeed + $speedDifferenceInKmH;

$truckTime = ceil($distanceAB / $truckSpeed);
$carTime = ceil($distanceAB / $carSpeed);

echo"The truck arrived after $truckTime hours";
echo "\n";
echo "The car arrived after $carTime hours";