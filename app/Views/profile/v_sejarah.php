 <!-- //$this->extend('layout') ?> 

//$this->section('content') ?>
<!--
<section class="container py-5" >
    <h1 class="text-center mb-4 fw-bold">Sejarah PPNI</h1>

    <div class="card shadow-sm" id="sejarah">
        <div class="card-body">
            <p class="text-justify">
                <strong>PPNI</strong>, singkatan dari <strong>Persatuan Perawat Nasional Indonesia</strong>, didirikan pada tanggal <strong>17 Maret 1974</strong>
                melalui fusi berbagai organisasi perawat yang ada sebelumnya, untuk menjadi wadah tunggal profesi perawat di Indonesia.
                Tanggal pendirian ini kemudian ditetapkan sebagai <em>Hari Perawat Nasional</em>.
            </p>

            <p class="text-justify">Secara singkat sejarah PPNI adalah sebagai berikut:</p>

            <ul class="list-unstyled">
                <li class="mb-3">
                    <h5 class="fw-semibold">🔗 Fusi Organisasi</h5>
                    <p class="mb-0">
                        PPNI lahir dari kebulatan tekad dan semangat yang sama dari para perintis perawat Indonesia untuk menyatukan tenaga keperawatan
                        dalam satu wadah organisasi profesi yang kuat. Berbagai organisasi perawat saat itu melakukan fusi pada tanggal
                        <strong>17 Maret 1974</strong> untuk membentuk PPNI.
                    </p>
                </li>

                <li class="mb-3">
                    <h5 class="fw-semibold">🎯 Tujuan dan Komitmen</h5>
                    <p class="mb-0">
                        PPNI berkomitmen untuk melindungi masyarakat dan profesi keperawatan, serta berupaya meningkatkan kesejahteraan anggotanya.
                        Organisasi ini juga aktif memperjuangkan pengesahan RUU Keperawatan menjadi Undang-Undang untuk memberikan
                        perlindungan hukum bagi profesi dan masyarakat.
                    </p>
                </li>

                <li>
                    <h5 class="fw-semibold">🚀 Perkembangan dan Peran</h5>
                    <p class="mb-0">
                        Sejak didirikan, PPNI terus menata diri dan berkembang di berbagai wilayah di Indonesia. PPNI berperan penting
                        dalam pengembangan pendidikan tinggi keperawatan, penerapan teknologi dalam praktik keperawatan, serta advokasi
                        profesi dan anggota.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>

// $this->endSection() ?> -->


 <?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="container py-5">
    <h2 class="text-center mb-5 fw-bold">Sejarah PPNI</h2>

    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-icon bg-primary text-white">
                <!-- <span>1974</span> -->
            </div>
            <div class="timeline-content shadow-sm">
                <h5 class="fw-bold mb-2">Fusi Organisasi</h5>
                <p>
                    PPNI lahir dari kebulatan tekad dan semangat yang sama dari para perintis perawat Indonesia untuk menyatukan tenaga keperawatan
                    dalam satu wadah organisasi profesi yang kuat. Pada tanggal <strong>17 Maret 1974</strong>, berbagai organisasi perawat melebur membentuk PPNI.
                </p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-icon bg-success text-white">
                <!-- <span>Komitmen</span> -->
            </div>
            <div class="timeline-content shadow-sm">
                <h5 class="fw-bold mb-2">Tujuan dan Komitmen</h5>
                <p>
                    PPNI berkomitmen melindungi masyarakat dan profesi keperawatan, serta meningkatkan kesejahteraan anggota.
                    Organisasi ini juga memperjuangkan RUU Keperawatan menjadi Undang-Undang demi perlindungan hukum bagi profesi.
                </p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-icon bg-warning text-white">
                <!-- <span>Kini</span> -->
            </div>
            <div class="timeline-content shadow-sm">
                <h5 class="fw-bold mb-2">Perkembangan dan Peran</h5>
                <p>
                    Hingga kini, PPNI terus berkembang di seluruh Indonesia, berperan penting dalam pendidikan tinggi keperawatan,
                    serta penerapan teknologi dan advokasi profesi keperawatan.
                </p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
