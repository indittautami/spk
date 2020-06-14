<nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-3">
    <a class="navbar-brand" href="#">AHP TOPSIS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('perumahan'); ?>">Perumahan <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?= base_url('kriteria'); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-th-large"></i> Kriteria
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url('kriteria'); ?>">Kriteria</a>
                    <a class="dropdown-item" href="<?= base_url('nilaikriteria'); ?>">Nilai Bobot Kriteria</a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?= base_url('alternatif'); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-th-large"></i> Alternatif
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url('alternatif'); ?>">Alternatif</a>
                    <a class="dropdown-item" href="<?= base_url('nilaialternatif'); ?>">Nilai Bobot Alternatif</a>

                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Perhitungan</a>
            </li>


        </ul>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="<?= base_url('admin'); ?>" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/default'); ?>">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </div>
</nav>