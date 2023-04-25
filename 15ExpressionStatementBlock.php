<?php
// EXPRESSION
// expression bagian terpenting di PHP
// di PHP, hampir semua kode yg di tulis adalah sebuah expression
// secara sederhana, expression adalah apapun yg memiliki nilai atau value

$a = 5;
$b = $a;
// contoh expression sederhana
// $a = 5; ketika kita menuliskan "5", maka tentu itu adalah nilai,
// oleh karena itu 5 tersebut adalah expression.
// $b = $a; $a bisa dibilang adalah expression, karena $a adalah nilai 5


function getValue(){
    return 100;
}

$value = getValue();
// contoh expression complex
// getValue() adalah expression, karena getValue() bernilai angka 100


// STATEMENT
// statement bisa dibilang adalah kalimat lengkap dalam bahasa.
// sebuah statement berisikan execution komplit, biasanya diakhiri dengan titik koma
$nama = "Ade Muslim"; //sebuah statement (terdiri dari expression)


// BLOCK
// block adalah kumpulan statement yg terdiri dari nol atau lebih statement.
// block diawali dan diakhiri dengan kurung kurawal {}
function runApp($nama){
    echo "Start Program" . PHP_EOL;
    echo "Hello $nama" . PHP_EOL;
    echo "End Program" . PHP_EOL;
}