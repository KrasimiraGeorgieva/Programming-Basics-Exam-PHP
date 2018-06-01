<?php

$width = floatval(readline());
$length = floatval(readline());
$height = floatval(readline());
$middleHeightGuy = floatval(readline());

$rocketVolume = $width * $length * $height;
$roomVolume = 2 * 2 * ($middleHeightGuy + 0.40);
$placeForGuysCount = floor($rocketVolume / $roomVolume);

if($placeForGuysCount < 3){
   echo 'The spacecraft is too small.';
} elseif ($placeForGuysCount > 10){
    echo 'The spacecraft is too big.';
} else {
    printf("The spacecraft holds %d astronauts.", $placeForGuysCount);
}