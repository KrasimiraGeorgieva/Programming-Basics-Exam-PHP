<?php
// 100/100
$n = intval(readline());

$numbersDec = 0;
$numbersChr = "";
$smallLettersDec = 0;
$smallLettersChr = "";
$bigLettersDec = 0;
$bigLettersChr = "";
$symbolsDec = 0;
$symbolsChr = "";

for ($i = 0; $i < $n; $i++) {
    $current = ord(readline());

    if ($current >= 48 && $current <= 57) {
        $numbersDec += $current;
        $numbersChr .= chr($current);
    } elseif ($current >= 97 && $current <= 122) {
    //} elseif (ctype_lower($current)) { 
        $smallLettersDec += $current;
        $smallLettersChr .= chr($current);
    //} elseif ($current >= 65 && $current <= 90) {
    } elseif (ctype_upper($current)) {
        $bigLettersDec += $current;
        $bigLettersChr .= chr($current);
    } else {
        $symbolsDec += $current;
        $symbolsChr .= chr($current);
    }
}

$maxSum = max($numbersDec, $smallLettersDec, $bigLettersDec, $symbolsDec);

$chrCombinaton = "";

if ($numbersDec >= $smallLettersDec && $numbersDec >= $bigLettersDec && $numbersDec >= $symbolsDec) {
    $chrCombinaton = $numbersChr;
} elseif ($bigLettersDec >= $smallLettersDec && $bigLettersDec >= $symbolsDec) {
    $chrCombinaton = $bigLettersChr;
} elseif ($smallLettersDec >= $symbolsDec) {
    $chrCombinaton = $smallLettersChr;
} else {
    $chrCombinaton = $symbolsChr;
}

printf("Biggest ASCII sum is:%d\n", $maxSum);
printf("Combination of characters is:%s\n", $chrCombinaton);