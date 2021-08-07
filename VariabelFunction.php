<?php

function indah()
{
echo "Saya Indah" . PHP_EOL;
}

function baba()
{
echo "Saya Baba" . PHP_EOL;
}

$inisapa = "indah";
$inisapa();
$inisapa = "baba";
$inisapa();

function sayHello(string $nama, $filter)
{
    $finalname = $filter($nama);
    echo "Hello $finalname" . PHP_EOL; 
}

function sample(string $nama): string
{
    return "sample $nama";
}

sayHello("baba", "sample");
sayHello("baba", "strtoupper"); //Menjadi huruf besar
sayHello("baba", "strtolower"); //Menjaadi huruf kecil


