<?php
// Operator Increment dan Decrement
// PHP mendukung gaya bahasa pemrograman C untuk menaikkan
// dan menurunkan data number sejumlah 1 anggka
// Ini bisa mempersingkat kita ketika ingin menaikkan data
$a = 10;
$b = 12;

$a++; //post increment (kembalikan $a lalu naikkan 1 angka)
var_dump($a);

++$b; //pre increment (naikkan $b satu angka, lalu kembalikan $b)
var_dump($b);

$a--; //post decrement (kembalikan $a lalu turunkan 1 angka)
var_dump($a);
--$a; //pre decrement (turunkan $a satu angka, lalu kembalikan $a)
var_dump($a);

$x = 10;

$y = $x++;
var_dump($y); //hasil $y tetap 10

$i = 10;
$j = ++$i;
var_dump($j); //hasil $j menjadi 11