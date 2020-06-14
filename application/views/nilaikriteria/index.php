<div class="container">


    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Nilai Bobot Kriteria <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif;  ?>

    <div class="row-mt-4">
        <div class="col-md-10">
            <div class="row mt-5">
                <div class="page-header">
                    <h1>Nilai Bobot Kriteria</h1>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <form class="form-inline" action="?m=rel_kriteria" method="post">
                            <div class="form-group">
                                <select class="form-control" name="ID1">
                                    <option value='pilih'>- Pilih -</option>
                                    <option value='C01-HAR'>Harga</option>
                                    <option value='C02-LUAS'>Luas</option>
                                    <option value='C03-LOK'>Lokasi</option>
                                    <option value='C04-FAS'>Fasilitas</option>
                                    <option value='C05-DES'>Desain</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="nilai">
                                    <option value='1'>1 - Sama penting dengan</option>
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
                            <div class="form-group">
                                <select class="form-control" name="ID2">
                                    <option value='pilih'>- Pilih -</option>
                                    <option value='C01-HAR'>Harga</option>
                                    <option value='C02-LUAS'>Luas</option>
                                    <option value='C03-LOK'>Lokasi</option>
                                    <option value='C04-FAS'>Fasilitas</option>
                                    <option value='C05-DES'>Desain</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
                            </div>
                        </form>
                    </div>

                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>C01-HAR</th>
                                <th>C02-LUAS</th>
                                <th>C03-LOK</th>
                                <th>C04-FAS</th>
                                <th>C05-DES</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="nw">C01-HAR</th>
                                <td class='success'></td>
                                <td class='danger'></td>
                                <td class='danger'></td>
                                <td class='danger'></td>
                                <td class='danger'></td>

                            </tr>
                            <tr>
                                <th class="nw">C02-LUAS</th>
                                <td class=''></td>
                                <td class='success'></td>
                                <td class='danger'></td>
                                <td class='danger'></td>
                                <td class='danger'></td>

                            </tr>

                            <tr>
                                <th class="nw">C03-LOK</th>
                                <td class=''></td>
                                <td class='success'></td>
                                <td class='danger'></td>
                                <td class='danger'></td>
                                <td class='danger'></td>

                            </tr>
                            <tr>
                                <th class="nw">C04-FAS</th>
                                <td class=''></td>
                                <td class='success'></td>
                                <td class='danger'></td>
                                <td class='danger'></td>
                                <td class='danger'></td>

                            </tr>
                            <tr>
                                <th class="nw">C05-DES</th>
                                <td class=''></td>
                                <td class='success'></td>
                                <td class='danger'></td>
                                <td class='danger'></td>
                                <td class='danger'></td>

                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>