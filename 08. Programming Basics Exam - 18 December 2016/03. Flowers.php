<?php

$hrizantemiNum = intval(readline());
$roziNum = intval(readline());
$laletaNum = intval(readline());
$sezon = strtolower(readline());
$isItHoliday = strtolower(readline());

$hrizantemiPrice = 0.0;
$roziPrice = 0.0;
$laletaPrice = 0.0;

if ($sezon == "spring" || $sezon == "summer")
{
    $hrizantemiPrice = $hrizantemiNum * 2.00;
    $roziPrice = $roziNum * 4.10;
    $laletaPrice = $laletaNum * 2.50;
}
if ($sezon == "autumn" || $sezon == "winter")
{
    $hrizantemiPrice = $hrizantemiNum * 3.75;
    $roziPrice = $roziNum * 4.50;
    $laletaPrice = $laletaNum * 4.15;
}
$price = $hrizantemiPrice + $roziPrice + $laletaPrice;

if ($isItHoliday == 'y')
{
    $price += ($price * 0.15);
}
if ($laletaNum > 7 && $sezon == "spring")
{
    $price -= ($price * 5 / 100);
}
if ($roziNum >= 10 && $sezon == "winter")
{
    $price -= ($price * 0.10);
}
if ($hrizantemiNum + $roziNum + $laletaNum > 20)
{
    $price -= ($price * 0.20);
}
printf("%.2f", $price + 2);