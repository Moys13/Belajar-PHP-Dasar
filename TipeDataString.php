<?php

echo 'Nama : ';
echo 'Wismoyo Bagas Laksono.';
echo "\n";//<==jika mengunakan petik 1 (') tidak bisa.

echo "Nama : ";
echo "Wismoyo\t Bagas\t Laksono. \n";

// HEREDOC
//Tag bisa apa saja selain (TEXT)!
echo <<<TEXT
ini adalah Heredoc bisa mekalukan 
text tanpa ribet dan ini adalah
cara ke -3 membuat string.

TEXT;

// NOWDOC
echo <<<'TEXT'
ini adalah Nowdoc bisa mekalukan 
text tanpa ribet dan ini adalah
cara ke -4 membuat string.
TEXT;