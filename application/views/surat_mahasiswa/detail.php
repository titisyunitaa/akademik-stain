
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $title;?></h1>
            <?php echo $surat['kode_resi']?> - <?php echo $surat['jenis_surat']?>
            <?php echo form_error('menu','<div class="alert alert-danger" role="alert">','</div>'); ?>
            <?php if ($this->session->flashdata('sukses')): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('sukses'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>
            <?php echo $this->session->flashdata('message');?>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7">

            <div class="card">
                <div class="card-header bg-light">
                  <h2 class="card-title font-weight-bold">Informasi Mahasiswa</h2>
                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <b>Nama Lengkap :</b> 
                      <p class="text-muted mb-2"><?php echo $surat['nama_mhs']; ?></p>

                      <b>No.HP</b>
                      <p class="text-muted mb-2"><?php echo $surat['no_hp']; ?></p>

                      <b>Email</b>
                      <p class="text-muted mb-2"><?php echo $surat['email']; ?></p>
                  
                    </div>
                    <div class="col-md-6">
                      <b>NIM :</b> 
                      <p class="text-muted mb-2"><?php echo $surat['nim_mhs']; ?></p>

                      <b>Tempat Tanggal Lahir</b>
                      <p class="text-muted mb-2"><?php echo $surat['tempat_lahir']; ?> / <?php echo $surat['tanggal_lahir']; ?></p>

                      <b>Alamat</b>
                      <p class="text-muted mb-2"><?php echo $surat['jalan']; ?>, <?php echo $surat['kelurahan']; ?>, <?php echo $surat['kecamatan']; ?>, <?php echo $surat['kota']; ?></p>
                  
                    </div>
                  </div>
                </div>
              </div>


            <div class="card">
              <div class="card-header bg-light">
                <h2 class="card-title font-weight-bold">Akademik Mahasiswa</h2>
              </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <b>Tahun Akademik</b> 
                    <p class="text-muted mb-2"><?php echo $surat['tahun_akademik_awal']; ?> / <?php echo $surat['tahun_akademik_akhir']; ?></p>

                    <b>Program Studi</b> 
                    <p class="text-muted mb-2"><?php echo $surat['nama_prodi']; ?></p>

                    <?php if (isset($surat['jenis_surat']) && (strtolower($surat['jenis_surat']) === 'pra penelitian' || strtolower($surat['jenis_surat']) === 'surat permohonan pra penelitian skripsi' || strtolower($surat['jenis_surat']) === 'surat permohonan izin penelitian skripsi')): ?>
                      <b>Judul Proposal/Skripsi</b>
                      <p class="text-muted mb-2"><?php echo !empty($surat['judul_proposal']) ? $surat['judul_proposal'] : (!empty($surat['judul_skripsi']) ? $surat['judul_skripsi'] : '-'); ?></p>
                      
                    <?php endif; ?>
                  </div>
                  <div class="col-md-6">
                    <b>Semester</b> 
                    <p class="text-muted mb-2"><?php echo $surat['semester']; ?></p>

                    <?php if (isset($surat['jenis_surat']) && strtolower($surat['jenis_surat']) === 'pra penelitian'): ?>
                      <b>Tempat Penelitian</b>
                      <p class="text-muted mb-2"><?php echo !empty($surat['tempat_penelitian']) ? $surat['tempat_penelitian'] : '-'; ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header bg-light">
                <h2 class="card-title font-weight-bold">Detail Pengajuan</h2>
              </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    
                    <b>Jenis Surat</b> 

                    <p class="text-muted mb-2"><?php echo $surat['jenis_surat']; ?></p>

                    <?php if (isset($surat['jenis_surat']) && strtolower($surat['jenis_surat']) === 'surat permohonan izin penelitian skripsi'): ?>
                      <b>Judul Skripsi</b>
                      <p class="text-muted mb-2"><?php echo !empty($surat['judul_skripsi']) ? $surat['judul_skripsi'] : '-'; ?></p>
                      <b>Tempat Penelitian</b>
                      <p class="text-muted mb-2"><?php echo !empty($surat['tempat_penelitian_izin']) ? $surat['tempat_penelitian_izin'] : '-'; ?></p>
                    <?php endif; ?>

                                        <?php if (isset($surat['jenis_surat']) && strtolower($surat['jenis_surat']) === 'surat permohonan pra penelitian skripsi'): ?>
                                          <b>Judul Proposal</b>
                                          <p class="text-muted mb-2"><?php echo !empty($surat['judul_proposal']) ? $surat['judul_proposal'] : '-'; ?></p>
                                          <b>Tempat Penelitian</b>
                                          <p class="text-muted mb-2"><?php echo !empty($surat['tempat_penelitian_pra']) ? $surat['tempat_penelitian_pra'] : '-'; ?></p>
                                        <?php endif; ?>

                    <?php if (isset($surat['jenis_surat']) && strtolower(trim($surat['jenis_surat'])) === 'surat aktif kuliah'): ?>
                      <b>Keperluan</b>
                      <p class="text-muted mb-2"><?php echo $surat['keperluan_surat']; ?></p>
                    <?php endif; ?>

                    
                    
                  </div>
                  <div class="col-md-6">
                    <b>Nomor Surat</b> 
                    <?php
                      // Jika nomor_surat sudah mengandung format lengkap, tampilkan apa adanya
                      $nomor = !empty($surat['nomor_surat']) ? $surat['nomor_surat'] : '...';
                      echo '<p class="text-muted mb-2">' . htmlspecialchars($nomor) . '</p>';
                    ?>
                    <b>Tanggal Pengajuan</b> 
                    <p class="text-muted mb-2"><?php echo $surat['created_at']; ?></p>
                    

                      <?php if (!empty($surat['kepada'])): ?>
                        <b>Kepada</b>
                        <p class="text-muted mb-2"><?php echo htmlspecialchars($surat['kepada']); ?></p>
                      <?php else: ?>
                        <!-- Form Kepada hanya tampil jika data belum ada -->
                        <form action="<?= base_url('surat_mahasiswa/simpan_kepada/' . $surat['id']) ?>" method="post" class="mb-3" id="formKepada">
                          <div class="form-group">
                            <label for="kepada"><strong>Kepada</strong></label>
                            <input type="text" class="form-control" id="kepada" name="kepada" placeholder="Contoh: Kepala / Ketua " value="" required>
                          </div>
                          <button type="submit" class="btn btn-primary btn-block mt-2">Simpan Data Kepada</button>
                        </form>
                      <?php endif; ?>

                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header bg-light">
                <h5 class="card-title mb-0">Dokumen Pendukung</h5>
              </div>
              <div class="card-body">
                <?php foreach ($dokumen as $doc): ?>
                  <div class="row align-items-center py-2 border-bottom">
                    <div class="d-flex justify-content-between align-items-center border p-2 rounded">
                      <div>
                        <i class="fas fa-file-pdf text-danger mr-2"></i><strong><?= $doc['nama_file'] ?></strong><br>
                        <small><?= $doc['jenis_file'] ?></small>
                      </div>

                      <a href="<?= base_url($doc['path_file']) ?>" 
                        target="_blank" 
                        class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-eye"></i> Lihat Dokumen
                      </a>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>



            
          </div>
          
          <div class="col-md-5">
            <!-- Riwayat Status Pengajuan -->
            <div class="card mb-3">
              <div class="card-header bg-white fw-bold">
                <i class="fas fa-clock me-1"></i> Riwayat
              </div>
              <div class="card-body">
                <?php if (!empty($log_status)): ?>
                  <?php $current_status = isset($surat['status']) ? $surat['status'] : null; ?>
                  <!-- <ul class="timeline list-unstyled mb-0"> -->
                    <?php foreach ($log_status as $i => $log): ?>
                      <?php
                        // Lingkaran hijau pada status yang sama dengan status surat saat ini
                        $is_active = ($log['status'] === $current_status);
                      ?>
                      <li class="mb-2 d-flex align-items-start">
                        <span class="me-2 mt-1" style="width:12px; height:12px; border-radius:50%; display:inline-block; background:<?= $is_active ? '#4caf50' : '#e0e0e0' ?>;"></span>
                        <div>
                          <span class="fw-bold"><?= htmlspecialchars($log['status']) ?></span><br>
                          <small class="text-muted">
                            <?= date('d M Y, H:i', strtotime($log['timestamp'])) ?>
                          </small>
                          <?php if (!empty($log['keterangan'])): ?>
                            <div class="text-secondary small mt-1"> <?= htmlspecialchars($log['keterangan']) ?> </div>
                          <?php endif; ?>
                        </div>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                <?php else: ?>
                  <span class="text-muted">Belum ada riwayat status.</span>
                <?php endif; ?>
              </div>
            </div>
            <div class="card">
                <div class="card-header bg-light">
                  <h2 class="card-title font-weight-bold">Aksi</h2>
                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="d-flex flex-column gap-2" style="max-width: 220px;">
                      <!-- Tombol Setujui -->
                      <?php if (isset($surat['status']) && $surat['status'] === 'menunggu verifikasi'): ?>
                        <a href="<?= base_url('surat_mahasiswa/setujui/' . $surat['id']) ?>" 
                          class="btn btn-success btn-block">
                          <i class="fas fa-check-circle me-1"></i> Setujui Pengajuan
                        </a>
                      <?php endif; ?>


                      <!-- Tombol Cetak Surat hanya jika status diproses -->
                      <?php if (isset($surat['status']) && ($surat['status'] === 'diproses' || $surat['status'] === 'menunggu tanda tangan')): ?>
                        <?php if ($surat['status'] === 'diproses'): ?>
                          <a href="<?= base_url('surat_mahasiswa/cetak_surat/' . $surat['id']) ?>" 
                            class="btn btn-light btn-block border">
                            <i class="fas fa-file-alt me-1 text-success"></i> Cetak Surat
                          </a>
                          <?php if (empty($surat['nomor_surat'])): ?>
                            <!-- Form input nomor surat hanya jika belum ada nomor surat -->
                            <form action="<?= base_url('surat_mahasiswa/simpan_nomor_surat/' . $surat['id']) ?>" method="post" class="mt-2">
                              <div class="form-group">
                                <label for="nomor_surat"><strong>Nomor Surat</strong></label>
                                <div class="input-group">
                                  <span class="input-group-text">B-</span>
                                  <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" placeholder="Nomor" value="" required style="max-width:100px;">
                                  <span class="input-group-text">/Sti.20/1.1/HM.00/<?php echo date('m'); ?>/<?php echo date('Y'); ?></span>
                                </div>
                                <small class="form-text text-muted">Isi hanya angka/nomor di antara B- dan /Sti.20/1.1/HM.00/...</small>
                              </div>
                              <button type="submit" class="btn btn-primary btn-block mt-2">Simpan Nomor Surat</button>
                            </form>
                          <?php endif; ?>
                          <!-- Opsi tampilkan tanda tangan, hanya jika sudah ada nomor surat -->
                            <!-- Opsi tanda tangan digital/manual, hanya jika sudah ada nomor surat -->
                            <?php if (!empty($surat['nomor_surat'])): ?>
                              <form action="<?= base_url('surat_mahasiswa/set_tampilkan_ttd/' . $surat['id']) ?>" method="post" class="mb-3 mt-2">
                                <div class="form-group">
                                  <label><strong>Pilih Opsi Tanda Tangan Pimpinan:</strong></label><br>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tampilkan_ttd" id="ttd_yes" value="1" <?= (isset($surat['tampilkan_ttd']) && $surat['tampilkan_ttd'] == 1) ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="ttd_yes">Tempel Tanda Tangan Digital (Otomatis di PDF)</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tampilkan_ttd" id="ttd_no" value="0" <?= (isset($surat['tampilkan_ttd']) && $surat['tampilkan_ttd'] == 0) ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="ttd_no">Tanpa Tanda Tangan (Cetak Kosong, Tanda Tangan Manual)</label>
                                  </div>
                                  <button type="submit" class="btn btn-primary btn-sm ms-2">Simpan Opsi</button>
                                </div>
                              </form>
                              <?php if (isset($surat['tampilkan_ttd'])): ?>
                                <a href="<?= base_url('surat_mahasiswa/cetak_surat/' . $surat['id']) ?>" class="btn btn-success btn-block mt-2">
                                  <i class="fas fa-print me-1"></i> Cetak Surat Final
                                </a>
                                <a href="<?= base_url('surat_mahasiswa/menunggu_ttd/' . $surat['id']) ?>" class="btn btn-warning btn-block mt-2">
                                  <i class="fas fa-pen me-1"></i> Menunggu Tanda Tangan Pimpinan
                                </a>
                              <?php endif; ?>
                            <?php endif; ?>
                        <?php elseif ($surat['status'] === 'menunggu tanda tangan'): ?>
                          <!-- Form upload surat final -->
                          <form action="<?= base_url('surat_mahasiswa/upload_surat_final/' . $surat['id']) ?>" method="post" enctype="multipart/form-data" class="mt-2">
                            <div class="form-group">
                              <label for="surat_final"><strong>Upload Surat Final (PDF, sudah ditandatangani & cap basah)</strong></label>
                              <input type="file" class="form-control" id="surat_final" name="surat_final" accept="application/pdf" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-block mt-2">Upload & Selesaikan</button>
                          </form>
                        <?php endif; ?>
                      <?php endif; ?>
<?php if (isset($surat['status']) && $surat['status'] === 'selesai' && !empty($surat['file_surat_pdf'])): ?>
  <div class="d-flex flex-column gap-2 mt-2" style="max-width: 220px;">
    <a href="<?= base_url($surat['file_surat_pdf']) ?>" target="_blank" class="btn btn-info btn-block">
      <i class="fas fa-file-pdf me-1"></i> Detail Dokumen Surat Final
    </a>
  </div>
<?php endif; ?>
                    </div>
                  </div>
                </div>
            </div>

            <?php if (isset($surat['status']) && $surat['status'] === 'menunggu verifikasi'): ?>
            <div id="catatanAdminBox">
              <div class="card shadow-sm border mb-3" style="max-width: 500px;">
                <div class="card-header bg-white fw-bold">
                  Catatan Admin
                </div>
                <div class="card-body">
                  <textarea class="form-control mb-3" name="keterangan_admin_area" id="keterangan_admin" rows="4" placeholder="Tambahkan catatan atau alasan penolakan..."></textarea>
                   <form id="formTolak" action="<?= base_url('surat_mahasiswa/tolak/' . $surat['id']) ?>" method="post" onsubmit="return cekCatatanTolak();">
                          <input type="hidden" name="keterangan_admin" id="input_keterangan_admin">
                          <button type="submit" class="btn btn-danger btn-block">
                            </i> Tolak Pengajuan
                          </button>
                        </form>
                </div>
              </div>
            </div>
            <?php endif; ?>
<script>
function cekCatatanTolak() {
  var catatan = document.getElementById('keterangan_admin').value.trim();
  if (!catatan) {
    // Tampilkan notifikasi custom (bisa pakai toastr, sweetalert, atau alert biasa)
    // Contoh pakai alert sederhana:
    alert('Catatan Diperlukan\nMohon berikan alasan penolakan.');
    return false;
  }
  document.getElementById('input_keterangan_admin').value = catatan;
  return true;
}

// Sembunyikan catatan admin & tombol tolak jika tombol setujui diklik
document.querySelector('.btn-success.btn-block')?.addEventListener('click', function() {
  document.getElementById('catatanAdminBox')?.style.setProperty('display', 'none', 'important');
});
</script>
              </div>
            </div>

            



          </div>

        </div>
      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




