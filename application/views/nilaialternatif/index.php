<div class="container">


    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Nilai Bobot Alternatif <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
                    <h1>Nilai Bobot Alternatif</h1>
                </div>