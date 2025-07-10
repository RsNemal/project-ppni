<section id="navbar">
    <nav class="navbar navbar-expand-lg bg-warning-subtle ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('img/logo.png') ?>" alt="" width="35" height="27"
                    class="d-inline-block align-text-top">
                PPNI
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('profile/visi-misi') ?>">Visi Misi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('profile/struktur-organisasi') ?>">Struktur
                                    Organisasi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('profile/sejarah') ?>">Sejarah</a></li>
                        </ul>
                    </li>
                    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pelayanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('pelayanan/pengurusan-kta') ?>">pengursan
                                    KTA</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('pelayanan/pengurusan-sipp') ?>">Pengurusan
                                    SIPP</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('pelayanan/pengurusan-skp') ?>">Pengurusan
                                    SKP</a></li>
                        </ul>
                    </li>
                    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dokumentasi/dokumentasi') ?>">Dokumentasi</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</section>