<?php

class GradDrzava{
    protected $naziv_grada;  // string
    protected $naziv_drzave; // string

    public function getNazivDrzave()
    {
        return $this->naziv_drzave;
    }

    public function getNazivGrada()
    {
        return $this->naziv_grada;
    }

    public function setNazivDrzave($naziv_drzave): void
    {
        $this->naziv_drzave = $naziv_drzave;
    }

    public function setNazivGrada($naziv_grada): void
    {
        $this->naziv_grada = $naziv_grada;
    }
}