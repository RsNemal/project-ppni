<section id="navbar">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">PPNI</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Home</a>
        </li>
        <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------- -->
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('visi-misi') ?>">Visi Misi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?= base_url('strukturOrganisasi') ?>">Struktur Organisasi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?= base_url('sejarah') ?>">Sejarah</a></li>
          </ul>
        </li>
        <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Pelayanan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">pengursan KA</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Pengurusan SIPP</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Pengurusan SKP</a></li>
          </ul>
        </li>
        <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------- -->
       <li class="nav-item">
          <a class="nav-link" href="#">Dokumentasi</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
</section>