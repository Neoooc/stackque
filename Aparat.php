<?php

// Aparat.php

class Aparat
{
    protected $dostupni_proizvodi = array(); // Dohvati sve proizvode

    // Ako želimo ovo vrtiti cijelo vrijeme možemo unutar funckija na kraju pozivati iduće radnje
    function __construct() // Slagamo Lanac | Redoslijed radnji
    {
        $this->getDostupniProizvodi();
        $this->prikazProizvoda();
        $this->OdabirProizvoda();
    }

    function OdabirProizvoda() {

        do {
            $o = readline("Odaberite zeljeni proizvod: ");
        } while (!key_exists($o, $this->dostupni_proizvodi));

        // ili WHILE petlja pa BREAK

        $this->NaplataProizvoda($o);
        // Ili ovako ili napravimo atribut pa nam ne treba parametar u NaplatiProizvoda
    }

    function NaplataProizvoda($odabir) {
        $proizvod = $this->dostupni_proizvodi[$odabir];
        echo "Cijena: " . $proizvod->getCijena() . "\n";
    }


    // Prođi po dostupnim file-ovima u folderu proizvodi i prikaži što se može kupiti
    // Razdvoji na 1. dio = SKENIRAJ SVE i 2. dio ISPIS ODABIRA

    function prikazProizvoda() {
        if (is_array($this->dostupni_proizvodi)) {  // Primjer dobre prakse, provjeri je li array
            foreach ($this->dostupni_proizvodi as $key => $proizvod) {
                echo $key . " : " . $proizvod->getNaziv() . "\n";
            }
        }
    }

    // Mogli bi automatski pokrenuti => ubacimo u konstruktor
    function getDostupniProizvodi() {
        $files = scandir(__DIR__ . "\\Proizvodi");
        if(is_array($files)) { // Projeveri je li scandir odradio svoj posao, je li ovo stvarno array
            foreach ($files as $key => $filename){
                if ($filename != "." && $filename != ".."){
                    $filename_array = explode(".", $filename); // Odvoji ime i ekstenziju

                    // Uzmi to ime, npr file Kava.php => u $filename_array[0] ce bit Kava, a u $filename_array[1] ekstenzija php
                    $class = $filename_array[0];

                    //$ext = $filename_array[1];

                    // end     - vraća zadnji element polja
                    // current - vraća prvi element polja
                    $ext = end($filename_array);

                    if ($ext == "php"){
                        include (__DIR__ . "\\Proizvodi\\" . $filename);
                        $proizvod = new $class();
                        $this->dostupni_proizvodi[] = $proizvod;
                        // Ili spremi ime klase u polje ili spremi objekt u polje
                        // echo $proizvod->getNaziv();
                    }
                }
            }
        }
    }
}