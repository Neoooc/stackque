<?php
/*
Napišite program koji korisniku omogućuje tri operacije: 
potenciranje, vađenje drugog korijena te izračun apsolutne vrijednosti. 
Pri izračunima koristiti ugrađene PHP matematičke funkcije. 
Neka korisnik upiše operaciju koju želi, neka upiše potrebne vrijednosti 
(ovisno o operaciji), a vi izračunajte te ispišite rezultat. 
Ponavljajte sve dok to korisnik želi
*/

$ponovi = true;
while($ponovi == true)
{
    echo "Odaberite matematicku operaciju: ";
    echo "\n";
    echo "(1) - Potenciranje";
    echo "\n";
    echo "(2) - Vađenje drugog korijena";
    echo "\n";
    echo "(3) - Izračun apsolutne vrijednosti";
    echo "\n";

    $odabir = readline("Napisite svoj izbor: ");

    if($odabir == "1")
        {
            $baza = readline("Upisite bazu: ");
            $eksponent = readline("Upisite eksponent: ");
            echo "Vas broj je: ";
            echo pow($baza, $eksponent);
            echo "\n";
        }

    if($odabir == "2")
        {
            $broj = readline("Upisite neki broj: ");
            echo sqrt($broj);
            echo "\n";
        }

    if($odabir == "3")
        {
            $broj2 = readline("Upisite neki broj: ");
            echo abs($broj2);
            echo "\n";
        }

    $q = readline("Zelite li nastaviti? (da/na) ");
    if ($q == "ne")
    {
        $ponovi = false;
    }
}




?>