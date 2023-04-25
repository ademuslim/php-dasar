<?php

// Operator Array
// Array memiliki operator khusus
// mirip dengan operator-operator sebelumnya,
// tapi cara kerjanya sedikit berbeda.

$a = [
    "first_name" => "ade"
];

$b = [
    "first_name" => "sobari", //jika bentrok akan di hiraukan
    "last_name" => "muslim"
];

$c = $a + $b; //union (menggabungkan array $a dan $b)
var_dump($c);


$i = [
    "first_name" => "ade",
    "last_name" => "muslim"
];

$j = [
    "last_name" => "muslim",
    "first_name" => "ade"
];
$k = $i == $j; //equality (true jika $i dan $j memiliki key-value sama)
var_dump($k);

$x = $i === $j; //identity (true jika $i dan $j memiliki key-value sama dan posisi sama)
var_dump($x);


$a != $b; //inequality (true jika $a dan $b tidak sama)
$a <> $b; //inequality (sama halnya dengan !=)
$a !== $b; //nonidentity (true jika $a dan $b tidak identik)