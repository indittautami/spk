<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Perumahan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif;  ?>
    <div class="row mt-4">
        <div class="col md-6">

            <a href="<?= base_url(); ?>perumahan/tambah" class="btn btn-primary">Tambah Data Perumahan</a>

            <div class="row-mt-5">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Button</button>
                            </div>
                            <div>
                    </form>

                </div>
            </div>



            <div class="row mt-3">
                <div class="col-md -6">
                    <h3>Daftar Perumahan baru</h3>
                    <ul class="list-group">
                        <?php foreach ($perumahan as $prmhn) : ?>
                            <li class="list-group-item">
                                <?= $prmhn['nama'] ?>
                                <img src="https://unsplash.com/photos/2hPCkRAkVbY/download?force=true" alt="..." class="img-thumbnail">
                                <a href="<?= base_url(); ?>perumahan/hapus/<?= $prmhn['id'];  ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                                <a href="<?= base_url(); ?>perumahan/ubah/<?= $prmhn['id'];  ?>" class="badge badge-success float-right">ubah</a>
                                <a href="<?= base_url(); ?>perumahan/detail/<?= $prmhn['id'];  ?>" class="badge badge-primary float-right">detail</a>

                            </li>
                            </li>
                        <?php endforeach; ?>








                </div>
            </div>
        </div>