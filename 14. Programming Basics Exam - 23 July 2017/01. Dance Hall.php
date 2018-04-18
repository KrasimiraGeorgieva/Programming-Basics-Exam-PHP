<?php

$lenghtInMeters = floatval(readline());
$widthInMeters = floatval(readline());
$sideWardrobe = floatval(readline());

$hallArea = ($lenghtInMeters * 100) * ($widthInMeters * 100); // sq.cm
$wardrobeArea = ($sideWardrobe * 100) * ($sideWardrobe * 100); // sq.cm
$benchArea = $hallArea / 10; // sq. cm

$dancerArea = 40; // sq. cm
$dancerAreaPlus = 7000; // sq.cm
$areaPerDancer = $dancerArea + $dancerAreaPlus;

$danceArea = $hallArea - $wardrobeArea - $benchArea;
$numDancers = floor($danceArea / $areaPerDancer);

echo($numDancers);