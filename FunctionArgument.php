<?php

function sayhai($nama, $umur)
{
    echo "hai $nama umur anda $umur" . PHP_EOL;
}

sayhai("baba", 19);
sayhai("Indah", 21);

// Default Argument Value
function haisaya($nama = "anonymous", $umur = "anonymous")
{
    echo "hai $nama umur anda $umur" . PHP_EOL;
}

haisaya();
haisaya("Indah", 21);

// type declaration

function jumlah(int $first, int $last) {
    $total = $first + $last;
    echo "total dari $first + $last = $total" . PHP_EOL;
}

jumlah(12, 12);
jumlah("50", "50");
jumlah(true, false);

// Variabel Lenght argument List
function jumlahsemua(...$values)
{
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "total " . implode(",", $values ) . "= $total" . PHP_EOL;
}

$coba = [1,2,3,4,6];

jumlahsemua(1,2,3,4,5);
jumlahsemua(...$coba);