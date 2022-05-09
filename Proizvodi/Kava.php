<?php

// Kava.php    | TESTNI ili POČETNI PROIZVOD koji služi da napravimo početnu logiku za apstraktnu klasu

class Kava extends ABSClassProizvod {
    // protected $naziv = "Kava"; NE RADITI !!!
    protected $opcije = array(); // Pretpostavljamo više opcija

    // Čim se instancira klasa obavi settere u konstruktoru
    function __construct()
    {
        $this->setNaziv("Kava");
        $this->setCijena("5");
    }

    public function getCijena()
    {
        return $this->cijena;
    }

    public function getNaziv()
    {
        return $this->naziv;
    }

    public function setCijena($cijena)
    {
        $this->cijena = $cijena;
    }

    public function setNaziv($naziv)
    {
        $this->naziv = $naziv;
    }


    public function getOpcije()
    {
        return $this->opcije;
    }

    public function setOpcije($opcije)
    {
        $this->opcije[] = $opcije;
        // $this->opcije[] = $opcije; ?
    }

}