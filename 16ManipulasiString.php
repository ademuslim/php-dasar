<?php
// Dot Operator
// Dot(titik) operator adalah operator yg bisa digunakan untuk menambahkan string
// dengan data lain (bisa string atau tipe data lainnya)
// Debenarnya bisa menggunakan + (plus) untuk menambahkan string,
// namun jika menambahkan string dengan tipe data number, maka akan terjadi error.
// di rekomendasikan menggunakan dot untuk menambahkan string dengan data lain.

$nama = "Ade Muslim";

echo "Nama : " . $nama . PHP_EOL; //php en of line (\n)
echo "Value : " . 100 . PHP_EOL;

// Konversi ke Number dan Sebaliknya
// untuk melakukan konversi menggunakan tanda kurung (tipe data)
// tipe data untuk string adalah string, untuk number bisa menggunakan
// int untuk integer dan float untuk floating point
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

$valueInt = (int)"salah"; //jika datanya tidak valid maka hasilnya 0
var_dump($valueInt);

// Mengakses Karakter
// string di PHP seperti array karakter, dimana bisa mengakses data 
// tiap karakternya menggunakan kurung siku 
// sama seperti di array, index pertama di mulai dari 0,
// jika kita mengakses index melebihi karakter di string, maka akan terjadi error.
$nama ="Ade";
echo $nama[1];

echo PHP_EOL;

//Variable Parsing
// khusus string menggunakan double quote atau heredoc, kita bisa menggunakan
// karakter $ untuk mengakses variable.
// ini memudahkan ketika ingin menggabungkan string dengan variable.
// cara penggunaannya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variable nya.
$nama = "Ade Muslim";
echo "Hello $nama, Selamat Belajar" . PHP_EOL;

// Curly Brace
// kadang kita butuh menggabungkan bariable dengan string tanpa ada spasi.
// hal ini akan menyulitkan jika hanya menggunakan variable parsing.
// bisa menambahkan kurung kurawal sebelum menggunakan variable parsing.
$var = "var";
echo "This is {$var}s" . PHP_EOL;