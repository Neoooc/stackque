<?php

class nUcenici {
    protected array $lista_ucenika; // lista objekata tipa nUcenik

    function __construct()
    {
        $this->Unos();
        echo $this->getNajbolji();
    }

    function Unos() {
        $upit = readline("Koliko ucenika zelite unijeti: ");

        for ($i = 1; $i <= $upit; $i++){
            $ime = readline("Unesi ime: ");
            $prezime = readline("Unesi prezime: ");
            $prosjek_ocjena = readline("Unesi prosjek ocjena: ");

            $test = new nUcenik();
            $test->setIme($ime);
            $test->setPrezime($prezime);
            $test->setProsjekOcjena($prosjek_ocjena);

            $this->lista_ucenika[] = $test;
        }
    }

    function getNajbolji(){
        $najveci = 0;
        $ime_najboljeg = '';
        $prezime_najboljeg = '';
        $ispis = '|--> Najbolji Ucenik <--|' . "\n";
        foreach ($this->lista_ucenika as $key => $ucenik){
            if ($ucenik->getProsjekOcjena() > $najveci){
                $najveci = $ucenik->getProsjekOcjena();
                $ime_najboljeg = $ucenik->getIme();
                $prezime_najboljeg = $ucenik->getPrezime();
            }
        }
        $ispis .= "Najbolji Ucenik: " . $ime_najboljeg . " " . $prezime_najboljeg . "\n";
        $ispis .=  "Prosjek: " . $najveci;

        return $ispis;
    }
}

