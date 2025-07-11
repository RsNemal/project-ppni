
<section id="navbar">
    <nav class="navbar navbar-expand-lg bg-light shadow-sm py-2">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold text-success" href="<?= base_url('/') ?>">
                <img src="<?= base_url('img/logo.png') ?>" alt="Logo" width="35" height="35" class="me-2">
                PPNI
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link <?= uri_string() == '' ? 'active text-primary fw-semibold' : '' ?>" href="<?= base_url('/') ?>">Home</a>
                    </li>

                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle <?= str_contains(uri_string(), 'profile') ? 'text-primary fw-semibold' : '' ?>" href="#" role="button" data-bs-toggle="dropdown">
                            Profil
                        </a>
                        <ul class="dropdown-menu rounded-3 shadow-sm">
                            <li><a class="dropdown-item" href="<?= base_url('profile/visi-misi') ?>">📜 Visi Misi</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('profile/struktur-organisasi') ?>">👥 Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('profile/sejarah') ?>">📖 Sejarah</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle <?= str_contains(uri_string(), 'pelayanan') ? 'text-primary fw-semibold' : '' ?>" href="#" role="button" data-bs-toggle="dropdown">
                            Pelayanan
                        </a>
                        <ul class="dropdown-menu rounded-3 shadow-sm">
                            <li><a class="dropdown-item" href="<?= base_url('pelayanan/pengurusan-kta') ?>">🧾 Pengurusan KTA</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('pelayanan/pengurusan-sipp') ?>">📝 Pengurusan SIPP</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('pelayanan/pengurusan-skp') ?>">📄 Pengurusan SKP</a></li>
                        </ul>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link <?= uri_string() == 'dokumentasi/dokumentasi' ? 'text-primary fw-semibold' : '' ?>" href="<?= base_url('dokumentasi/dokumentasi') ?>">📷 Dokumentasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
