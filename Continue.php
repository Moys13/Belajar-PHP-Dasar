<?php

for($hitung = 1; $hitung <=100; $hitung++){
    if($hitung % 2 == 0){
        continue;
    }
    echo "continue ke $hitung" . PHP_EOL;
}