<?php

$n = intval(readline());
$wCol = 3 * $n;
$help = 0;

for ($i = 0; $i < $n; $i++){
    printf("%s/%s\\%s ", 
	str_repeat('.', ($wCol - 2 - $help )/2), 
	str_repeat(' ', $help), 
	str_repeat('.', ($wCol - 2 - $help )/2));
    echo "\n";
    $help += 2;
}
printf("%s%s%s", 
str_repeat('.', floor($n/2)), 
str_repeat('*', 2*$n), 
str_repeat('.', floor($n/2)));
echo "\n";

for ($t = 0; $t < 2*$n; $t++){
    printf("%s|%s|%s", 
	str_repeat('.',$n/2), 
	str_repeat('\\', $n*2-2), 
	str_repeat('.',$n/2));
    echo "\n";
}
for ($b = $n/2; $b > 0; $b--){
    printf("%s/%s\\%s", 
	str_repeat('.', $b), 
	str_repeat('*', ($wCol - 2*$b)-2 ), 
	str_repeat('.', $b));
    echo "\n";
}