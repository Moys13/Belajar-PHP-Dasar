<?php

$Angka = array(1, 2, 4, 5, 6);
var_dump($Angka);

$Nama = ["wismoyo", "bagas", "laksono"];
var_dump($Nama);

var_dump($Nama[2]);

// mengubah index array
$Nama[1] = "Baba";
var_dump($Nama);

// menghapus index sekaligus data pada Array
unset($Nama[0]);
var_dump($Nama);

// menambahkan Indes pada Array di index terakhir
$Nama[] = "indah";
var_dump($Nama);

//Menghitung jumlah data pada Array
var_dump(count($Nama));


// MAP
$info = [
    "nama" => "Indah",
    "umur" => "21",
    "tinggi" => 55
];
var_dump($info);
var_dump($info["nama"]);

$indah = [
    "nama" => "indah",
    "umur" => 21,
    "alamat" => [
        "kota" => "tangerang",
        "negara" => "indonesia"
    ]
];
var_dump($indah);
var_dump($indah["alamat"]["kota"]);