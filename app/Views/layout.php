<!DOCTYPE html>
<html lang=id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Website resmi PPNI RSUD Nene Mallomo. Menyediakan informasi keperawatan, organisasi, pelayanan dan dokumentasi kegiatan PPNI.">
    <link rel="preload" as="image" href="<?= base_url('img/download.webp') ?>">
    <link rel="shortcut icon" href="<?= base_url('img/logo.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('boostrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/style.css')?>">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="<?= base_url('aos-master/dist/aos.css') ?>">
    <title><?= $title ?></title>
</head>

<body>

    <?= view('partials/v_navbar') ?>

    <!-- ISI KONTEN -->
    <div class="container mt-5">
        <?= $this->renderSection('content') ?>
    </div>
    <!-- Tombol Scroll ke Atas -->
    <button onclick="scrollToTop()" id="scrollTopBtn"
        class="btn btn-primary rounded-circle shadow position-fixed bottom-0 end-0 m-4"
        style="display:none; z-index: 999;">
        ↑
    </button>
    <?= view('partials/v_footer') ?>


    <script src="<?= base_url('boostrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- AOS JS -->
    <script src="<?= base_url('aos-master/dist/aos.js') ?>"></script>
    <script>
    AOS.init();
    </script>

<!-- Scroll to top -->
<script>
        // Tampilkan tombol saat scroll lebih dari 300px
    window.onscroll = function() {
        const btn = document.getElementById("scrollTopBtn");
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }
    };

    // Scroll ke atas ketika tombol diklik
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    </script>


<!-- Carousel Dokumentasi.php -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('carouselModal');
    const carousel = new bootstrap.Carousel(document.getElementById('carouselGallery'));

    document.querySelectorAll('[data-bs-slide-to]').forEach(img => {
        img.addEventListener('click', function () {
            const index = parseInt(this.getAttribute('data-bs-slide-to'));
            carousel.to(index);
        });
    });
});
</script>

<!-- scroll to down -->
<script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if (target) {
              target.scrollIntoView({
                  behavior: 'smooth',
                  block: 'start'
              });
          }
      });
  });
</script>


</body>

</html>