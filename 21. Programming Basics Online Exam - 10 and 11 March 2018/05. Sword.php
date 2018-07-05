<?php

$n = intval(readline());
$lengthRow = (2 * $n) + 1;

printf("%s/^\%s", 
        str_repeat('#', $n - 1), 
        str_repeat('#', $n - 1));
echo "\n";

for($i = 0; $i < floor($n / 2); $i++){
    printf("%s.%s.%s", 
        str_repeat('#', $n - 2 - $i), 
        str_repeat(' ', 2 * $i + 3),
        str_repeat('#', $n - 2 - $i));
echo "\n";
}

printf("%s|%sS%s|%s", 
        str_repeat('#', ($n - 1) / 2), 
        str_repeat(' ', floor($n / 2)),
        str_repeat(' ', floor($n / 2)),
        str_repeat('#', ($n - 1) / 2));
echo "\n";

printf("%s|%sO%s|%s", 
        str_repeat('#', ($n - 1) / 2), 
        str_repeat(' ', floor($n / 2)),
        str_repeat(' ', floor($n / 2)),
        str_repeat('#', ($n - 1) / 2));
echo "\n";

printf("%s|%sF%s|%s", 
        str_repeat('#', ($n - 1) / 2), 
        str_repeat(' ', floor($n / 2)),
        str_repeat(' ', floor($n / 2)),
        str_repeat('#', ($n - 1) / 2));
echo "\n";

printf("%s|%sT%s|%s", 
        str_repeat('#', ($n - 1) / 2), 
        str_repeat(' ', floor($n / 2)),
        str_repeat(' ', floor($n / 2)),
        str_repeat('#', ($n - 1) / 2));
echo "\n";

$a = 0;
do{
  printf("%s|%s|%s", 
           str_repeat('#', floor($n - 1) / 2), 
           str_repeat(' ', $lengthRow - 2 - 2 * floor(($n - 1) / 2)),
           str_repeat('#', floor($n - 1) / 2));
   echo "\n";
  if($n == 4){
      break;
  } else {
      $a++;
  }    
}while($a < $n - 4);

/*
if($n == 4){
    for($i = 0; $i < $n - 3; $i++){
       printf("%s|%s|%s", 
           str_repeat('#', floor($n - 1) / 2), 
           str_repeat(' ', $lengthRow - 2 - 2 * floor(($n - 1) / 2)),
           str_repeat('#', floor($n - 1) / 2));
   echo "\n";
   }   
}else{
    for($i = 0; $i < $n - 4; $i++){
        printf("%s|%s|%s", 
            str_repeat('#', floor($n - 1) / 2), 
            str_repeat(' ', $lengthRow - 2 - 2 * floor(($n - 1) / 2)),
            str_repeat('#', floor($n - 1) / 2));
    echo "\n";
    }
}
 */
 
printf("%s|%sU%s|%s", 
        str_repeat('#', ($n - 1) / 2), 
        str_repeat(' ', floor($n / 2)),
        str_repeat(' ', floor($n / 2)),
        str_repeat('#', ($n - 1) / 2));
echo "\n";

printf("%s|%sN%s|%s", 
        str_repeat('#', ($n - 1) / 2), 
        str_repeat(' ', floor($n / 2)),
        str_repeat(' ', floor($n / 2)),
        str_repeat('#', ($n - 1) / 2));
echo "\n";

printf("%s|%sI%s|%s", 
        str_repeat('#', ($n - 1) / 2), 
        str_repeat(' ', floor($n / 2)),
        str_repeat(' ', floor($n / 2)),
        str_repeat('#', ($n - 1) / 2));
echo "\n";

printf("@%s@\n",str_repeat('=', $lengthRow - 2));
 
for($i = 0; $i < floor($n / 2); $i++){
    printf("%s|%s|%s", 
        str_repeat('#', floor(($n - 1) / 2) + 2), 
        str_repeat(' ', $lengthRow - 4 - (2 * floor(($n - 1) / 2) + 2)),
        str_repeat('#', floor(($n - 1) / 2) + 2));
echo "\n";
}
printf("%s\%s/%s", 
        str_repeat('#', floor(($n - 1) / 2) + 2), 
        str_repeat('.', $lengthRow - 4 - (2 * floor(($n - 1) / 2) + 2)),
        str_repeat('#', floor(($n - 1) / 2) + 2));
echo "\n";