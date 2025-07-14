<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<?php
$gambarList = [
    'gambar1.jpeg', 'gambar2.jpeg', 'gambar3.jpeg',
    'gambar4.jpeg', 'gambar5.jpeg', 'gambar6.jpeg',
    'gambar7.jpeg', 'gambar8.jpeg', 'gambar9.jpeg', 'gambar10.jpeg'
];
?>

<div class="container py-5">
    <h2 class="mb-5 text-center fw-bold text-capitalize">
        Kegiatan Pertemuan Bulanan DPK PPNI RSUD Nene Mallomo
    </h2>

    <div class="row g-4">
        <?php foreach ($gambarList as $index => $gambar): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <img src="<?= base_url('img/dokumentasi/' . $gambar) ?>"
                    class="card-img-top img-fluid rounded cursor-pointer" alt="Dokumentasi <?= $index + 1 ?>"
                    style="height: 200px; object-fit: cover;" data-bs-toggle="modal" data-bs-target="#carouselModal"
                    data-bs-slide-to="<?= $index ?>">
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal dengan Carousel -->
<!-- Modal dengan Carousel -->
<div class="modal fade" id="carouselModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-transparent border-0 position-relative">

            <!-- Tombol Close di LUAR carousel -->
            <button type="button" class="btn-close position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal"
                aria-label="Close"></button>

            <div class="modal-body p-0">
                <div id="carouselGallery" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach ($gambarList as $index => $gambar): ?>
                        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                            <img src="<?= base_url('img/dokumentasi/' . $gambar) ?>" class="d-block w-100 rounded"
                                alt="Slide <?= $index + 1 ?>">
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Controls (perbaikan tampilan) -->
                    <button class="carousel-control-prev custom-carousel-btn" type="button"
                        data-bs-target="#carouselGallery" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next custom-carousel-btn" type="button"
                        data-bs-target="#carouselGallery" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>

<?= $this->endSection() ?>