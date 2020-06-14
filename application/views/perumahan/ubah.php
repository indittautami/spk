<div class="container">


    <div class="row mt-4">
        <div class="col md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Perumahan
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $perumahan['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $perumahan['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                </div>


                <div class="form-group">

                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $perumahan['alamat']; ?>">
                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                </div>


                <div class="form-group">
                    <label for="spesifikasi">Type</label>
                    <select class="form-control" name="spesifikasi" id="spesifikasi">
                        <?php foreach ($spesifikasi as $s) : ?>
                            <?php if ($s == $perumahan['spesifikasi']) : ?>
                                <option value="<?= $s; ?>"> selected<?= $s; ?></option>
                            <?php else : ?>
                                <option value="<?= $s; ?>"> <?= $s; ?></option>
                            <?php endif; ?>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" id="number" value="<?= $perumahan['harga']; ?>">
                    <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                </div>
                <button type="submit" name="ubah" class="btn btn-primary float-right"> Ubah Data </button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>