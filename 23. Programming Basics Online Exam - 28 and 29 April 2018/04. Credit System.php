<?php

$countCourses = intval(readline());
$totalGrades = null;
$totalCredits = null;

for($i = 0; $i < $countCourses; $i++){
    $current = intval(readline());
    //103
    $grade = $current % 10;
    //echo $grade . "\n"; // 3
    $credits = intval($current / 10); 
    //echo $credits; // 10
    
    if($grade == 2){
        $totalGrades = $totalGrades + 2;
    } elseif($grade == 3){
        $totalGrades += 3;
        $totalCredits +=  (0.5 * $credits);
    }elseif($grade == 4){
        $totalGrades += 4;
        $totalCredits +=  (0.7 * $credits);
    }elseif($grade == 5){
        $totalGrades += 5;
        $totalCredits += (0.85 * $credits);
    }elseif($grade == 6){
        $totalGrades += 6;
        $totalCredits += $credits;
    }   
}

printf("%.2f" . PHP_EOL, $totalCredits);
printf("%.2f", $totalGrades / $countCourses);