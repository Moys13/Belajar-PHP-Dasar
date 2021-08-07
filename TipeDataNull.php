<?php

// Membuat variabel menjadi Null/kosong
$nama = "Bagas";
$nama = null;

$umur = null;

echo "Nama : ";
echo $nama;
echo "\n";

echo "Umur : ";
echo $umur;
echo "\n";

echo "apakah variabel ini Null? ";
echo is_null($nama);
echo "\n";

// menghapus variabel
$bagas = "wismoyo";
unset($bagas);

$bagas = "laksono";

var_dump(isset($bagas));//mengecek variabel bisa menggunakan Isset karena lebih efektif.