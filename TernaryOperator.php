<?php

// Tanpa menggunakan Ternary Operator
$gender = "PRIA";
$hi = null;

if($gender == "PRIA"){
    $hi = "Hi Bro";
}else{
    $hi = "Hi Nona";
}

echo $hi . PHP_EOL;

// Ternary Operator
$hi = $gender == "PRIA" ? "Hi Bro" : "Hi Nona";

echo $hi . PHP_EOL;