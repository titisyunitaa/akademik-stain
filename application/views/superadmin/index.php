



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $title;?></h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <h5 class="mb-2">Kelola pengajuan dan validasi surat mahasiswa</h5>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow-none">
              <span class="info-box-icon bg-warning"><i class="fa-solid fa-clock"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Menunggu Verifikasi </span>
                <span class="info-box-number"><?php echo $menunggu_verifikasi?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow-sm">
              <span class="info-box-icon bg-success"><i class="fa-solid fa-check"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Surat Diproses</span>
                <span class="info-box-number"><?php echo $diproses?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow">
              <span class="info-box-icon bg-danger"><i class="fa-solid fa-x"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Surat Ditolak</span>
                <span class="info-box-number"><?php echo $ditolak?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow-lg">
              <span class="info-box-icon bg-info"><i class="fa-solid fa-envelope"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Surat Bulan Ini</span>
                <span class="info-box-number"><?php echo $total?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Pengajuan Baru Masuk -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Pengajuan Surat Baru Masuk
                  <?php if (!empty($pengajuan_baru)) : ?>
                    <span class="badge badge-danger ml-2">Baru: <?php echo count($pengajuan_baru); ?></span>
                  <?php endif; ?>
                </h3>
              </div>
              <div class="card-body p-0">
                <?php if (!empty($pengajuan_baru)) : ?>
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th>Tanggal</th>
                          <th>Nama Mahasiswa</th>
                          <th>NIM</th>
                          <th>Prodi</th>
                          <th>Jenis Surat</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($pengajuan_baru as $p) : ?>
                          <tr>
                            <td><?php echo date('d-m-Y H:i', strtotime($p['created_at'])); ?></td>
                            <td><?php echo htmlspecialchars($p['nama_mhs']); ?></td>
                            <td><?php echo htmlspecialchars($p['nim_mhs']); ?></td>
                            <td><?php echo htmlspecialchars($p['nama_prodi']); ?></td>
                            <td><?php echo htmlspecialchars($p['jenis_surat']); ?></td>
                            <td><span class="badge badge-warning">Menunggu Verifikasi</span></td>
                            <td>
                              <a href="<?php echo base_url('surat_mahasiswa/detail/'.$p['id']); ?>" class="btn btn-sm btn-info" title="Detail"><i class="fa fa-eye"></i> Detail</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                <?php else : ?>
                  <div class="p-3 text-center text-muted">Tidak ada pengajuan baru.</div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
