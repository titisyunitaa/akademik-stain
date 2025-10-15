<!-- Edit Surat Mahasiswa -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Surat Mahasiswa</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Edit Surat Mahasiswa</h3>
        </div>
        <form method="post" action="<?php echo base_url('surat_mahasiswa/update/'.$surat['id']); ?>">
          <div class="card-body">
            <div class="form-group">
              <label>Nama Mahasiswa</label>
              <input type="text" name="nama_mhs" class="form-control" value="<?php echo htmlspecialchars($surat['nama_mhs']); ?>" required>
            </div>
            <div class="form-group">
              <label>NIM</label>
              <input type="text" name="nim_mhs" class="form-control" value="<?php echo htmlspecialchars($surat['nim_mhs']); ?>" required>
            </div>
            <div class="form-group">
              <label>Prodi</label>
              <input type="text" name="nama_prodi" class="form-control" value="<?php echo htmlspecialchars($surat['nama_prodi']); ?>" required>
            </div>
            <div class="form-group">
              <label>Jenis Surat</label>
              <input type="text" name="jenis_surat" class="form-control" value="<?php echo htmlspecialchars($surat['jenis_surat']); ?>" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select name="status" class="form-control" required>
                <option value="menunggu verifikasi" <?php echo ($surat['status']=='menunggu verifikasi')?'selected':''; ?>>Menunggu Verifikasi</option>
                <option value="diproses" <?php echo ($surat['status']=='diproses')?'selected':''; ?>>Diproses</option>
                <option value="disetujui" <?php echo ($surat['status']=='disetujui')?'selected':''; ?>>Disetujui</option>
                <option value="ditolak" <?php echo ($surat['status']=='ditolak')?'selected':''; ?>>Ditolak</option>
                <option value="selesai" <?php echo ($surat['status']=='selesai')?'selected':''; ?>>Selesai</option>
              </select>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="<?php echo base_url('surat_mahasiswa'); ?>" class="btn btn-secondary">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
