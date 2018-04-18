<?php

$length = intval(readline());
$width = intval(readline());
$height =intval(readline());
$percent = floatval(readline());

$volume = $length * $width * $height; // cub.cm
$totalLiters = $volume * 0.001;
$percentOtherThings = $percent * 0.01;

$result = $totalLiters * (1 - $percentOtherThings);
printf("%.3f", $result);