<?php

class Test {
    protected $a;
    protected $novac;
    protected $studenti = array();

    public function getStudenti(): array
    {
        return $this->studenti;
    }

    public function getNovac()
    {
        return $this->novac;
    }

    public function getA()
    {
        return $this->a;
    }

    public function setStudenti(array $studenti): void
    {
        $this->studenti = $studenti;
    }

    public function setNovac($novac): void
    {
        $this->novac = $novac;
    }

    public function setA($a): void
    {
        $this->a = $a;
    }

}