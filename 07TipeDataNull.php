<?php
// nilai NULL merepresentasikan sebuah variable tanpa nilai.
// saat membuat variable, lalu ingin menghapus data yg terdapat divariable tsb,
// bisa menggunakan NULL untuk mengosongkan variable tsb.
// untuk membuat data NULL bisa menggunakan kata kunci NULL(case insensitive)

$nama = "ade";
$nama = null;

$umur = null;

echo "Nama: ".$nama."\n";
echo "Umur: ".$umur;

// mengecek apakah variable null
echo "\nApakah variable nama null: ";
var_dump(is_null($nama));

echo "\n";

// menghapus variable. unset($nama_variable)
$tes = null;
unset($tes);
// echo $tes; error undefined variable $tes

// mengecek apakah ada variable dan nilai nya tidak null
echo "\nApakah ada variable tes dan nilainya null: ";
var_dump(isset($tes));