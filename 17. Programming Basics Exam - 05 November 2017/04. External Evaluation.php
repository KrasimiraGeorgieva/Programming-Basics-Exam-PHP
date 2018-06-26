<?php

$studentsCount = intval(readline());

$poorMark = 0.0;
$satisfactoryMark = 0.0;
$goodMark = 0.0;
$veryGoodMark = 0.0;
$excellentMark = 0.0;

for($i = 0; $i < $studentsCount; $i++){
    $mark = floatval(readline());
    
    if($mark <= 22.5){
        $poorMark++;
    }elseif($mark > 22.5 && $mark <= 40.5){
        $satisfactoryMark++;
    }elseif($mark > 40.5 && $mark <= 58.5){
        $goodMark++;
    }elseif($mark > 58.5 && $mark <= 76.5){
        $veryGoodMark++;
    }elseif($mark > 76.5 && $mark <= 100.0){
        $excellentMark++;
    }
}

printf("%.2f%% poor marks\n", $poorMark / $studentsCount * 100);
printf("%.2f%% satisfactory marks\n", $satisfactoryMark / $studentsCount * 100);
printf("%.2f%% good marks\n", $goodMark / $studentsCount * 100);
printf("%.2f%% very good marks\n", $veryGoodMark / $studentsCount * 100);
printf("%.2f%% excellent marks\n", $excellentMark / $studentsCount * 100);