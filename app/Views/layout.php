<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/style.css')?>">
    <title>Document</title>
</head>
<body>
    
  <?= view('partials/navbar') ?>


 
  <?php if (!empty($showHero) && $showHero === true): ?>
<section class="hero">
  <div class="hero-overlay"></div>
  <div class="container hero-text">
    <small>Selamat Datang di</small>
    <h1>UPT RSUD NENE<br>MALLOMO</h1>
  </div>
</section>
<?php endif; ?>

 <!-- ISI KONTEN -->
  <div class="container mt-5">
    <?= $this->renderSection('content') ?>
  </div>

<script src="<?= base_url('js/bootstrap.bundle.min.js')?>"></script>
</body>
</html>