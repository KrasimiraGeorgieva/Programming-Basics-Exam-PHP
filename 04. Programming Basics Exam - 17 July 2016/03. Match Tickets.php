<?php

$budget = doubleval(readline());
$category = strtolower(readline());
$numberOfPeople = intval(readline());

$ticketPrice = 0.00;
if ($category == "vip") {
    $ticketPrice = 499.99;
} elseif ($category == "normal") {
    $ticketPrice = 249.99;
}

$leftMoney = 0.00;
if ($numberOfPeople >= 1 && $numberOfPeople <= 4) {
    $leftMoney = $budget - ($budget * 0.75);
    $ticketPrice *= $numberOfPeople;
} elseif ($numberOfPeople >= 5 && $numberOfPeople <= 9) {
    $leftMoney = $budget - ($budget * 0.60);
    $ticketPrice *= $numberOfPeople;
} elseif ($numberOfPeople >= 10 && $numberOfPeople <= 24) {
    $leftMoney = $budget - ($budget * 0.50);
    $ticketPrice *= $numberOfPeople;
} elseif ($numberOfPeople >= 25 && $numberOfPeople <= 49) {
    $leftMoney = $budget - ($budget * 0.40);
    $ticketPrice *= $numberOfPeople;
} elseif ($numberOfPeople >= 55) {
    $leftMoney = $budget - ($budget * 0.25);
    $ticketPrice *= $numberOfPeople;
}

if ($leftMoney >= $ticketPrice) {
    printf("Yes! You have %.2f leva left.", $leftMoney - $ticketPrice);
} else {
    printf("Not enough money! You need %.2f leva.", $ticketPrice - $leftMoney);
}