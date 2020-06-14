<div class="container">


    <div class="row mt-4">
        <div class="col md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Alternatif
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $alternatif['id']; ?>">
                        <div class="card-body">
                            <label for="kode1">Kode</label>
                            <input type="text" name="kode1" class="form-control" id="kode1" value="<?= $alternatif['kode1']; ?>">
                            <small class="form-text text-danger"><?= form_error('kode1'); ?></small>
                        </div>

                        <div class="card-body">
                            <label for="nama_alternatif">Nama Alternatif</label>
                            <input type="text" name="nama_alternatif" class="form-control" id="nama_alternatif" value="<?= $alternatif['nama_alternatif']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="card-body">
                            <label for="keterangan">Keterangan</label>
                            <select class="form-control " name="keterangan" id="keterangan">
                                <option value="sangat baik">Sangat Baik</option>
                                <option value="baik">Baik</option>
                                <option value="cukup baik">Cukup Baik</option>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary "> Ubah Data </button>
                        <a class="btn btn-danger " href="<?= base_url('alternatif'); ?>"> Kembali</a>
                    </form>


                </div>
            </div>

        </div>
    </div>

</div>