<?php

// Шеста задача от изпит " Основи на програмирането" – 7 Януари 2018

$twoLv = 0;
$oneLv = 0;
$fiftySt = 0;
$twentySt = 0;
$tenSt = 0;
$fiveSt = 0;
$twoSt = 0;
$oneSt = 0;

$num = floatval(readline());
$current = 100*$num;

$twoLv += floor($current / 200);
$current -= 200 * $twoLv;

$oneLv += floor($current / 100);
$current -= 100 * $oneLv;

$fiftySt += floor($current / 50);
$current -= 50 * $fiftySt;

$twentySt += floor($current / 20);
$current -= 20 * $twentySt;

$tenSt += floor($current / 10);
$current -= 10 * $tenSt;

$fiveSt += floor($current / 5);
$current -= 5 * $fiveSt;

$twoSt += floor($current / 2);

$current -= 2 * $twoSt;

$oneSt += floor($current / 1);
$current -= $current - 1 * $oneSt;

$coins = $twoLv + $oneLv + $fiftySt + $twentySt + $tenSt + $fiveSt + $twoSt + $oneSt;
echo $coins;
