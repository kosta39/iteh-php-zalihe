<?php

include('../MODELS/Zalihe.php');

$zalihe = new Zalihe(null, null, null, null);

$data = $zalihe->searchZalihe($_POST['naziv']);


while ($z = mysqli_fetch_assoc($data)) {
?>
    <tr>
        <td><?php echo $z['naziv'] ?></td>
        <td><?php echo $z['sifra'] ?></td>
        <td><?php echo $z['opis'] ?></td>
        <td><?php echo $z['cena'] ?>.00</td>
        <td><?php echo $z['merna_jedinica'] ?></td>
        <td><?php echo $z['kolicina'] ?></td>
        <td><button type="button" class="btn btn-dark" value="<?php echo $z['id'] ?>" id="obrisi-zalihe-dgm">DELETE</button></td>
    </tr>

<?php } ?>