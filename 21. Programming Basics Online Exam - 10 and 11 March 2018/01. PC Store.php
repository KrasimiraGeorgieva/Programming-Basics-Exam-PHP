<?php

$processorPrice = doubleval(readline()) * 1.57;
$videoCardPrice = doubleval(readline()) * 1.57;
$ramPrice = doubleval(readline()) * 1.57;
$ramItem = intval(readline());
$discount = doubleval(readline());

$totalPriceRam = $ramPrice * $ramItem;
$processorDiscountPrice = $processorPrice - ($processorPrice * $discount);
$videoCardDiscountPrice = $videoCardPrice - ($videoCardPrice * $discount);

$totalPriceForParts = $processorDiscountPrice + $videoCardDiscountPrice + $totalPriceRam;
printf("Money needed - %0.2f leva.", $totalPriceForParts);