<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Perumahan
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $perumahan['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $perumahan['alamat']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $perumahan['harga']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $perumahan['alamat']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $perumahan['luas']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $perumahan['lokasi']; ?></h6>
                    <p class="card-text"><?= $perumahan['fasilitas']; ?></p>
                    <p class="card-text"><?= $perumahan['desain']; ?></p>
                    <a href="<?= base_url(); ?>perumahan" class="btn btn-primary">Kembali</a>
                </div>
            </div>


        </div>
    </div>
</div>