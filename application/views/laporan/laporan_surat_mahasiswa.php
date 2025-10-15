<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-5">
            <h1><?php echo $title;?></h1>
            <?php echo form_error('menu','<div class="alert alert-danger" role="alert">','</div>'); ?>
            <?php echo $this->session->flashdata('message');?>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
         

            <div class="card">
              <div class="card-header">
                <form method="get" class="form-inline">
                  <div class="form-group mr-2">
                    <select name="periode" class="form-control" id="periode" required>
                      <option value="">Pilih Periode</option>
                      <option value="minggu" <?= $periode=='minggu'?'selected':'' ?>>Per Minggu</option>
                      <option value="bulan" <?= $periode=='bulan'?'selected':'' ?>>Per Bulan</option>
                      <option value="tahun" <?= $periode=='tahun'?'selected':'' ?>>Per Tahun</option>
                    </select>
                  </div>
                  <div class="form-group mr-2">
                    <input type="number" name="tahun" class="form-control" placeholder="Tahun" value="<?= $tahun ?>">
                  </div>
                  <div class="form-group mr-2" id="bulan-field" style="display:none;">
                    <select name="bulan" class="form-control">
                      <option value="">Pilih Bulan</option>
                      <?php for($i=1;$i<=12;$i++): ?>
                        <option value="<?= $i ?>" <?= $bulan==$i?'selected':'' ?>><?= date('F', mktime(0,0,0,$i,10)) ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                  <div class="form-group mr-2" id="minggu-field" style="display:none;">
                    <select name="minggu" class="form-control">
                      <option value="">Pilih Minggu</option>
                      <?php for($i=1;$i<=5;$i++): ?>
                        <option value="<?= $i ?>" <?= $minggu==$i?'selected':'' ?>>Minggu ke-<?= $i ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Tampilkan</button>
                </form>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Prodi</th>
                        <th>Jenis Surat</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(empty($surat_mahasiswa)): ?>
                        <tr><td colspan="7" class="text-center">Tidak ada data</td></tr>
                      <?php else: ?>
                        <?php $no=1; foreach($surat_mahasiswa as $sm): if(strtolower($sm['status'])!=='selesai') continue; ?>
                          <tr>
                            <td><?= $no++ ?></td>
                            <td><?= htmlspecialchars($sm['nama_mhs']) ?></td>
                            <td><?= htmlspecialchars($sm['nim_mhs']) ?></td>
                            <td><?= htmlspecialchars($sm['nama_prodi']) ?></td>
                            <td><?= htmlspecialchars($sm['jenis_surat']) ?></td>
                            <td><?= date('d-m-Y', strtotime($sm['created_at'])) ?></td>
                            <td><span class="badge badge-success">Selesai</span></td>
                          </tr>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

<script>
  function toggleFields() {
    var periode = document.getElementById('periode').value;
    document.getElementById('bulan-field').style.display = (periode === 'bulan' || periode === 'minggu') ? '' : 'none';
    document.getElementById('minggu-field').style.display = (periode === 'minggu') ? '' : 'none';
  }
  document.getElementById('periode').addEventListener('change', toggleFields);
  window.onload = toggleFields;
</script>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    
  </div>
  <!-- /.content-wrapper -->







