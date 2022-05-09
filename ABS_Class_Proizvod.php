<?php

// ABSClassProizvod.php
// APSTRAKTNA KLASA

// APSTRAKTNA KLASA može imati zajednički programski kod
// Svi proizvodi imaju atribute naziv i cijena

abstract class ABSClassProizvod {
    protected $naziv;
    protected $cijena;

    abstract function getOpcije();
    abstract function setOpcije($param);

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
}