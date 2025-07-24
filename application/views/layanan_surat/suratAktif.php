
    <div class="container my-5">
        <header class="page-header text-center">
            <h1>Pengajuan Surat Aktif Kuliah</h1>
            <p>
                Ajukan surat aktif kuliah Anda secara online dengan mudah dan cepat. Proses yang efisien untuk memenuhi kebutuhan administrasi akademik Anda.
            </p>
        </header>

    

     
       
         
  <!-- <style>
    body {
      background-color: #f9f9f9;
      font-family: 'Segoe UI', sans-serif;
    }
    .info-box {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      border-left: 6px solid #0d6efd;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .form-section {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .form-label {
      font-weight: 600;
      color: #0d6efd;
    }
  </style> -->


  <div class="row g-4">
    <!-- Informasi Samping -->
    <div class="col-md-4">
      <div class="custom-card">
        <h5><strong>Informasi Usulan Surat Keterangan Aktif Kuliah</strong></h5>
        <p>Bagi Mahasiswa Yang Akan Melakukan Usulan Surat Keterangan Kuliah Menyiapkan Data Dukung Bukti Regis Dan KRS Pada Periode Aktif</p>
        <p>Setelah Melakukan Usulan Surat Keterangan Aktif Kuliah, Bisa Melihat Progress Usulan Pada Menu Progress Layanan</p>
        <p>Jika Progress Layanan Usulan Surat Keterangan Kuliah Statusnya Sudah Diproses, Silahkan Mengunduh Pada Aplikasi atau Mengecek Email Aktif Untuk Mengunduh Surat Keterangan Aktif Kuliah</p>

        <hr>

        <p><strong>Progress Layanan:</strong><br>
          Surat Keterangan Aktif Kuliah 2025<br>
          <span class="text-success">Sudah Diproses: 1033</span><br>
          <span class="text-danger">Belum Diproses: 11</span>
        </p>

        <hr>

        <p><strong>Direktorat Poltekkes Kupang</strong><br>
        Administrasi dan Akademik<br>
        Jln. Piet A Tallo, Oebobo, Kupang</p>
      </div>
    </div>

    <!-- Form Utama -->
    <div class="col-md-8">
      
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
    
  </div>

</body>
</html>

    </div>
</body>
</html>