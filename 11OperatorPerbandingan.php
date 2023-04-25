<?php
// Operator Perbandingan
// digunakan untuk membandingkan dua buah value 
// hasil dari operator Perbandingan adalah boolean, 
// true jika Perbandingannya benar
// false jka Perbandingannya salah.

var_dump("12" == 12); //sama dengan (true jika sama dengan tanpa tipe data)
var_dump("12" === 12); //identik (true jika sama dengan dan memiliki tipe data sama)
var_dump("12" != 12); //tidak sama dengan (true jika tidak sama dengan tanpa tipe data)
var_dump("12" <> 12); //tidak sama dengan (true jika tidak sama dengan tanpa tipe data) sama halnya dengan !=
var_dump("12" !== 12); //tidak identik (true jika tidak sama atau tidak sama tipe data)
var_dump("12" < 12); //true jika kurang dari
var_dump("12" <= 12); //rue jika kurang dari atau sama dengan
var_dump("12" > 12); //true jika lebih dari
var_dump("12" >= 12); //true jika lebih dari atau sama dengan