<!-- Modal -->
<div class="modal fade" id="novi-proizvod-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novi proizvod</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label>Naziv:</label>
                <input type="text" class="form-control mt-1 mb-2" id="naziv-proizvoda">

                <label>Šifra:</label>
                <input type="text" class="form-control mt-1 mb-2" id="sifra-proizvoda">

                <label>Opis:</label>
                <textarea type="text" class="form-control mt-1 mb-2" id="opis-proizvoda"></textarea>

                <label>Cena:</label>
                <input type="number" class="form-control mt-1 mb-2" id="cena-proizvoda">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="sacuvaj-proizvod-dgm">Sačuvaj</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
            </div>
        </div>
    </div>
</div>