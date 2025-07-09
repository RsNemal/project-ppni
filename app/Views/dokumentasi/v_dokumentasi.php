<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<?php
$gambarList = ['gambar1.jpeg','gambar2.jpeg','gambar3.jpeg', 'gambar4.jpeg', 'gambar5.jpeg', 'gambar6.jpeg', 'gambar7.jpeg', 'gambar8.jpeg', 'gambar9.jpeg', 'gambar10.jpeg'];
?>
 <div class="container py-5">
    <h2 class="mb-4 text-center fw-bold text-capitalize">Kegiatan pertemuan bulanan DPK PPNI RSUD Nene Mallomo</h2>
    
    <div class="row g-4">
     <?php foreach ($gambarList as $index => $gambar): ?>
  <div class="col-12 col-sm-6 col-md-4">
    <img src="<?= base_url('img/dokumentasi/' . $gambar) ?>"
         class="img-fluid gallery-img"
         alt="Dokumentasi <?= $index + 1 ?>"
         width="1100"
         height="500">
  </div>
<?php endforeach; ?>

    </div>
  </div>


<?= $this->endSection() ?>