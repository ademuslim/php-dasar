<?php
// Tipe Data Array
// array adalah tipe data yang berisikan kosong atau banyak data 
// array di PHP bisa berisikan data dengan jenis berbeda-beda 
// memiliki panjang dinamis, bisa menambahkan sebanyak-banyaknya.

// cara pertama
$values = array(10, 1, 2, 3);
var_dump($values);

// cara kedua
$nama = ["ade","muslim"];
var_dump($nama);

//mengambil data array berdasarkan index
var_dump($nama[1]);

// menambah data ke dalam array
$nama[] = "sobari";
var_dump($nama);

// menghapus data array (data dan index data hilang)
unset($nama[2]);
var_dump($nama);

// menghitung banyak data dalam array
echo "Banyak data dalam array nama: ";
var_dump(count($nama));

// Array Sebagai map
// di kebanyakan bahasa pemrograman terdapat tipe data bernama Map
// yaitu asosiasi antara key dan value
// namun di PHP, Map bisa dibuat menggunakan Array
// secara default arrau akan menggunakan index (number) sebagai key dan value nya
// bisa bebas memasukan data ke dalam array
// juga bisa mengubah index nya menggunakan number dan menggunakan tipe data lain.
echo "\nArray Sebagai Map\n";

// 1
$data = array(
    "id" => "001",
    "username" => "ade12",
    "fullname" => "Ade Muslim"
);
var_dump($data);

// 2
$data2 = [
    "id" => "001",
    "nama" => "Ade Muslim",
];
var_dump($data2);

// mengakses array sebagai map
var_dump($data2["nama"]);


