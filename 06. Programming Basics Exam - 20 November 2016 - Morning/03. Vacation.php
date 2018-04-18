<?php

$oldPeopleNum = intval(readline());
$studentsNum = intval(readline());
$nightsNum = intval(readline());
$typeTransport = strtolower(readLine());

$priceTransportOldPeople = null;
$priceTransportStudent = null;

if ($typeTransport == "train") {
    if (($oldPeopleNum + $studentsNum) >= 50) {
        $priceTransportOldPeople = $oldPeopleNum * 24.99 * 2;
        $priceTransportOldPeople -= $priceTransportOldPeople * 0.50;

        $priceTransportStudent = $studentsNum * 14.99 * 2;
        $priceTransportStudent -= $priceTransportStudent * 0.50;
    } else {
        $priceTransportOldPeople = $oldPeopleNum * 24.99 * 2;
        $priceTransportStudent = $studentsNum * 14.99 * 2;
    }
} else if ($typeTransport == "bus") {
    $priceTransportOldPeople = $oldPeopleNum * 32.50 * 2;
    $priceTransportStudent = $studentsNum * 28.50 * 2;
} else if ($typeTransport == "boat") {
    $priceTransportOldPeople = $oldPeopleNum * 42.99 * 2;
    $priceTransportStudent = $studentsNum * 39.99 * 2;
} else if ($typeTransport == "airplane") {
    $priceTransportOldPeople = $oldPeopleNum * 70.00 * 2;
    $priceTransportStudent = $studentsNum * 50.00 * 2;
}

$hotelPrice = $nightsNum * 82.99;
$comission = ($priceTransportOldPeople + $priceTransportStudent + $hotelPrice) * 0.10;

$totalPrice = $priceTransportOldPeople + $priceTransportStudent + $hotelPrice + $comission;

printf("%.2f\n", $totalPrice);