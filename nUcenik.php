<?php

class nUcenik {
    protected $ime;            // string
    protected $prezime;        // string
    protected $prosjek_ocjena; // float

    public function getIme()
    {
        return $this->ime;
    }

    public function getPrezime()
    {
        return $this->prezime;
    }

    public function getProsjekOcjena()
    {
        return $this->prosjek_ocjena;
    }

    public function setIme($ime): void
    {
        $this->ime = $ime;
    }

    public function setPrezime($prezime): void
    {
        $this->prezime = $prezime;
    }

    public function setProsjekOcjena($prosjek_ocjena): void
    {
        $this->prosjek_ocjena = $prosjek_ocjena;
    }
}