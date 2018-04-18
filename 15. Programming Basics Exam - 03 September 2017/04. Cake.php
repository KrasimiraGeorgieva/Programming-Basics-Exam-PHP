<?php

$weight = intval(readline());
$length = intval(readline());
$cakeSize = $weight * $length;
$finished = true;

while (true) {
    $piecesOfCake = readline();
    if (is_numeric($piecesOfCake)) {
        $piecesOfCake = intval($piecesOfCake);
        $cakeSize -= $piecesOfCake;
    }
    if ($piecesOfCake === 'STOP') {
        break;
    }

    if ($cakeSize < 0) {
        $finished = false;
        break;
    }
}
if ($finished === false) {
    printf("No more cake left! You need %d pieces more.", abs($cakeSize));
} else {
    printf("\n%d pieces are left.", $cakeSize);
}