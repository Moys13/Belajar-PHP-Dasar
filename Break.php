<?php

$hitung = 1;

while(true) {
    echo "while ke-$hitung" . PHP_EOL;
    $hitung++;

    if($hitung > 10){
        break;
    }
}