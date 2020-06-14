<div class="container">


    <div class="row mt-4">
        <div class="col md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Kriteria
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $kriteria['id']; ?>">
                        <div class="card-body">
                            <label for="kode">Kode</label>
                            <input type="text" name="kode" class="form-control" id="kode" value="<?= $kriteria['kode']; ?>">
                            <small class="form-text text-danger"><?= form_error('kode'); ?></small>
                        </div>

                        <div class="card-body">
                            <label for="nama">Nama Kriteria</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $kriteria['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="card-body">
                            <label for="atribut">Atribut</label>
                            <select class="form-control" name="atribut" id="atribut">
                                <option value="Benefit">Benefit</option>
                                <option value="Cost">Cost</option>

                            </select>

                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary "> Ubah Data </button>
                        <a class="btn btn-danger " href="<?= base_url('kriteria'); ?>"> Kembali</a>
                    </form>


                </div>
            </div>

        </div>
    </div>

</div>