
    <div class="container my-5">
        <header class="page-header text-center">
            <h1>Pengajuan Surat Aktif Kuliah</h1>
            <p>
                Ajukan surat aktif kuliah Anda secara online dengan mudah dan cepat. Proses yang efisien untuk memenuhi kebutuhan administrasi akademik Anda.
            </p>
        </header>

        <div class="row g-5">
            <div class="col-lg-8">
                
                <div class="container py-5">
                    <div class="form-container">
                        <h3 class="form-title mb-4">Form Pengajuan Surat Keterangan Aktif Kuliah</h3>

                        <?php if($this->session->flashdata('message')): ?>
                            <div class="alert alert-success d-flex align-items-center p-4 mb-4 shadow-sm" role="alert" style="font-size:1.25rem; background:#d4f5e9; border:2px solid #b2dfdb;">
                                <i class="bi bi-patch-check-fill me-3 fs-1 text-success"></i>
                                <div>
                                    <?php echo $this->session->flashdata('message'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url('layanan_surat/ajukanSuratAktifKuliah') ?>" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" required>
                            </div>
                            <div class="mb-3">
                                <label for="nim_mhs" class="form-label">NIM</label>
                                <input type="text" class="form-control" id="nim_mhs" name="nim_mhs" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Alamat</label>
                                <div class="mb-2">
                                    <label for="jalan" class="form-label">Jalan</label>
                                    <input type="text" class="form-control" id="jalan" name="jalan" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="kelurahan" class="form-label">Kelurahan</label>
                                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="kota" class="form-label">Kota/Kabupaten</label>
                                    <input type="text" class="form-control" id="kota" name="kota" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">Program Studi</label>
                                <select class="form-select" id="prodi" name="prodi" required>
                                    <option value="" selected disabled>Pilih Program Studi</option>
                                    <option>Hukum Keluarga</option>
                                    <option>Manajemen Pendidikan Islam</option>
                                    <option>Pendidikan Bahasa Arab</option>
                                    <option>Pendidikan Agama Islam</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="semester" class="form-label">Semester</label>
                                <input type="number" class="form-control" id="semester" name="semester" min="1" max="14" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomor HP</label>
                                <input type="tel" class="form-control" id="no_hp" name="no_hp" required>
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
                                <label for="keperluan_surat" class="form-label">Keperluan Surat</label>
                                <input type="text" class="form-control" id="keperluan_surat" name="keperluan_surat" required>
                            </div>
                            <h6 class="mb-3">Upload Dokumen Persyaratan (PDF/JPG/PNG)</h6>
                            <div class="mb-3">
                                <label for="ukt" class="form-label">Upload Bukti Pembayaran UKT</label>
                                <input type="file" class="form-control" id="ukt" name="ukt" accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>
                            <div class="mb-3">
                                <label for="krs" class="form-label">Upload Kartu Rencana Studi (KRS)</label>
                                <input type="file" class="form-control" id="krs" name="krs" accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>
                            <div class="mb-3">
                                <label for="bukti_surat" class="form-label">Upload Bukti Surat Pendukung (opsional)</label>
                                <input type="file" class="form-control" id="bukti_surat" name="bukti_surat" accept=".pdf,.jpg,.jpeg,.png">
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-success">Ajukan Permohonan</button>
                                <button type="reset" class="btn btn-secondary mt-2">Reset Form</button>
                            </div>
                        </form>
                    </div>
                </div>




                <!-- <h2 class="section-title">Layanan Tersedia</h2> -->
                
                <!-- <div class="service-card">
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <i class="bi bi-file-earmark-arrow-down fs-2" style="color: #4db6ac;"></i>
                        <div>
                            <h3 class="h5 fw-bold mb-1">Download Format Surat</h3>
                            <p class="text-secondary small mb-0">Template surat dalam format Word/PDF</p>
                        </div>
                    </div>
                    <p class="text-secondary">Unduh template surat aktif kuliah untuk keperluan mandiri atau referensi format.</p>
                    <a href="#" class="btn-custom">
                        <i class="bi bi-download me-2"></i> Download Template
                    </a>
                </div>

                <div class="service-card">
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <i class="bi bi-send fs-2" style="color:#4db6ac;"></i>
                        <div>
                            <div class="d-flex align-items-center gap-2">
                                <h3 class="h5 fw-bold mb-0">Form Pengajuan Surat</h3>
                                <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis">Rekomendasi</span>
                            </div>
                            <p class="text-secondary small mb-0">Ajukan surat secara online dengan mudah</p>
                        </div>
                    </div>
                    <p class="text-secondary">Isi formulir pengajuan online dan surat akan diproses secara otomatis oleh sistem.</p>
                    <a href="#" class="btn-custom">
                        <i class="bi bi-pencil-square me-2"></i> Isi Form Pengajuan
                    </a>
                </div> -->

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