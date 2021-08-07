<?php

// Tanpa menggunakan Null Coalescing Operator
$data = [
    "action" => "Create"
];

if(isset($data["action"])){
    $hasil = $data["action"];
}else{
    $hasil = "Nothing";
}

echo $hasil . PHP_EOL;

// Menggunakan Null Coalescing Operator
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;