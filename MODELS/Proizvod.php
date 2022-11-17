<?php

class Proizvod
{
    public $id;
    public $naziv;
    public $sifra;
    public $opis;
    public $cena;


    public function __construct($id = null, $naziv = null, $sifra = null, $opis = null, $cena = null)
    {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->sifra = $sifra;
        $this->opis = $opis;
        $this->cena = $cena;
    }


    public function sacuvajProizvod($proizvod)
    {
        $konekcija_baza = new mysqli("localhost", "root", "", "zalihe");

        $upit = "INSERT INTO proizvod (naziv, sifra, opis, cena) VALUES ('$proizvod->naziv', '$proizvod->sifra', '$proizvod->opis', '$proizvod->cena')";

        return $konekcija_baza->query($upit);
    }
}
