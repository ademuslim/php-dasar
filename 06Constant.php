<?php
// di PHP tidak ada variable yg immutable
// untuk membuat variable yg immuteble menggunakan define("NAMA-VARIABLE","Isi Variable")
// best prastice untuk nama define menggunakan UPPERCASE

define("NAMA", "Ade Muslim");
define("UMUR", 26);

echo "Nama: ";
echo NAMA;
echo "\nUmur: ";
echo UMUR;

