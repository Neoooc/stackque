<?php

include ("Stack.php");
$s = new Stack();

$file = ("C:\Beni\OneDrive - Visoko uciliste Algebra\Benjamin_Babić_1RM2\Programiranje\PHP\Primjeri_Ispitnih_Pitanja\M2_Primjeri_Ispitnih_Pitanja\I6_Upis_Stringova_u_txt_Stack_Zarezi.txt");
$fp = fopen($file, "w");

for ($i = 0; $i < 5; $i++){
    $string_input = readline("Unesi $i. string: ");
    $s->Push($string_input);
}

$last = $s->getLastKey(); // poziva metodu za dobivanje zadnjeg kljuca stacka
$counter = 0;             // pomocna varijabla za provjeru

while($xyz = $s->Pop())
{
    if ($last > $counter){
        fwrite($fp, $xyz . ", "); // ako nije zadnji pisi zarez iza podatka
        $counter++;
    } else {
        fwrite($fp, $xyz);        // ako je zadnji neomj pisat zarez
    }
}