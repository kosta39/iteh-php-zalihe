<?php

include('../MODELS/Zalihe.php');

$zalihe = new Zalihe(null, null, null, null);

$zalihe->obrisiZalihe($_POST['zalihe_id']);
