<?php

$leva = floatval(readline());
$averageGrade = floatval(readline());
$minumSalary = floatval(readline());

if ($averageGrade <= 4.50){
    echo "You cannot get a scholarship!";
} elseif ($averageGrade > 4.50 && $averageGrade < 5.50) {
    if ($leva > $minumSalary){
        echo "You cannot get a scholarship!";
    } else {
        printf("You get a Social scholarship %d BGN \n", (floor(0.35 * $minumSalary)));
    }
} elseif ($averageGrade >= 5.50){
    if ($leva < $minumSalary){
        $excelentScolarship1 = 0;
        $excelentScolarship2 = 0;

        $excelentScolarship1 = floor($averageGrade * 25);
        $excelentScolarship2 = floor(0.35 * $minumSalary);

        $scolarship = max($excelentScolarship1, $excelentScolarship2);

        if ($excelentScolarship1 == $scolarship){
            printf("You get a scholarship for excellent results %d BGN \n", $scolarship);
        } elseif ($excelentScolarship2 == $scolarship)
        {
            printf("You get a Social scholarship %d BGN \n", $scolarship);
        }
    } else {
        $scolarship = floor($averageGrade * 25);
       printf("You get a scholarship for excellent results %d BGN \n", $scolarship);
    }
}