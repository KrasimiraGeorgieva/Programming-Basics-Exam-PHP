<?php

$n = ord(readline());
$n1 = intval(readline());
$m = ord(readline());
$m1 = intval(readline());
$k = ord(readline());
$k1 = intval(readline());

$totalN = chr($n + $n1);
$totalM = chr($m + $m1);
$totalK = chr($k + $k1);

if("$totalN$totalM$totalK" == "777"){
	printf("%d%d%d\n*** JACKPOT ***",$totalN, $totalM, $totalK);
}elseif("$totalN$totalM$totalK" == "@@@"){
	printf("%d%d%d\n!!! YOU LOSE EVERYTHING !!!",$totalN, $totalM, $totalK);
}else{
	printf("%s%s%s", $totalN, $totalM, $totalK);
}