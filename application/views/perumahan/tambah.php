<div class="container">


    <div class="row mt-4">
        <div class="col md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Perumahan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" id="number">
                    <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Luas</label>
                        <input type="text" name="luas" class="form-control" id="luas">
                        <small class="form-text text-danger"><?= form_error('luas'); ?></small>
                    </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" id="lokasi">
                        <small class="form-text text-danger"><?= form_error('lokasi'); ?></small>
                    </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Fasilitas</label>
                        <input type="text" name="fasilitas" class="form-control" id="fasilitas">
                        <small class="form-text text-danger"><?= form_error('fasilitas'); ?></small>
                    </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Desain</label>
                        <input type="text" name="fasilitas" class="form-control" id="desain">
                        <small class="form-text text-danger"><?= form_error('desain'); ?></small>
                    </div>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </form>

            <button type="submit" name="tambah" class="btn btn-primary float-right"> Tambah Data </button>
            </form>
        </div>
    </div>

</div>