<div class="container">


    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Alternatif <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
                <form action="" method="post">
                    <nav class="navbar navbar-light bg-light">
                        <a class="navbar-brand">Alternatif</a>
                        <form action="" method="post">
                            <div class="input-group ">
                                <input type="text" class="form-control " placeholder="Pencarian" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button"><i class="fas fa-sync-alt"></i> Refresh</button>
                                    <a href="<?= base_url(); ?>alternatif/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                                </div>
                                <div>
                        </form>
                    </nav>
                </form>

                <div class="col-md-12">
                    <div class="row mt-5">
                        <table class="table table-bordered table-hover table-striped ">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Alternatif</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 0;
                            foreach ($Alternatif as $a) {
                                $no++;
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $a['kode1'] ?> </td>
                                    <td><?= $a['nama_alternatif'] ?> </td>
                                    <td><?= $a['keterangan'] ?> </td>
                                    <td>
                                        <a href="<?= base_url(); ?>alternatif/ubah/<?= $a['id'];  ?>" class="badge badge-success "><i class="fas fa-pen"></i></a>
                                        <a href="<?= base_url(); ?>alternatif/hapus/<?= $a['id'];  ?>" class="badge badge-danger " onclick="return confirm('yakin?');"><i class="fas fa-trash-alt"></i></a>

                                    </td>
                                </tr>
                            <?php
                            }
                            ?>




                    </div>





                    </table>
                </div>
            </div>
        </div>
    </div>