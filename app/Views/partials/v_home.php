<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- HERO SECTION -->
<section class="hero">
    <div class="container hero-text text-white">
        <small class="d-block mb-2">Selamat Datang di</small>
        <h1 class="display-5 fw-bold">PPNI RSUD NENE<br>MALLOMO</h1>
        <p class="lead mt-3 mb-4">
            Bersama membangun kualitas pelayanan keperawatan yang profesional dan bermartabat.
        </p>
        <a href="#tentang-ppni" class="btn btn-primary btn-lg shadow-sm">
            Lihat Profil Kami ↓
        </a>
    </div>
</section>

<!-- TENTANG KAMI -->
<section id="tentang-ppni" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4 fw-bold">Tentang PPNI</h2>
        <p class="mx-auto" style="max-width: 720px;">
            PPNI RSUD Nene Mallomo adalah bagian dari Persatuan Perawat Nasional Indonesia yang hadir sebagai wadah
            profesional bagi perawat di lingkungan RSUD Nene Mallomo. Organisasi ini berkomitmen dalam pengembangan
            kompetensi, peningkatan mutu pelayanan keperawatan, serta advokasi hak dan kesejahteraan perawat.
        </p>
    </div>
</section>

<!-- PELAYANAN KAMI -->

<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Pelayanan Kami</h2>

        <div class="accordion" id="pelayananAccordion">
            <!-- Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="bi bi-clipboard-check me-2 text-primary"></i> Registrasi Anggota
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#pelayananAccordion">
                    <div class="accordion-body">
                        Proses pendaftaran dan pengurusan KTA PPNI secara online melalui sistem resmi dengan panduan
                        yang mudah diikuti.
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="bi bi-person-lines-fill me-2 text-success"></i> Layanan Keanggotaan
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#pelayananAccordion">
                    <div class="accordion-body">
                        Pembaharuan data anggota, pembayaran iuran tahunan, serta pengajuan verifikasi secara
                        terintegrasi dan efisien.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- GALERI / DOKUMENTASI -->
<section class="py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <h2 class="text-center fw-bold mb-5">Dokumentasi Kegiatan</h2>

        <div class="row g-4">
            <?php
            $gambarList = ['gambar1.jpeg', 'gambar2.jpeg', 'gambar3.jpeg'];
            foreach ($gambarList as $index => $gambar):
            ?>
            <div class="col-sm-6 col-md-4">
                <img src="<?= base_url('img/dokumentasi/' . $gambar) ?>" alt="Dokumentasi <?= $index + 1 ?>"
                    class="img-fluid rounded shadow-sm cursor-pointer" style="cursor: pointer;" loading="lazy"
                    data-bs-toggle="modal" data-bs-target="#modalGambar<?= $index ?>">
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalGambar<?= $index ?>" tabindex="-1"
                aria-labelledby="gambarLabel<?= $index ?>" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-body p-0">
                            <img src="<?= base_url('img/dokumentasi/' . $gambar) ?>"
                                alt="Dokumentasi Besar <?= $index + 1 ?>" class="img-fluid w-100 rounded">
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="<?= base_url('dokumentasi/dokumentasi') ?>" class="btn btn-outline-secondary btn-lg">
                Lihat Selengkapnya
            </a>
        </div>
    </div>
</section>


<!-- CTA -->
<section class="py-5 bg-primary text-white text-center">
    <div class="container">
        <h3 class="fw-bold mb-3">Gabung Bersama Kami di PPNI RSUD Nene Mallomo</h3>
        <a href="#" class="btn btn-light btn-lg" disabled>Daftar Sekarang</a>
    </div>
</section>

<?= $this->endSection() ?>