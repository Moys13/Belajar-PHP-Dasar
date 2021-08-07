<?php

$awal = [
    "first_name" => "Wismoyo"
];

$akhir = [
    "last name" => "Bagas"
];

$gabung = $awal + $akhir;
var_dump($gabung);

$a = [
    "first_name" => "indah",
    "last_name" => "dwi"
];
$b = [
    "last_name" => "dwi",
    "first_name" => "indah"
];

var_dump($a == $b);
var_dump($a === $b);