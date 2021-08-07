<?php

function sum(int $awal, int $akhir): int
{
    $total = $awal + $akhir;
    return $total;
}

$hasil = sum(15, 15);
var_dump($hasil);

function hasilNilai(int $nilai): string
{
    if($nilai >= 80){
        return "A";
    }elseif($nilai >= 70){
        return "B";
    }
    elseif($nilai >= 60){
        return "C";
    }elseif($nilai >= 50){
        return "D";
    }else{
        return "E";
    }
}

$ujian = hasilNilai(65);
var_dump($ujian);