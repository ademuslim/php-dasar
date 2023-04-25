<?php
// Operator Penugasan
// Operator penugasan di PHP sama seperti bahasa pemrograman lain,
// yaitu dengan menggunakan karakter = (sama dengan).
// sering digunakan terutama ketika mengubah value sebuah variable
// juga bisa digunakan untuk operasi aritmatika.

$total = 0;

$pensil = 5000;
$buku = 10000;
$pulpen = 5000;

// $total = $total + $pensil;
// $total = $total + $buku;
// $total = $total + $pulpen;
// var_dump($total);

// dengan operator penugasan
$total += $pensil;
$total += $buku;
$total += $pulpen;
var_dump($total);

