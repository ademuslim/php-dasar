<?php

// single quote
echo 'Nama : ';
echo 'Ade Muslim';
echo '\n'; //single quote tidak bisa membuat enter

// double quote
echo "\n";

echo "nama\t: Ade Muslim\nHobi\t: Belajar Ngoding\n";

// multiline quote menggunakan heredoc (<<<)
echo <<<ADE
Selamat belajar PHP.
sekarang kita belajar tipe data string,
membuat string dengan heredoc

ADE;

// multiline quote menggunakan nowdoc (<<<'...')
echo <<<'ADE'
Selamat belajar PHP.
sekarang kita belajar tipe data string,
membuat string dengan nowdoc
berbeda dengan heredoc, nowdoc tidak bisa
parsing variable.
Semangaaaaatt!
ADE;
