<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container my-5" data-aos="fade-up" data-aos-duration="1000"> 
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center fw-bold fs-4">
            PENGURUSAN SKP
        </div>
        <div class="card-body">

            <p>
                Pengurusan SKP (Satuan Kredit Profesi) PPNI DPK melibatkan beberapa langkah dan persyaratan.
                SKP penting untuk perpanjangan STR dan menunjukkan profesionalisme perawat.
                Prosesnya meliputi pengajuan rekomendasi dari DPK ke DPD, pengisian formulir, pengumpulan berkas, dan
                verifikasi oleh DPD/DPW.
            </p>

            <!-- Langkah-langkah Pengurusan -->
            <h5 class="text-primary fw-semibold mt-4">📝 Langkah-langkah Pengurusan SKP</h5>
            <ol class="ps-3">
                <li class="fw-bold">📃 Penyusunan Proposal</li>
                <p>DPK menyusun proposal kegiatan yang akan mendapatkan SKP seperti seminar, pelatihan, atau kegiatan
                    ilmiah lainnya.</p>

                <li class="fw-bold">📁 Pengumpulan Berkas</li>
                <p>Sertakan proposal, susunan acara, daftar hadir peserta dan pemateri, materi, CV pemateri, foto
                    kegiatan, dan surat rekomendasi dari DPD.</p>

                <li class="fw-bold">📨 Pengajuan Rekomendasi</li>
                <p>DPK mengajukan permohonan rekomendasi SKP ke DPD PPNI untuk kegiatan yang diselenggarakan.</p>

                <li class="fw-bold">🖊️ Pengisian Formulir</li>
                <p>Setelah mendapat rekomendasi, formulir SKP diisi secara online melalui platform resmi PPNI.</p>

                <li class="fw-bold">✅ Verifikasi SKP</li>
                <p>DPD/DPW memverifikasi kelengkapan dan kesesuaian berkas dengan ketentuan.</p>

                <li class="fw-bold">🎓 Penerbitan SKP</li>
                <p>Setelah diverifikasi, SKP akan diterbitkan oleh DPW PPNI.</p>
            </ol>

            <!-- Persyaratan Berkas -->
            <h5 class="text-warning fw-semibold mt-4">📎 Persyaratan Berkas</h5>
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item"><strong>Proposal Kegiatan:</strong> berisi tujuan, materi, susunan acara,
                    pemateri, dan peserta.</li>
                <li class="list-group-item"><strong>Daftar Hadir:</strong> peserta dan pemateri.</li>
                <li class="list-group-item"><strong>Sertifikat Peserta:</strong> fotokopi bukti keikutsertaan.</li>
                <li class="list-group-item"><strong>Materi Kegiatan:</strong> materi yang disampaikan.</li>
                <li class="list-group-item"><strong>Foto Kegiatan:</strong> dokumentasi kegiatan.</li>
                <li class="list-group-item"><strong>Surat Rekomendasi:</strong> dari DPD PPNI.</li>
                <li class="list-group-item"><strong>Formulir SKP:</strong> formulir online resmi dari PPNI.</li>
                <li class="list-group-item"><strong>CV Pemateri:</strong> riwayat hidup pemateri kegiatan.</li>
            </ul>

            <!-- Penting untuk Diperhatikan -->
            <h5 class="text-danger fw-semibold mt-4">⚠️ Penting untuk Diperhatikan</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Kecukupan SKP:</strong> pastikan jumlah SKP sesuai syarat
                    perpanjangan STR.</li>
                <li class="list-group-item"><strong>Biaya:</strong> perhatikan biaya SKP sesuai ketentuan PPNI.</li>
                <li class="list-group-item"><strong>Platform Online:</strong> gunakan portal resmi PPNI.</li>
                <li class="list-group-item"><strong>Verifikasi:</strong> pastikan berkas diverifikasi oleh DPD/DPW.</li>
            </ul>

        </div>
    </div>
</div>

<?= $this->endSection() ?>