<?php

class Zalihe
{
    public $id;
    public $proizvod_id;
    public $merna_jedinica;
    public $kolicina;


    public function __construct($id = null, $proizvod_id = null, $merna_jedinica = null, $kolicina = null)
    {
        $this->id = $id;
        $this->proizvod_id = $proizvod_id;
        $this->merna_jedinica = $merna_jedinica;
        $this->kolicina = $kolicina;
    }

    public function sacuvajZalihe($zalihe)
    {
        $konekcija_baza = new mysqli("localhost", "root", "", "zalihe");

        $upit = "INSERT INTO zalihe (proizvod_id, merna_jedinica, kolicina) VALUES ('$zalihe->proizvod_id', '$zalihe->merna_jedinica', '$zalihe->kolicina')";

        return $konekcija_baza->query($upit);
    }



    public function vratiSveZalihe()
    {
        $konekcija_baza = new mysqli("localhost", "root", "", "zalihe");

        $upit = "SELECT proizvod.naziv, proizvod.sifra, proizvod.opis, proizvod.cena, zalihe.id, zalihe.merna_jedinica, zalihe.kolicina
                FROM proizvod JOIN zalihe ON proizvod.id = zalihe.proizvod_id";

        return $konekcija_baza->query($upit);
    }


    public function obrisiZalihe($id_zalihe)
    {
        $konekcija_baza = new mysqli("localhost", "root", "", "zalihe");

        $upit = "DELETE FROM zalihe WHERE id=" . $id_zalihe;

        return $konekcija_baza->query($upit);
    }


    public function sortirajZalihe($kolona, $sort)
    {
        $konekcija_baza = new mysqli("localhost", "root", "", "zalihe");

        $upit = "SELECT proizvod.naziv, proizvod.sifra, proizvod.opis, proizvod.cena, zalihe.id, zalihe.merna_jedinica, zalihe.kolicina
                FROM proizvod JOIN zalihe ON proizvod.id = zalihe.proizvod_id
                ORDER BY " . $kolona . " " . $sort . "";


        return $konekcija_baza->query($upit);
    }



    public function searchZalihe($naziv)
    {
        $konekcija_baza = new mysqli("localhost", "root", "", "zalihe");

        $upit = "SELECT proizvod.naziv, proizvod.sifra, proizvod.opis, proizvod.cena, zalihe.id, zalihe.merna_jedinica, zalihe.kolicina
                FROM proizvod JOIN zalihe ON proizvod.id = zalihe.proizvod_id
                WHERE proizvod.naziv LIKE '%" . $naziv . "%' OR proizvod.sifra LIKE '%" . $naziv . "%'";


        return $konekcija_baza->query($upit);
    }
}
