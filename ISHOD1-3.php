<?php
/*
Napišite program koji s tipkovnice učitava cijeli broj A, 
te ispisuje dva zrcalna pravokutna trokuta od A redaka, 
razmaknuta točno jednim razmakom. Primjer za A = 7:
*/

$a = (int)readline("Unesite cijeli broj: ");



//
for ($j = 0; $j < $a; $j++) {

    for ($i = 0; $i < $j; $i++) {
        echo " ";
    }
    for ($i = $j; $i < $a; $i++) {
        echo "*";
    }

    echo " ";

    for ($i = 0; $i < $a-$j; $i++) {
        echo "*";
    }
    for ($i = $j; $i < $j; $i++) {
        echo " ";
    }
    echo "\n";

}


?>