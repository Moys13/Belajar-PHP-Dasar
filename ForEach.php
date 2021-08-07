<?php

// menggnakan For tidak menggunakan ForEach
$nama = ["Bagas", "indah", "Wahyuni"];

for($i = 0; $i < count($nama); $i++){
    echo "hello $nama[$i]" . PHP_EOL;
}

// Menggunakan Foreach
foreach($nama as $namadiri){
    echo "Hallo $namadiri" . PHP_EOL;
}

$orang = [
    "nama depan" => "Indah",
    "nama tangah" => "Dwi",
    "nama belakang" => "Wahyuni"
];
foreach($orang as $key => $Value){
    echo "$key = $Value" . PHP_EOL;
}