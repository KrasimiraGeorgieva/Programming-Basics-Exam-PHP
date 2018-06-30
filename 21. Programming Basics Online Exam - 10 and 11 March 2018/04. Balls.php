<?php

$balls = intval(readline());

$totalPoints = 0;
$redBallsPoints = 0;
$orangeBallsPoints = 0;
$yellowBallsPoints = 0;
$whiteBallsPoints = 0;
$blackBallsPoints = 0;
$default = 0;

for ($i = 0; $i < $balls; $i++) {
    $color = strtolower(readline());
    if ($color == "red") {
        $redBallsPoints++;
        $totalPoints += 5;
    } else if ($color == "orange") {
        $orangeBallsPoints++;
        $totalPoints += 10;
    } else if ($color == "yellow") {
        $yellowBallsPoints++;
        $totalPoints += 15;
    } else if ($color == "white") {
        $whiteBallsPoints++;
        $totalPoints += 20;
    } else if ($color == "black") {
        $blackBallsPoints++;
        $totalPoints = floor($totalPoints / 2);
    } else {
        $default++;
    }
}

echo "Total points: $totalPoints\n";
echo "Points from red balls: $redBallsPoints\n";
echo "Points from orange balls: $orangeBallsPoints\n";
echo "Points from yellow balls: $yellowBallsPoints\n";
echo "Points from white balls: $whiteBallsPoints\n";
echo "Other colors picked: $default\n";
echo "Divides from black balls: $blackBallsPoints\n";