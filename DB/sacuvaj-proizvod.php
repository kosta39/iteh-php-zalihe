<?php

include('../MODELS/Proizvod.php');

$proizvod = new Proizvod(null, $_POST['naziv'], $_POST['sifra'], $_POST['opis'], $_POST['cena']);

$proizvod->sacuvajProizvod($proizvod);
