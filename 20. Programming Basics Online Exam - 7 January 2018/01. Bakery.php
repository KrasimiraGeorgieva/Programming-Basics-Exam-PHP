<?php

$beginingWeight = intval(readline());
$breadProductWeight = intval(readline());
$pricePerBreadProduct = floatval(readline());
$soldBreadProducts = intval(readline());
$soldSweets = intval(readline());

$dayIncome = $soldBreadProducts * $pricePerBreadProduct;
$neededDough = $soldBreadProducts * $breadProductWeight;
$priceSweets = $pricePerBreadProduct * 1.25;
$weightSweets = $breadProductWeight * 0.8;
$doughForSweets = $soldSweets * $weightSweets;
$nightIncome = $soldSweets * $priceSweets;
$doughCosts = ($beginingWeight / 1000.0 + $neededDough / 1000.0) * 4;
$income = round($dayIncome + $nightIncome - $doughCosts, 2);
$dough = $neededDough + $doughForSweets;

printf("Pure income: %.2f lv.", $income);
echo "\n";
printf("Dough used: %.0f g.", $dough);
 echo "\n";