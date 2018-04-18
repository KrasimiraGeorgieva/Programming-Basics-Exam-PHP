<?php

$trainingDays = intval(readline());
$numberOfDancers = intval(readline());

$totalEnergyDaysDancers = 100.0 * $numberOfDancers * $trainingDays;

for ($training = 1; $training <= $trainingDays; $training++) {
    $hoursTrainingPerDays = intval(readline());

    if ($hoursTrainingPerDays % 2 == 0 && $training % 2 == 0) {
        $totalEnergyDaysDancers -= 68 * $numberOfDancers;
    } else if ($hoursTrainingPerDays % 2 == 0 && $training % 2 != 0) {
        $totalEnergyDaysDancers -= 49 * $numberOfDancers;
    } else if ($hoursTrainingPerDays % 2 != 0 && $training % 2 == 0) {
        $totalEnergyDaysDancers -= 65 * $numberOfDancers;
    } else if ($hoursTrainingPerDays % 2 != 0 && $training % 2 != 0) {
        $totalEnergyDaysDancers -= 30 * $numberOfDancers;
    }
}

$energyPerDancer = $totalEnergyDaysDancers / $numberOfDancers / $trainingDays;

if ($energyPerDancer > 50) {
    printf("They feel good! Energy left: %.2f\n", $energyPerDancer);
} else {
    printf("They are wasted! Energy left: %.2f", $energyPerDancer);
}