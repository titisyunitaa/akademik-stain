
    <div class="container my-5">
        <header class="page-header text-center">
            <h1>Pengajuan Surat Penunjuk Dosen Pembimbing</h1>
            <p>
                Digunakan untuk permohonan penunjukan dosen pembimbing tugas akhir/skripsi oleh mahasiswa kepada pihak akademik.
            </p>
        </header>

        <div class="row g-5">
            <div class="col-lg-8">
                
                <div class="container py-5">
                    <div class="form-container">
                        <h3 class="form-title mb-4">Form Pengajuan Surat Penunjuk Dosen Pembimbing</h3>
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
                        <form action="<?= base_url('layanan_surat/simpan_pengajuan_dosen_pembimbing') ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="jenis_surat_id" value="<?= $jenissurat['id'] ?>">

                            <!-- Identitas Mahasiswa -->
                            <div class="mb-3">
                                <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" placeholder="Contoh: Titis Rahayu" required>
                            </div>
                            <div class="mb-3">
                                <label for="nim_mhs" class="form-label">NIM</label>
                                <input type="text" class="form-control" id="nim_mhs" name="nim_mhs" placeholder="Contoh: 2104001234" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Contoh: Batam" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                </div>
                            </div>

                            <!-- Alamat -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Alamat Mahasiswa</label>
                                <input type="text" class="form-control mb-2" id="jalan" name="jalan" placeholder="Contoh: Jl. Hang Tuah No. 12" required>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" required>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota/Kabupaten" required>
                            </div>

                            <!-- Akademik -->
                            <div class="form-group mb-3">
                                <label for="prodi_id" class="form-label">Program Studi</label>
                                <select name="prodi_id" id="prodi_id" class="form-control" required>
                                    <option value="">-- Pilih Program Studi --</option>
                                    <?php foreach($prodi as $p): ?>
                                        <option value="<?= $p['id'] ?>"><?= $p['nama_prodi'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="semester" class="form-label">Semester</label>
                                <input type="number" class="form-control" id="semester" name="semester" min="1" max="14" placeholder="Contoh: 6" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomor HP</label>
                                <input type="tel" class="form-control" id="no_hp" name="no_hp" placeholder="Contoh: 081234567890" required>
                            </div>
                            <div class="mb-3">
                                <label for="tahun_akademik_awal" class="form-label">Tahun Akademik</label>
                                <div class="d-flex gap-2">
                                    <input type="text" class="form-control" name="tahun_akademik_awal" placeholder="2024" required>
                                    <span class="align-self-center">/</span>
                                    <input type="text" class="form-control" name="tahun_akademik_akhir" placeholder="2025" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="judul_skripsi" class="form-label">Judul Skripsi</label>
                                <input type="text" class="form-control" id="judul_skripsi" name="judul_skripsi" placeholder="Contoh: Melengkapi berkas beasiswa" required>
                            </div>

                            <div class="mb-3">
                                <label for="dosbing1" class="form-label">Dosen Pembimbing 1</label>
                                <input type="text" class="form-control" id="dosbing1" name="dosbing1" placeholder="Nama Dosen Pembimbing 1" required>
                            </div>

                            <div class="mb-3">
                                <label for="dosbing2" class="form-label">Dosen Pembimbing 2</label>
                                <input type="text" class="form-control" id="dosbing2" name="dosbing2" placeholder="Nama Dosen Pembimbing 2" required>
                            </div>

                            <!-- Upload Dokumen -->
                            <h6 class="mb-3 fw-bold">Upload Dokumen Persyaratan</h6>

                            <div class="mb-3">
                                <label class="form-label">Proposal Skripsi yang telah di ACC</label>
                                <input type="hidden" name="nama_dokumen[]" value="Proposal Skripsi yang telah di ACC">
                                <input type="file" class="form-control" name="dokumen[]" accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">form permohonan yang telah di TTD</label>
                                <input type="hidden" name="nama_dokumen[]" value="form permohonan yang telah di TTD">
                                <input type="file" class="form-control" name="dokumen[]" accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>


                            <!-- Tombol Aksi -->
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-success">Ajukan Permohonan</button>
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
                            <li class="list-group-item d-flex gap-3"><i class="bi bi-check-circle-fill text-success"></i> Mahasiswa aktif terdaftar di semester berjalan</li>
                            <li class="list-group-item d-flex gap-3"><i class="bi bi-check-circle-fill text-success"></i> Telah menyelesaikan registrasi ulang semester aktif</li>
                            <li class="list-group-item d-flex gap-3"><i class="bi bi-x-circle-fill text-danger"></i> Tidak memiliki tunggakan pembayaran akademik</li>
                            <li class="list-group-item d-flex gap-3"><i class="bi bi-check-circle-fill text-success"></i> Melampirkan KTM (Kartu Tanda Mahasiswa) yang masih berlaku</li>
                            <li class="list-group-item d-flex gap-3"><i class="bi bi-check-circle-fill text-success"></i> Mengisi formulir pengajuan dengan lengkap dan benar</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>

        <div class="custom-card">
            <h2 class="card-title"><i class="bi bi-journal-text" style ="color:#4db6ac;"></i> Catatan Penting</h2>
            <hr class="my-4">
            <ul class="note-list">
                <li><b>Simpan kode resi pengajuan untuk melacak status surat Anda.</b></li>
                <li>Pastikan semua persyaratan sudah lengkap sebelum mengisi formulir pengajuan.</li>
                <li>Proses verifikasi dan penerbitan surat membutuhkan waktu maksimal 2 hari kerja.</li>
                <li>Surat yang sudah diterbitkan dapat diunduh melalui email atau sistem tracking.</li>
                <li>Untuk pertanyaan lebih lanjut, hubungi bagian administrasi akademik kampus.</li>
            </ul>
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