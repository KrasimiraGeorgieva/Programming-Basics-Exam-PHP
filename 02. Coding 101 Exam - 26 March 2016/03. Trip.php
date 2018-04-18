<?php

$budget = doubleval(readline());
$season = readline();

$place = '';  //Bulgaria/Balkans/Europa
$accomodation = '';
$amount = 0.0;

if ($budget<= 100){
    $place = "Bulgaria";
    if($season == "summer"){
        $accomodation = "Camp";
        $amount = 0.30 * $budget;
    }else{
        $accomodation = "Hotel";
        $amount = 0.70 * $budget;
    }
}elseif($budget <= 1000){
    $place = "Balkans";
    if ($season == "summer"){
        $accomodation = "Camp";
        $amount = 0.40 * $budget;
    }else{
        $accomodation = "Hotel";
        $amount = 0.80 * $budget;
    }
}else{
    $place = "Europe";
    $accomodation = "Hotel";
    $amount = 0.90 * $budget;
}

printf("Somewhere in %s \n", $place);
printf("%s - %.2f", $accomodation, $amount);