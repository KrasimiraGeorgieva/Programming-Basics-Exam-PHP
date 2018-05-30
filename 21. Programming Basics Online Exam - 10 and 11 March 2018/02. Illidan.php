<?php
$peopleInGroup = intval(readline());
$powerOfPerson = intval(readline());
$blood = intval(readline());

$totalPower = $peopleInGroup * $powerOfPerson;

if($totalPower < $blood){
    printf("You are not prepared! You need %d more points.", $blood - $totalPower);
} else {
    printf("Illidan has been slain! You defeated him with %d points.", $totalPower - $blood);
}