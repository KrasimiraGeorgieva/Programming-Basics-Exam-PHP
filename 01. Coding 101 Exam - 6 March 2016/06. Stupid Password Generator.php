<?php

$n = intval(readline());

$l = intval(readline());

for ($i1 = 1; $i1 < 1 + $n; $i1++)
{
    for ($i2 = 1; $i2 <1 + $n; $i2++)
    {
        for ($i3 = ord('a'); $i3 <(ord('a') + $l); $i3++)
        {
            for ($i4 = ord('a'); $i4 < (ord('a') + $l); $i4++)
            {
                for ($i5 = (max($i1,$i2) + 1); 
                    $i5 <(1 + $n); 
                    $i5++){
                    echo(""."$i1$i2".chr($i3).chr($i4)."$i5"." ");
                }
            }
        }
    }
}
echo "\n";