<?php
// Operator Logika
// untuk membandingkan dua nilai boolean
// hasil dari operator logika adalah boolean lagi

$a = true; $b = true;
var_dump($a && $b); //and (true jika keduanya true)
var_dump($a and $b); //and
var_dump($a || $b); //or (true jika salah satu atau keduanya true
var_dump($a or $b); //or
var_dump(!$a); //not (true jika $a bernilai false)
var_dump($a xor $b); //xor (true jika $a dan $b salah satu true, tapi tidak keduanya)
