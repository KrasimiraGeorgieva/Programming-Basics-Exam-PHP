<?php

$countNight = intval(readline());
$destination = readline();
$typeTransport = readline();

$parentsPrice = 0;
$kidsPrice = 0;

if ($countNight >= 1 && $countNight <= 10) {
    if ($destination == "Miami") {
        $parentsPrice = 24.99;
        $kidsPrice = 14.99;
    } else if ($destination == "Canary Islands") {
        $parentsPrice = 32.5;
        $kidsPrice = 28.5;
    } else if ($destination == "Philippines") {
        $parentsPrice = 42.99;
        $kidsPrice = 39.99;
    }
} else if ($countNight >= 11 && $countNight <= 15) {
    if ($destination == "Miami") {
        $parentsPrice = 22.99;
        $kidsPrice = 11.99;
    } else if ($destination == "Canary Islands") {
        $parentsPrice = 30.50;
        $kidsPrice = 25.60;
    } else if ($destination == "Philippines") {
        $parentsPrice = 41.00;
        $kidsPrice = 36.00;
    }
} else if ($countNight >= 16) {
    if ($destination == "Miami") {
        $parentsPrice = 20.00;
        $kidsPrice = 10.00;
    } else if ($destination == "Canary Islands") {
        $parentsPrice = 28.00;
        $kidsPrice = 22.00;
    } else if ($destination == "Philippines") {
        $parentsPrice = 38.50;
        $kidsPrice = 32.40;
    }
}
$parentsTrnasport = 0;
$kidsTrnasport = 0;

if ($typeTransport == "train") {
    $parentsTrnasport = 22.30;
    $kidsTrnasport = 12.50;
} else if ($typeTransport == "bus") {
    $parentsTrnasport = 45.00;
    $kidsTrnasport = 37.00;
} else if ($typeTransport == "airplane") {
    $parentsTrnasport = 90.00;
    $kidsTrnasport = 68.50;
}
$sum = $countNight * (2 * $parentsPrice + 3 * $kidsPrice) * 1.25;
$sum2 = 2 * $parentsTrnasport + 3 * $kidsTrnasport;

printf("%.3f", $sum + $sum2);