<?php

$magnolii = intval(readline());
$ziumbiul = intval(readline());
$roses = intval(readline());
$kaktusi = intval(readline());
$presentPrice = doubleval(readline());

$sum = $magnolii * 3.25 + $ziumbiul * 4 + $roses * 3.50 + $kaktusi * 8;
$taxes = $sum * 0.05;
$profit = $sum - $taxes;

if ($presentPrice <= $profit){
    printf("She is left with %d leva.", floor($profit-$presentPrice));
}else{
    printf("She will have to borrow %d leva.", ceil($presentPrice-$profit));
}