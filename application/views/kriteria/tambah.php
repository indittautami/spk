<div class="container">


    <div class="row mt-4">
        <div class="col md-5">

            <div class="card">
                <div class="card-header">
                    Form Tambah Kriteria
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" name="kode" class="form-control" id="kode">
                            <small class="form-text text-danger"><?= form_error('kode'); ?></small>
                        </div>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Kriteria</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                </div>

                <div class="card-body">
                    <label for="atribut">Atribut</label>
                    <select class="form-control" name="atribut" id="atribut">
                        <option value="Benefit">Benefit</option>
                        <option value="Cost">Cost</option>
                    </select>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <button type="submit" name="tambah" class="btn btn-primary "> Tambah Data </button>
                    <a class="btn btn-danger " href="<?= base_url('kriteria'); ?>"> Kembali</a>
                </div>
            </div>
        </div>

    </div>