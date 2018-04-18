<?php

$n = intval(readline());

for ($one = 1; $one < 10; $one++){
    for ($two = 1; $two < 10; $two++){
        for ($three = 1; $three < 10; $three++){
            for ($four = 1; $four < 10; $four++){
                if ( $n % $one == 0 && 
                        $n % $two == 0 && 
                        $n % $three == 0 && 
                        $n % $four == 0){
                    echo"$one$two$three$four ";
                }
            }
        }
    }
}
echo "\n";