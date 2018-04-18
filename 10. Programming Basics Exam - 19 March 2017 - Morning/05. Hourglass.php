<?php 

$n = intval(readline());
$rowLenght = 2 * $n + 1;

$firstLastRow = str_repeat('*', 2 * $n + 1);
echo "$firstLastRow\n";

$upRowOut = str_repeat('.',1);
$upRowIn = str_repeat(' ', $rowLenght-4);
echo "$upRowOut*"."$upRowIn"."*$upRowOut"."\n";

for ($i = 0; $i < $n-2; $i++){
    $dot = str_repeat('.', 2 + $i);
    $atSign = str_repeat('@', $rowLenght - 6-$i*2);
    
    echo "$dot*" . "$atSign" . "*$dot" . "\n";
}

$midRow = str_repeat('.', $n);
echo "$midRow".'*'."$midRow\n";
        
  for ($i = 0; $i < $n-2; $i++){
    $dot = str_repeat('.',$n - 1 - $i);
    $spaces = str_repeat(' ', $i);
    
    echo "$dot*" . "$spaces" .'@'. "$spaces" . "*$dot" . "\n";
}      
        
$upRowOut = str_repeat('.',1);
$upRowIn = str_repeat('@', $rowLenght-4);
echo "$upRowOut*"."$upRowIn"."*$upRowOut"."\n";
echo "$firstLastRow\n";