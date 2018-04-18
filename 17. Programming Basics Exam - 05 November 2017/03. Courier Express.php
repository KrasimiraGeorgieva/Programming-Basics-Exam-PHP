<?php

$weight = floatval(readline());
$service = readline();
$distance = intval(readline());

$pricePerKm = null;

if ($weight < 1.00) {
    $pricePerKm = 0.03;
} elseif ($weight >= 1.0 && $weight <= 10) {
    $pricePerKm = 0.05;
} elseif ($weight >= 11 && $weight <= 40) {
    $pricePerKm = 0.1;
} elseif ($weight >= 41 && $weight <= 90) {
    $pricePerKm = 0.15;
} elseif ($weight >= 91 && $weight <= 150) {
    $pricePerKm = 0.2;
}

$deliveryPrice = $distance * $pricePerKm;

$expressPrice = 0.0;
if ($service == "express") {
    if ($weight < 1.0) {
        $expressPrice = 0.8 * 0.03;
    } elseif ($weight >= 1.0 && $weight <= 10) {
        $expressPrice = 0.4 * 0.05;
    } elseif ($weight >= 11 && $weight <= 40) {
        $expressPrice = 0.05 * 0.1;
    } elseif ($weight >= 41 && $weight <= 90) {
        $expressPrice = 0.02 * 0.15;
    } elseif ($weight >= 91 && $weight <= 150) {
        $expressPrice = 0.01 * 0.2;
    }
    $deliveryPrice = $expressPrice * $weight * $distance + $deliveryPrice;
}

printf("The delivery of your shipment with weight of %.3f kg. would cost %.2f lv.",
        $weight, $deliveryPrice);
