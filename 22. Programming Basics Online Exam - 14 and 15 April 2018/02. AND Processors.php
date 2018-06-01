<?php
$processorsCount = intval(readline());
$employeesCount = intval(readline());
$workingDays = intval(readline());

$totalWorkingHours = $employeesCount * $workingDays * 8;
$processorsMade = floor($totalWorkingHours / 3);

if($processorsMade > $processorsCount){
    printf("Profit: -> %.2f BGN", ($processorsMade - $processorsCount) * 110.10);
} else {
    printf("Losses: -> %.2f BGN", ($processorsCount - $processorsMade) * 110.10);
}