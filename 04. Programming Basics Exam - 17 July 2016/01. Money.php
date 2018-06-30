<?php

$bitcoins = doubleval(readline());
$bitcoins *= 1168; //bitcoins in leva
$iuan = doubleval(readline());
$iuan *= 0.15; //iuans in dollars
$iuan *= 1.76; //dollars in leva
$commission = doubleval(readline());

$totalInLeva = $bitcoins + $iuan;
$totalInLeva /= 1.95; //leva in euro
$result = $totalInLeva - ($totalInLeva * $commission / 100);
printf("%.2f",$result);