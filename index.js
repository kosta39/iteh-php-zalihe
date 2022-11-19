$(function () {
    unosProizvoda();
    unosZalihe();
    obrisiZalihe();
    sortirajZalihe();
    pretragaZaliha();
});

function unosProizvoda() {

    $(document).on('click', '#sacuvaj-proizvod-dgm', function () {

        let naziv = $('#naziv-proizvoda').val();
        let sifra = $('#sifra-proizvoda').val();
        let opis = $('#opis-proizvoda').val();
        let cena = $('#cena-proizvoda').val();

        $.ajax(
            {
                url: 'DB/sacuvaj-proizvod.php',
                method: 'POST',
                data: {
                    naziv: naziv,
                    sifra: sifra,
                    opis: opis,
                    cena: cena
                },

                success: function () {
                    alert('Novi proizvod je uspešno unet u bazu podataka')
                }
            });
    })
}





function unosZalihe() {

    $(document).on('click', '#sacuvaj-zalihe-dgm', function () {

        let proizvod_id = $('#select-proizvod').val();
        let merna_jedinica = $('#merna-jedinica').val();
        let kolicina = $('#kolicina').val();

        $.ajax(
            {
                url: 'DB/sacuvaj-zalihe.php',
                method: 'POST',
                data: {
                    proizvod_id: proizvod_id,
                    merna_jedinica: merna_jedinica,
                    kolicina: kolicina,
                },

                success: function () {
                    alert('Nova zaliha je uspešno uneta u bazu podataka')
                }
            });
    })
}




function obrisiZalihe() {

    $(document).on('click', '#obrisi-zalihe-dgm', function () {

        let zalihe_id = $(this).val()

        $.ajax(
            {
                url: 'DB/obrisi-zalihe.php',
                method: 'POST',
                data: {
                    zalihe_id: zalihe_id,
                },

                success: function () {
                    alert('Zaliha je uspešno obrisana!')

                }
            });
    })
}



function sortirajZalihe() {

    $(document).on('click', 'th', function () {

        let kolona_sort = $(this).attr('id')
        let sort = $(this).attr('value')

        if (kolona_sort == undefined || sort == undefined)
            return;

        $.ajax(
            {
                url: 'DB/sortiraj-zalihe.php',
                method: 'POST',
                data: {
                    kolona_sort: kolona_sort,
                    sort: sort
                },

                success: function (zalihe) {
                    $('tbody').html(zalihe)
                }
            });

        if (sort == 'desc') {
            $(this).attr('value', 'asc')
        } else {
            $(this).attr('value', 'desc')
        }
    })


}

function pretragaZaliha() {

    $(document).on('keyup', '#search-zalihe', function () {

        let naziv = $(this).val()

        $.ajax(
            {
                url: 'DB/search-zalihe.php',
                method: 'POST',
                data: {
                    naziv: naziv
                },

                success: function (zalihe) {
                    $('tbody').html(zalihe)
                }
            });

    })
}