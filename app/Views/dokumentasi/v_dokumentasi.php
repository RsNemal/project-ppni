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
    <h2 class="mb-5 text-center fw-bold text-capitalize">Kegiatan Pertemuan Bulanan DPK PPNI RSUD Nene Mallomo</h2>

    <div class="row g-4">
        <?php foreach ($gambarList as $index => $gambar): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <a href="<?= base_url('img/dokumentasi/' . $gambar) ?>" target="_blank" >
                    <img src="<?= base_url('img/dokumentasi/' . $gambar) ?>" class="card-img-top img-fluid rounded"
                        alt="Dokumentasi <?= $index + 1 ?>" style="height: 200px; object-fit: cover;" >
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>