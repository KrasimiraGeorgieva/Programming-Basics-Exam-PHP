<?php

$period = intval(readline());

$pazien = 0;
$pregledani = 0;
$nePregledani = 0;
$brLekari = 7;

for ($i = 1; $i <= $period; $i++){
    $den = $i;
    $pazien = intval(readline());

    if ($den % 3 == 0 && $nePregledani > $pregledani){
        $brLekari++;
    }
    if ($pazien > 7){
        $pregledani += $brLekari;
        $nePregledani += $pazien - $brLekari;
    }else{
        $pregledani += $pazien;
    }
}
printf("Treated patients: %d.\n", $pregledani);
printf("Untreated patients: %d.", $nePregledani);