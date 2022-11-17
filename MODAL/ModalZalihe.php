<!-- Modal -->
<div class="modal fade" id="nova-zaliha-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nova zaliha</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label>Proizvod:</label>
                <select class="form-select mb-2" id="select-proizvod">
                    <?php
                    include('MODELS/Proizvod.php');

                    $proizvod = new Proizvod();
                    $svi_proizvodi = $proizvod->vratiSveProizvodeBaza();

                    while ($p = mysqli_fetch_assoc($svi_proizvodi)) {
                    ?>
                        <option value="<?php echo $p['id']; ?>"><?php echo $p['naziv']; ?></option>
                    <?php
                    }
                    ?>
                </select>

                <label>Merna jedinica:</label>
                <input type="text" class="form-control mt-1 mb-2" id="merna-jedinica">

                <label>Kolicina:</label>
                <input type="number" class="form-control mt-1 mb-2" id="kolicina">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="sacuvaj-zalihe-dgm">Sačuvaj</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
            </div>
        </div>
    </div>
</div>