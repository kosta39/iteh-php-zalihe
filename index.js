$(function () {
    unosProizvoda();
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