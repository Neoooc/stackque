<?php

class GradoviDrzave {
    protected array $lista_gradova_drzava;

    function __construct(){
        $this->Ucitaj();
        echo $this->Ispis();
    }

    function Ucitaj(){
        $filename = __DIR__ . "\\GradDrzava.csv";
        $file_array = file($filename);

        if(is_array($file_array))
        {
            foreach ($file_array as $key => $line)
            {
                if($key > 0){
                    $line = trim($line, "\n");
                    $line = trim($line, "\r");

                    $line_array = explode (";",$line);

                    $grad = $line_array[0];
                    $drzava = $line_array[1];

                    $test = new GradDrzava();
                    $test->setNazivGrada($grad);
                    $test->setNazivDrzave($drzava);

                    $this->lista_gradova_drzava[] = $test;
                }
            }
        }
    }

    function Ispis(){
        $ispis = '|--> Ispis Gradova i Drzava <--|' . "\n";
        foreach ($this->lista_gradova_drzava as $key => $grad_drz_objekt){
            $ispis .= $grad_drz_objekt->getNazivGrada() . " - ";
            $ispis .= $grad_drz_objekt->getNazivDrzave() . "\n";
        }
        return $ispis;
    }
}