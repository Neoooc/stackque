<?php

// Napišite program koji od korisnika učitava 5 brojeva i upisuje ih u datoteku, svaki u svoj red.

$fp = fopen("C:\Beni\OneDrive - Visoko uciliste Algebra\Benjamin_Babić_1RM2\Programiranje\PHP\Primjeri_Ispitnih_Pitanja\M2_Primjeri_Ispitnih_Pitanja\I6_Upis_Brojeva_u_txt_Svaki_Red.txt", "w");

for($i = 1; $i <= 5; $i++)
{
    $b = readline("Upisi " . $i . ". broj: ");

    fwrite($fp, $b . "\n");
}

fclose($fp);

?>