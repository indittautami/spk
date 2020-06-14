<div class="container">


    <div class="row mt-4">
        <div class="col md-5">

            <div class="card">
                <div class="card-header">
                    Form Tambah Nilai Bobot Kriteria
                </div>
                <div class="card-body">
                    <label for="kriteria">Kriteria</label>
                    <select class="form-control" name="kriteria1" id="kriteria1">
                        <option selected> -Pilih- </option>
                        <option value='C01-HARGA'>Harga</option>
                        <option value='C02-LUAS'>Luas</option>
                        <option value='C03-LOK'>Lokasi</option>
                        <option value='C04-FAS'>Fasilitas</option>
                        <option value='C05-DES'>Desain</option>

                    </select>
                </div>
                <div class="card-body">
                    <label for="Skala">Skala Perbandingan</label>
                    <select class="form-control" name="skala" id="skala">
                        <option value='1' selected>1 - Sama penting dengan</option>
                        <option value='2'>2 - Mendekati sedikit lebih penting dari</option>
                        <option value='3'>3 - Sedikit lebih penting dari</option>
                        <option value='4'>4 - Mendekati lebih penting dari</option>
                        <option value='5'>5 - Lebih penting dari</option>
                        <option value='6'>6 - Mendekati sangat penting dari</option>
                        <option value='7'>7 - Sangat penting dari</option>
                        <option value='8'>8 - Mendekati mutlak dari</option>
                        <option value='9'>9 - Mutlak sangat penting dari</option>
                    </select>
                </div>
                <div class="card-body">
                    <label for="kriteria">Kriteria Perbandingan</label>
                    <select class="form-control" name="kriteria1" id="kriteria1">
                        <option selected> -Pilih- </option>
                        <option value='C01-HARGA'>Harga</option>
                        <option value='C02-LUAS'>Luas</option>
                        <option value='C03-LOK'>Lokasi</option>
                        <option value='C04-FAS'>Fasilitas</option>
                        <option value='C05-DES'>Desain</option>

                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <button type="submit" name="tambah" class="btn btn-primary "> Tambah Data </button>
                    <a class="btn btn-danger " href="<?= base_url('nilaikriteria'); ?>"> Kembali</a>
                </div>
            </div>


        </div>

    </div>

</div>