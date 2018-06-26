<?php

$n = intval(readline());
 
for ($a = 1; $a <= 9; $a++) {
    for ($b = 9; $b >= $a; $b--) {
        for ($c = 0; $c <= 9; $c++) {
            for ($d = 9; $d >= $c; $d--) {
                if (($a + $b + $c + $d == $a * $b * $c * $d) && $n % 10 == 5) {
					echo $a . $b . $c . $d; 
					return;    
                }
                if((floor($a * $b * $c * $d / ($a + $b + $c +$d)) == 3) && $n % 3 == 0) {
					echo $d . $c . $b . $a; 
					return;
                }              
            }
        }
    }  
}
echo "Nothing found";