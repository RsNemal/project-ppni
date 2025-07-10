<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container my-5">
    <h1 class="text-center mb-5 fw-bold text-primary" data-aos="fade-down" data-aos-duration="1000">Visi & Misi</h1>

    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">

            <!-- Card -->
            <div class="card shadow border-0" data-aos="zoom-in" data-aos-duration="1000">
                <div class="card-body px-4 py-5">

                    <!-- Visi -->
                    <h3 class="text-center text-success mb-3" data-aos="fade-up" data-aos-delay="200">Visi</h3>
                    <p class="fs-5 text-center" data-aos="fade-up" data-aos-delay="300">
                        Menjadi organisasi profesi yang unggul, inspiratif dan bermartabat.
                    </p>

                    <hr class="my-5">

                    <!-- Misi -->
                    <h3 class="text-center text-success mb-3" data-aos="fade-up" data-aos-delay="400">Misi</h3>
                    <ol class="fs-5" data-aos="fade-up" data-aos-delay="500">
                        <li>Membangun citra profesi perawat RSUD Nene Mallomo.</li>
                        <li>Menyelenggarakan pelayanan organisasi yang cerdas, cepat, efisien dan inovatif yang berorientasi pada kepentingan anggota.</li>
                        <li>Meningkatkan pendidikan berkelanjutan yang progresif, komprehensif berdasarkan mutu, etika dan disiplin profesi.</li>
                        <li>Menyiapkan wadah inspiratif yang aspiratif bagi seluruh perawat RSUD Nene Mallomo.</li>
                        <li>Melaksanakan kegiatan untuk membangun semangat kekeluargaan dan kebersamaan.</li>
                        <li>Mensejahterakan anggota DPK.</li>
                    </ol>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
