    <div class="container">
        <header class="page-header text-center">
            <h1>Pengajuan Surat Permohonan Pra Penelitian Skripsi</h1>
            <p>
    Surat ini diajukan oleh mahasiswa untuk memperoleh izin melakukan observasi awal, pengumpulan data, atau wawancara di instansi atau lembaga yang dituju sebagai bagian dari penyusunan skripsi.
            </p>
        </header>

        <div class="row g-5">
            <div class="col-lg-8">
                
                <div class="container py-2">
                    <div class="form-container">
                        <h3 class="form-title mb-4">Form Pengajuan Surat Permohonan Pra Penelitian Skripsi</h3>
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
                        <form action="<?= base_url('layanan_surat/simpan_pengajuan_surat_pra_penelitian') ?>" method="POST" enctype="multipart/form-data">
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
                                <label for="judul_proposal" class="form-label label-bold">Judul Proposal</label>
                                <input type="text" class="form-control" id="judul_proposal" name="judul_proposal" placeholder="Contoh: Melengkapi berkas beasiswa" value="<?= set_value('judul_proposal', $this->session->flashdata('old_input')['judul_proposal'] ?? ''); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="tempat_penelitian" class="form-label label-bold">Tempat Penelitian</label>
                                <input type="text" class="form-control" id="tempat_penelitian" name="tempat_penelitian" placeholder="Contoh: Universitas ABC" value="<?= set_value('tempat_penelitian', $this->session->flashdata('old_input')['tempat_penelitian'] ?? ''); ?>" required>
                            </div>

                            <!-- Upload Dokumen -->
                            <h6 class="mb-3 fw-bold">Upload Dokumen Persyaratan (Maksimal 2 MB)</h6>

                            <div class="mb-3">
                                <label class="form-label label-bold">Bukti Pembayaran UKT</label>
                                <input type="hidden" name="nama_dokumen[]" value="Bukti Pembayaran UKT">
                                <input type="file" class="form-control" name="dokumen[]" accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label label-bold">Kartu Rencana Studi (KRS) Semester Berjalan</label>


                                <input type="hidden" name="nama_dokumen[]" value="Kartu Rencana Studi (KRS)">
                                <input type="file" class="form-control" name="dokumen[]" accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>

                            

                            <!-- Tombol Aksi -->
                            <div class="d-grid mt-4">
                                <!-- Google reCAPTCHA dihapus -->
                                <button type="submit" class="btn btn-success">Ajukan Permohonan Aktif Kuliah</button>
                                <button type="reset" class="btn btn-secondary mt-2">Reset Form</button>
                                    
                            </div>
                            </form>
                            <!-- reCAPTCHA script dihapus -->

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
                            <li class="list-group-item d-flex gap-3"><i class="bi bi-check-circle-fill text-success"></i>Mengisi form online di website SIPENA dan mengunggah dokumen pendukung, yaitu:
                                <br>- Bukti pembayaran UKT,
                                <br>- Kartu Rencana Studi (KRS) Semester berjalan
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