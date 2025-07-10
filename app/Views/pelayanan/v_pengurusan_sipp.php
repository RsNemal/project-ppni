<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container my-5" data-aos="fade-up" data-aos-duration="1000">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center fw-bold fs-4">
            PENGURUSAN SIPP
        </div>
        <div class="card-body">

            <p>
                Untuk pengurusan Surat Izin Praktik Perawat (SIPP) PPNI DPK, ada beberapa langkah yang perlu dilakukan.
                Pertama, perawat perlu mengurus rekomendasi dari Dewan Pengurus Komisariat (DPK) PPNI tempatnya bekerja.
                Kemudian, perawat mengajukan permohonan SIPP ke Dinas Kesehatan setempat dengan melengkapi berbagai
                persyaratan
                yang dibutuhkan, termasuk rekomendasi dari DPK.
            </p>

            <!-- Mengurus Rekomendasi DPK -->
            <h5 class="text-primary fw-semibold mt-4">📌 Mengurus Rekomendasi DPK</h5>
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">Perawat harus menjadi anggota PPNI dan memiliki NIRA (Nomor Induk Registrasi
                    Anggota).</li>
                <li class="list-group-item">Mengajukan permohonan rekomendasi SIPP ke DPK tempat bekerja.</li>
                <li class="list-group-item">Persyaratan:
                    <ul>
                        <li>STR yang masih berlaku</li>
                        <li>KTP</li>
                        <li>Ijazah terakhir</li>
                        <li>Surat keterangan kerja</li>
                        <li>Bukti pelunasan iuran PPNI</li>
                        <li>Bukti pembayaran biaya administrasi (jika ada)</li>
                    </ul>
                </li>
                <li class="list-group-item">DPK akan memproses dan menerbitkan surat rekomendasi jika semua persyaratan
                    terpenuhi.</li>
            </ul>

            <!-- Mengurus ke Dinas Kesehatan -->
            <h5 class="text-warning fw-semibold mt-4">🏥 Mengurus SIPP ke Dinas Kesehatan</h5>
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">Setelah mendapatkan rekomendasi, ajukan permohonan ke Dinas Kesehatan
                    setempat atau melalui MPP Digital.</li>
                <li class="list-group-item">Persyaratan:
                    <ul>
                        <li>Formulir permohonan SIPP yang lengkap</li>
                        <li>Rekomendasi DPK</li>
                        <li>Fotokopi STR dan ijazah legalisir</li>
                        <li>Surat keterangan sehat dari dokter</li>
                        <li>Surat keterangan tempat praktik (jika ada)</li>
                        <li>Pas foto terbaru</li>
                        <li>Bukti pembayaran biaya administrasi (jika ada)</li>
                    </ul>
                </li>
                <li class="list-group-item">Dinas Kesehatan akan memproses dan menerbitkan SIPP jika semua persyaratan
                    lengkap.</li>
            </ul>

            <!-- Penting Diperhatikan -->
            <h5 class="text-danger fw-semibold mt-4">⚠️ Penting untuk Diperhatikan</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">SIPP berlaku 5 tahun dan dapat diperpanjang.</li>
                <li class="list-group-item">Perawat hanya boleh memiliki maksimal 2 SIPP.</li>
                <li class="list-group-item">Persyaratan bisa berbeda tergantung kebijakan masing-masing daerah.</li>
            </ul>

        </div>
    </div>
</div>

<?= $this->endSection() ?>