<?php

$km = intval(readline());
$dayNight = strtolower(readline());

$taxiPrice = 0.0;
if ($dayNight === "day"){
    $taxiPrice = 0.70 + ($km * 0.79);
}
else{
    $taxiPrice = 0.70 + ($km * 0.90);
}
$busPrice = $km * 0.09;
$trainPrice = $km * 0.06;

if ($km < 20){
      printf("%0.2f", $taxiPrice);
}
elseif ($km >= 20 && $km < 100){
    printf("%0.2f", $busPrice);
}
elseif ($km >= 100){
    printf("%0.2f", $trainPrice);
}