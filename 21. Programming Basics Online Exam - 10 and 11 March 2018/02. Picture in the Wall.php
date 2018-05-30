<?php

$widthOfHole = intval(readline());
$heightOfHole = intval(readline());
$sideOfPicture = intval(readline());
$picturesCount = intval(readline());

$pictureArea = $sideOfPicture * $sideOfPicture * $picturesCount;
$holeArea = $widthOfHole * $heightOfHole;

if($holeArea < $pictureArea){
    printf("The pictures don't fit in the hole. Picture area is %d bigger than hole area.", $pictureArea-$holeArea);
} else {
    printf("The pictures fit in the hole. Hole area is %d bigger than pictures area.", $holeArea - $pictureArea);
}
