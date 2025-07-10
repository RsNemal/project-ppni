<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('boostrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/style.css')?>">
    <!-- AOS CSS -->
<link rel="stylesheet" href="<?= base_url('aos-master/dist/aos.css') ?>">
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
</body>

</html>