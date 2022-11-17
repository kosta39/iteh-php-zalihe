<?php

include('../MODELS/Zalihe.php');

$zalihe = new Zalihe(null, $_POST['proizvod_id'], $_POST['merna_jedinica'], $_POST['kolicina']);

$zalihe->sacuvajZalihe($zalihe);
