<?php

$sayhai = function (string $nama){
    echo "Hello $nama" . PHP_EOL;
};

$sayhai("bagas");

function sayGoodbaye(string $nama, $filter)
{
    $finalname = $filter($nama);
    echo "dadah $finalname" . PHP_EOL;
}

sayGoodbaye("bagas", function (string $nama): string {
    return strtoupper($nama);
});

$filterfunction = function (string $nama): string {
    return strtoupper($nama);
};

sayGoodbaye("bagas", $filterfunction);

$namadepan = "Indah";
$namabelakang = "Wahyuni";

$sayindah = function() use($namadepan, $namabelakang){
    echo "hello $namadepan $namabelakang" . PHP_EOL;
};

$sayindah();