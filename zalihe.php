<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <title>ITEH PHP MYSQL AJAX</title>
</head>

<body>

    <?php
    include('MODAL/ModalZalihe.php');
    ?>

    <div class="div-index">

        <h1 class="index-naslov">PHP MYSQL AJAX - Domaći zadatak</h1>


        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#nova-zaliha-modal" id="nova-zaliha-dgm">Unesi nove zalihe</button>



        <table id="table-zalihe" class="table table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>Naziv proizvoda</th>
                    <th>Šifra</th>
                    <th>Opis</th>
                    <th>Cena - RSD</th>
                    <th>Merna jedinica</th>
                    <th>Količina</th>
                </tr>
            </thead>
            <tbody>
                <?php

                include('MODELS/Zalihe.php');

                $zalihe = new Zalihe();

                $sve_zalihe = $zalihe->vratiSveZalihe();

                while ($z = mysqli_fetch_assoc($sve_zalihe)) {
                ?>
                    <tr>
                        <td><?php echo $z['naziv'] ?></td>
                        <td><?php echo $z['sifra'] ?></td>
                        <td><?php echo $z['opis'] ?></td>
                        <td><?php echo $z['cena'] ?>.00</td>
                        <td><?php echo $z['merna_jedinica'] ?></td>
                        <td><?php echo $z['kolicina'] ?></td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>





























        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="index.js"></script>
    </div>

</body>

</html>