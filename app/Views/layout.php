<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/style.css')?>">
    <title><?= $title ?></title>
</head>
<body>
    
  <?= view('partials/v_navbar') ?>


 
  <?php if (!empty($showHero) && $showHero === true): ?>
<section class="hero">
  <div class="hero-overlay"></div>
  <div class="container hero-text text-dark">
    <small>Selamat Datang di</small>
    <h1>PPNI RSUD NENE<br>MALLOMO</h1>
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