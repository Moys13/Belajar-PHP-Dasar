<?php

// goto akan berpindah atau melompat kode
goto a;
echo "Hello bagas" . PHP_EOL;

a:
echo "Hello Indah" . PHP_EOL;

$hitung = 1;
while(true){
    echo "nomor $hitung" . PHP_EOL;
    $hitung++;
    if($hitung > 10){
        goto end;
    }
}

end:
echo "berhenti" . PHP_EOL;