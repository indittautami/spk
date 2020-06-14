<div class="container">


    <div class="row mt-4">
        <div class="col md-5">

            <div class="card">
                <div class="card-header">
                    Form Tambah Alternatif
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="kode1">Kode</label>
                            <input type="text" name="kode1" class="form-control" id="kode1">
                            <small class="form-text text-danger"><?= form_error('kode1'); ?></small>
                        </div>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama_alternatif">Nama Alternatif</label>
                            <input type="text" name="nama_alternatif" class="form-control" id="nama_alternatif">
                            <small class="form-text text-danger"><?= form_error('nama_alternatif'); ?></small>
                        </div>
                </div>

                <div class="card-body">
                    <label for="keterangan">Keterangan</label>
                    <select class="form-control" name="keterangan" id="keterangan">
                        <option value="sangat baik">Sangat Baik</option>
                        <option value="baik">Baik</option>
                        <option value="cukup baik">Cukup Baik</option>


                    </select>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <button type="submit" name="tambah" class="btn btn-primary "> Tambah Data </button>
                    <a class="btn btn-danger " href="<?= base_url('alternatif'); ?>"> Kembali</a>
                    </form>
                </div>
            </div>
        </div>
        </>

    </div>