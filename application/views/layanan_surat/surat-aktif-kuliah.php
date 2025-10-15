
    <style>
    .sak-modal-bg {
        background: rgba(0,0,0,0.4);
        position: fixed;
        top: 0; left: 0; right: 0; bottom: 0;
        z-index: 1050;
        display: none;
        align-items: center;
        justify-content: center;
    }
    .sak-modal-bg.show { display: flex; }
    .sak-modal {
        background: #fff;
        border-radius: 18px;
        max-width: 600px;
        width: 95vw;
        box-shadow: 0 8px 32px rgba(44,62,80,0.18);
        overflow: hidden;
        animation: fadeInUp .3s;
    }
    @keyframes fadeInUp {
        from { transform: translateY(40px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    .sak-modal-header {
        background: linear-gradient(135deg, #ff9800 80%, #ffb74d 100%);
        color: #fff;
        padding: 32px 24px 24px 24px;
        text-align: center;
        position: relative;
    }
    .sak-modal-header .sak-icon {
        background: #fff;
        color: #ff9800;
        border-radius: 50%;
        width: 56px;
        height: 56px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.2rem;
        margin: 0 auto 18px auto;
    }
    .sak-modal-header .close {
        position: absolute;
        top: 18px;
        right: 18px;
        background: none;
        border: none;
        color: #fff;
        font-size: 1.7rem;
        cursor: pointer;
        opacity: 0.8;
    }
    .sak-modal-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 8px;
    }
    .sak-modal-subtitle {
        font-size: 1.1rem;
        font-weight: 400;
        margin-bottom: 0;
        color: #ffe0b2;
    }
    .sak-info-box {
        border-radius: 12px;
        padding: 18px 18px 14px 18px;
        margin: 18px 0 0 0;
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 1.08rem;
        background: #fffde7;
        border: 1.5px solid #ffe0b2;
        color: #7a5a1a;
    }
    .sak-info-box .sak-info-ic { font-size: 1.5rem; color: #ff9800; margin-top: 2px; }
    .sak-info-box2 {
        border-radius: 12px;
        padding: 18px 18px 14px 18px;
        margin: 14px 0 0 0;
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 1.08rem;
        background: #f3f7ff;
        border: 1.5px solid #c5dafe;
        color: #1a237e;
    }
    .sak-info-box2 .sak-info-ic { font-size: 1.5rem; color: #3f51b5; margin-top: 2px; }
    .sak-steps {
        display: flex;
        flex-wrap: wrap;
        gap: 18px 0;
        justify-content: space-between;
        margin: 0 0 18px 0;
        padding: 24px 18px 0 18px;
    }
    .sak-step {
        flex: 0 0 32%;
        background: none;
        border-radius: 12px;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        min-width: 120px;
    }
    .sak-step-icon {
        font-size: 2.2rem;
        border-radius: 50%;
        width: 54px;
        height: 54px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 6px;
    }
    .sak-step-1 { background: #e3eafd; color: #3f51b5; }
    .sak-step-2 { background: #e8f5e9; color: #388e3c; }
    .sak-step-3 { background: #fffde7; color: #ff9800; }
    .sak-step-title {
        font-weight: 700;
        font-size: 1.08rem;
        margin-bottom: 2px;
        color: #222;
        text-align: center;
    }
    .sak-step-desc {
        color: #6b7280;
        font-size: 0.98rem;
        text-align: center;
    }
    .sak-modal-footer {
        display: flex;
        gap: 12px;
        justify-content: center;
        align-items: center;
        padding: 0 0 24px 0;
        margin-top: 8px;
    }
    .sak-btn-main {
        background: #3f51b5;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 12px 28px;
        font-size: 1.08rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 2px 8px rgba(44,62,80,0.08);
        transition: background 0.2s;
    }
    .sak-btn-main:hover { background: #2c387e; }
    .sak-btn-upload {
        background: #388e3c;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 12px 28px;
        font-size: 1.08rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 2px 8px rgba(44,62,80,0.08);
        transition: background 0.2s;
    }
    .sak-btn-upload:hover { background: #256427; }
    .sak-modal-caption {
        text-align: center;
        color: #b26a00;
        font-size: 1.04rem;
        margin-bottom: 0;
        margin-top: 8px;
    }
    .sak-modal-footer .bi { font-size: 1.2rem; }
    @media (max-width: 600px) {
        .sak-modal { max-width: 99vw; }
        .sak-steps { flex-direction: column; gap: 10px 0; }
        .sak-step { flex: 1 1 100%; }
    }
    </style>
    <div id="sakModal" class="sak-modal-bg">
        <div class="sak-modal">
            <div class="sak-modal-header">
                <div class="sak-icon">
                    <i class="bi bi-exclamation-triangle"></i>
                </div>
                <button class="close" id="closeSakModal" aria-label="Close">&times;</button>
                <div class="sak-modal-title"><span style="font-size:1.2rem;">⚠️</span> Persyaratan Surat Aktif Kuliah</div>
            </div>
            <div class="sak-info-box">
                <span class="sak-info-ic"><i class="bi bi-file-earmark-text"></i></span>
                <span>Untuk mengajukan Surat Keterangan Aktif Kuliah, Anda wajib melampirkan <b>Form Permohonan</b> yang sudah ditandatangani oleh Ketua Program Studi (Kapordi).</span>
            </div>
            <div class="sak-info-box2">
                <span class="sak-info-ic"><i class="bi bi-tag"></i></span>
                <span>Formulir dapat diunduh pada halaman 'Form Pengajuan Surat Aktif Kuliah'. Silakan download, isi, dan minta tanda tangan Kaprodi, lalu upload kembali pada form pengajuan.</span>
            </div>
            <div style="font-weight:600; text-align:center; margin:24px 0 0 0; font-size:1.15rem;">Langkah-langkah:</div>
            <div class="sak-steps">
                <div class="sak-step">
                    <div class="sak-step-icon sak-step-1"><i class="bi bi-download"></i></div>
                    <div class="sak-step-title">1. Download Form</div>
                    <div class="sak-step-desc">Unduh formulir permohonan</div>
                </div>
                <div class="sak-step">
                    <div class="sak-step-icon sak-step-2"><i class="bi bi-patch-check"></i></div>
                    <div class="sak-step-title">2. Isi & TTD Kaprodi</div>
                    <div class="sak-step-desc">Lengkapi dan minta tanda tangan</div>
                </div>
                <div class="sak-step">
                    <div class="sak-step-icon sak-step-3"><i class="bi bi-upload"></i></div>
                    <div class="sak-step-title">3. Upload Form</div>
                    <div class="sak-step-desc">Unggah form yang sudah lengkap</div>
                </div>
            </div>
            <div class="sak-modal-footer">
                <a href="<?php echo base_url('uploads/dokumen/Form-Permohonan-Surat-Aktif-Kuliah.docx') ?>" class="sak-btn-main" target="_blank"><i class="bi bi-download"></i> Download Formulir</a>
                <button id="lanjutPengajuanSak" class="sak-btn-upload"><i class="bi bi-upload"></i> Upload Formulir</button>
            </div>
            <div class="sak-modal-caption"><i class="bi bi-lightbulb"></i> Pastikan form sudah ditandatangani Kaprodi sebelum diupload</div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sakModal = document.getElementById('sakModal');
            var closeBtn = document.getElementById('closeSakModal');
            var lanjutBtn = document.getElementById('lanjutPengajuanSak');
            // Tampilkan modal saat halaman dibuka
            setTimeout(function(){ sakModal.style.display = 'flex'; sakModal.classList.add('show'); }, 200);
            if (closeBtn) {
                closeBtn.onclick = function() {
                    sakModal.classList.remove('show');
                    setTimeout(function(){ sakModal.style.display = 'none'; }, 200);
                };
            }
            if (lanjutBtn) {
                lanjutBtn.onclick = function() {
                    sakModal.classList.remove('show');
                    setTimeout(function(){ sakModal.style.display = 'none'; }, 200);
                    // Scroll ke form pengajuan
                    var form = document.querySelector('form[action*="store_pengajuan"]');
                    if(form) form.scrollIntoView({behavior:'smooth', block:'start'});
                };
            }
        });
    </script>
    <div class="container my-1">
        <header class="page-header text-center">
            <h1>Pengajuan Surat Aktif Kuliah</h1>
            <p>
                Ajukan surat aktif kuliah Anda secara online dengan mudah dan cepat. Proses yang efisien untuk memenuhi kebutuhan administrasi akademik Anda.
            </p>
        </header>

    <div class="row g-5">
            <div class="col-lg-8">
                
                <div class="container py-2">
                    <div class="form-container">
                        <h3 class="form-title mb-4">Form Pengajuan Surat Keterangan Aktif Kuliah</h3>
                        <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <?= $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

                        <?php if($this->session->flashdata('message')): ?>
                            <div class="alert alert-success d-flex align-items-center p-4 mb-4 shadow-sm" role="alert" style="font-size:1.25rem; background:#d4f5e9; border:2px solid #b2dfdb;">
                                <i class="bi bi-patch-check-fill me-3 fs-1 text-success"></i>
                                <div>
                                    <?php echo $this->session->flashdata('message'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <form action="<?= base_url('layanan_surat/store_pengajuan') ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="jenis_surat_id" value="<?= $jenissurat['id'] ?>">

                            <!-- Identitas Mahasiswa -->
                            <div class="mb-3">
                                <label for="nama_mhs" class="form-label label-bold">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" placeholder="Contoh: Titis Rahayu" value="<?= set_value('nama_mhs', $this->session->flashdata('old_input')['nama_mhs'] ?? ''); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="nim_mhs" class="form-label label-bold">NIM</label>
                                <input type="text" class="form-control" id="nim_mhs" name="nim_mhs" placeholder="Contoh: 2104001234" value="<?= set_value('nim_mhs', $this->session->flashdata('old_input')['nim_mhs'] ?? ''); ?>" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="tempat_lahir" class="form-label label-bold">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Contoh: Batam" value="<?= set_value('tempat_lahir', $this->session->flashdata('old_input')['tempat_lahir'] ?? ''); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_lahir" class="form-label label-bold">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir', $this->session->flashdata('old_input')['tanggal_lahir'] ?? ''); ?>" required>
                                </div>
                            </div>

                            <!-- Alamat -->
                            <div class="mb-3">
                                <label class="form-label label-bold">Alamat Mahasiswa</label>
                                <input type="text" class="form-control mb-2" id="jalan" name="jalan" placeholder="Contoh: Jl. Hang Tuah No. 12" value="<?= set_value('jalan', $this->session->flashdata('old_input')['jalan'] ?? ''); ?>" required>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" value="<?= set_value('kelurahan', $this->session->flashdata('old_input')['kelurahan'] ?? ''); ?>" required>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="<?= set_value('kecamatan', $this->session->flashdata('old_input')['kecamatan'] ?? ''); ?>" required>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota/Kabupaten" value="<?= set_value('kota', $this->session->flashdata('old_input')['kota'] ?? ''); ?>" required>
                            </div>

                            <!-- Akademik -->
                            <div class="form-group mb-3">
                                <label for="prodi_id" class="form-label label-bold">Program Studi</label>
                                <select name="prodi_id" id="prodi_id" class="form-control" required>
                                    <option value="">-- Pilih Program Studi --</option>
                                    <?php $old_prodi = set_value('prodi_id', $this->session->flashdata('old_input')['prodi_id'] ?? ''); ?>
                                    <?php foreach($prodi as $p): ?>
                                        <option value="<?= $p['id'] ?>" <?= $old_prodi == $p['id'] ? 'selected' : '' ?>><?= $p['nama_prodi'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="semester" class="form-label label-bold">Semester</label>
                                <input type="number" class="form-control" id="semester" name="semester" min="1" max="14" placeholder="Contoh: 6" value="<?= set_value('semester', $this->session->flashdata('old_input')['semester'] ?? ''); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label label-bold">Nomor HP</label>
                                <input type="tel" class="form-control" id="no_hp" name="no_hp" placeholder="Contoh: 081234567890" value="<?= set_value('no_hp', $this->session->flashdata('old_input')['no_hp'] ?? ''); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label label-bold">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="alamat email aktif" value="<?= set_value('email', $this->session->flashdata('old_input')['email'] ?? ''); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="tahun_akademik_awal" class="form-label label-bold">Tahun Akademik</label>
                                <div class="d-flex gap-2">
                                    <input type="text" class="form-control" name="tahun_akademik_awal" placeholder="2024" value="<?= set_value('tahun_akademik_awal', $this->session->flashdata('old_input')['tahun_akademik_awal'] ?? ''); ?>" required>
                                    <span class="align-self-center">/</span>
                                    <input type="text" class="form-control" name="tahun_akademik_akhir" placeholder="2025" value="<?= set_value('tahun_akademik_akhir', $this->session->flashdata('old_input')['tahun_akademik_akhir'] ?? ''); ?>" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="keperluan_surat" class="form-label label-bold">Keperluan Surat</label>
                                <input type="text" class="form-control" id="keperluan_surat" name="keperluan_surat" placeholder="Contoh: Melengkapi berkas beasiswa" value="<?= set_value('keperluan_surat', $this->session->flashdata('old_input')['keperluan_surat'] ?? ''); ?>" required>
                            </div>

                                                        <!-- Upload Dokumen -->
                                                        <div class="upload-section-title mb-3">
                                                            <i class="bi bi-upload me-2"></i>
                                                            Upload Dokumen Persyaratan <span class="small">(Maksimal 2 MB)</span>
                                                        </div>

                            <div class="mb-3">
                                <label class="form-label label-bold">Bukti Pembayaran UKT</label>
                                <input type="hidden" name="nama_dokumen[]" value="Bukti Pembayaran UKT">
                                <input type="file" class="form-control" name="dokumen[]" accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label label-bold">Kartu Rencana Studi (KRS) Semester Berjalan yang telah ditandatangani PA dan Kasubbag Akademik</label>
                                <input type="hidden" name="nama_dokumen[]" value="Kartu Rencana Studi (KRS)">
                                <input type="file" class="form-control" name="dokumen[]" accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label label-bold">Bukti surat permohonan yang telah ditandatangani oleh Ketua Program Studi</label>

                                <input type="hidden" name="nama_dokumen[]" value="Bukti Surat Pendukung">
                                <input type="file" class="form-control" name="dokumen[]" accept=".pdf,.jpg,.jpeg,.png">
                            </div>


                            <!-- Tombol Aksi -->
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-success">Ajukan Permohonan Aktif Kuliah</button>
                                <button type="reset" class="btn btn-secondary mt-2">Reset Form</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>

            <div class="col-lg-4">
                <h2 class="section-title">Informasi Penting</h2>
                <div class="info-wrapper">
                    <div class="mb-5">
                        <h3 class="h5 fw-bold d-flex align-items-center gap-2 mb-3">
                            <i class="bi bi-patch-check-fill" style="color:#4db6ac;"></i>
                            Persyaratan Pengajuan
                        </h3>
                        <p class="text-secondary mb-3">Pastikan Anda memenuhi semua persyaratan berikut sebelum mengajukan surat.</p>
                        <ul class="list-group list-group-flush">
                                                        <li class="list-group-item d-flex flex-column gap-2">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <i class="bi bi-check-circle-fill text-success"></i>
                                                                <span>Mengunduh formulir permohonan surat keterangan aktif kuliah.</span>
                                                            </div>
                                                            <a href="<?php echo base_url('uploads/dokumen/Form-Permohonan-Surat-Aktif-Kuliah.docx') ?>" class="btn btn-gradient btn-sm mt-2 align-self-start" target="_blank">
                                                                <i class="bi bi-download me-1"></i> Download Form Permohonan Aktif Kuliah
                                                            </a>
                                                        </li>
                            <!-- <li class="list-group-item d-flex gap-3"><i class="bi bi-x-circle-fill text-danger"></i> Tidak memiliki tunggakan pembayaran akademik</li> -->
                            <li class="list-group-item d-flex gap-3"><i class="bi bi-check-circle-fill text-success"></i> Mengisi formulir dengan lengkap dan meminta persetujuan Ketua Program Studi.</li>
                            <li class="list-group-item d-flex gap-3"><i class="bi bi-check-circle-fill text-success"></i>Mengisi form online di website SIPENA dan mengunggah dokumen pendukung, yaitu:
                                <br>- Bukti pembayaran UKT,
                                <br>- Kartu Rencana Studi (KRS) semester berjalan yang telah ditandatangani oleh PA dan Kasubbag Akademik,
                                <br>- Formulir permohonan yang telah ditandatangani oleh Ketua Program Studi.
                            </li>
                        </ul>
                    </div>
                </div>
<br><br>
                <div class="info-wrapper">
                    <div class="mb-5">
                        <h3 class="h5 fw-bold d-flex align-items-center gap-2 mb-3">
                            <i class="bi bi-patch-check-fill" style="color:#4db6ac;"></i>
                            Catatan Penting
                        </h3>
                        <ul class="note-list">
                            <li><b>Simpan kode resi pengajuan untuk melacak status surat Anda.</b></li>
                            <li>Pastikan semua persyaratan sudah lengkap sebelum mengisi formulir pengajuan.</li>
                            <li>Proses verifikasi dan penerbitan surat membutuhkan waktu maksimal 2 hari kerja.</li>
                            <li>Surat yang sudah diterbitkan dapat diunduh melalui sistem di menu lacak surat.</li>
                            <li>Untuk pertanyaan lebih lanjut, hubungi bagian administrasi akademik kampus.</li>                             
                        </ul>
                    </div>
                </div>

            </div>


        </div>

        

        <div class="text-center mt-4">
            <a href="<?php echo base_url('layanan_surat')?>" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-1"></i> Kembali ke Layanan Surat
            </a>
        </div>
         <div class="container content-container my-5">
        
    </div>
    </div>
</body>
</html>