<?php

$a = intval(readline());
$b = ord(readline());
$c = ord(readline());
$d = ord(readline());
$e = intval(readline());
$n = intval(readline());

$counter = 0;

for ($j = $a; $j <= 99; $j++) {
    for ($k = $b; $k <= 90; $k++) {
        for ($l = $c; $l <= 122; $l++) {
            for ($o = $d; $o <= 90; $o++) {
                for ($p = $e; $p >= 10; $p--) {
                    if ($j % 10 == 2 && $p % 10 == 5) {
                        $counter ++;
                    }
                    if ($counter == $n) {
                        echo $j, chr($k), chr($l), chr($o), $p . PHP_EOL;
                        return;
                    }
                }
            }
        }
    }
}

//$a = intval(readline());
//$b = readline();
//$c = readline();
//$d = readline();
//$e = intval(readline());
//$n = intval(readline());
//
//$counter = 0;
//
//for ($j = $a; $j <= 99; $j++) {
//    for ($k = $b; $k <= 'Z' && $k != 'AA'; $k++) {
//        for ($l = $c; $l <= 'z' && $l != 'aa'; $l++) {
//            for ($o = $d; $o <= 'Z' && $o != 'AA'; $o++) {
//                for ($p = $e; $p >= 10; $p--) {
//                    if ($j % 10 == 2 && $p % 10 == 5) {
//                        $counter += 1;
//                    }
//                    if ($counter == $n) {
//                        echo $j, $k, $l, $o, $p;
//                        return;
//                    }
//                }
//            }
//        }
//    }
//}