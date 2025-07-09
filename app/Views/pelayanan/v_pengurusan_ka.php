<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<section id="pengurusan-kta" class="container my-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h1 class="m-0">PENGURUSAN KTA</h1>
        </div>
        <div class="card-body">
            <p>
                Untuk mengurus KTA (Kartu Tanda Anggota) PPNI (Persatuan Perawat Nasional Indonesia) di tingkat DPK (Dewan Pengurus Komisariat), langkah-langkahnya adalah sebagai berikut:
            </p>

            <div class="mb-4">
                <h5 class="text-primary">📌 Registrasi Anggota Baru</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Akses website PPNI: <a href="https://ppni-inna.org" target="_blank">ppni-inna.org</a></li>
                    <li class="list-group-item">Pilih menu "Registrasi", lalu "Perawat Dalam Negeri" atau "Perawat Luar Negeri".</li>
                    <li class="list-group-item">Isi formulir registrasi dengan data diri yang benar.</li>
                    <li class="list-group-item">Pilih “DPK” dan sesuaikan dengan tempat kerja atau kampus.</li>
                    <li class="list-group-item">Sertakan alamat email yang aktif.</li>
                    <li class="list-group-item">Klik “Daftarkan”.</li>
                    <li class="list-group-item">Hubungi kontak WhatsApp pengurus DPK untuk verifikasi.</li>
                </ul>
            </div>

            <div class="mb-4">
                <h5 class="text-success">💰 Pembayaran</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cek email yang didaftarkan untuk informasi pembayaran.</li>
                    <li class="list-group-item">Bayar via Virtual Account BNI (tertera di email).</li>
                    <li class="list-group-item">Biaya pendaftaran sekitar <strong>Rp 360.000</strong> (uang pangkal + iuran tahunan).</li>
                </ul>
            </div>

            <div class="mb-4">
                <h5 class="text-info">🆔 Penerbitan NIRA dan KTA</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Tunggu email balasan berisi <strong> NIRA </strong> (Nomor Induk Registrasi Anggota),  username, dan password.</li>
                    <li class="list-group-item">Setelah dapat NIRA, resmi menjadi anggota PPNI.</li>
                    <li class="list-group-item">Lengkapi data pribadi lewat menu "Member".</li>
                    <li class="list-group-item">KTA akan dicetak setelah proses selesai.</li>
                </ul>
            </div>

            <div class="mb-4">
                <h5 class="text-warning">📂 Verifikasi dan Pengumpulan Berkas</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Bawa berkas ke Komisariat masing-masing.</li>
                    <li class="list-group-item">Berkas: fotokopi KTP, pas foto, dan bukti bayar iuran.</li>
                    <li class="list-group-item">Komisariat verifikasi dan kirim ke DPD PPNI.</li>
                    <li class="list-group-item">DPD akan daftarkan ke PPNI pusat setelah diverifikasi.</li>
                </ul>
            </div>

            <div>
                <h5 class="text-danger">🖨️ Pencetakan KTA</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">KTA dicetak oleh DPD PPNI.</li>
                    <li class="list-group-item">Waktu pencetakan sekitar 10 hari kerja.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
