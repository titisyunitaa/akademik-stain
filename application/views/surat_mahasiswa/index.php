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
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Resi</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Prodi</th>
                        <th>Jenis Surat</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                        <!-- <th>Catatan Admin</th> -->
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1;?>
                    <?php foreach($pengajuan_surat as $ps) : ?>
                  <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $ps['kode_resi']?></td>
                        <td><?php echo $ps['nama_mhs']?></td>
                        <td><?php echo $ps['nim_mhs']?></td>
                        <td><?php echo $ps['nama_prodi']?></td>
                        <td><?php echo $ps['jenis_surat']?></td>
                        <td><?php echo $ps['created_at']?></td>
                        <td>
                          <?php
                            $status = strtolower($ps['status']);
                            if ($status == 'menunggu verifikasi') {
                              echo '<span class="badge badge-warning">Menunggu Verifikasi</span>';
                            } elseif ($status == 'diproses') {
                              echo '<span class="badge" style="background-color:#EF7722;color:white;">Diproses</span>'; // biru tosca
                            } elseif ($status == 'menunggu tanda tangan') {
                              echo '<span class="badge badge-info">Menunggu Tanda Tangan</span>';
                            } elseif ($status == 'selesai') {
                              echo '<span class="badge badge-success">Selesai</span>';
                            } elseif ($status == 'ditolak') {
                              echo '<span class="badge badge-danger">Selesai</span>';
                            } else {
                              echo '<span class="badge badge-secondary">'.ucwords($ps['status']).'</span>';
                            }
                          ?>
                        </td>
                        <td>
                           <div class="btn-group btn-group-sm">
                      
                            <a href="<?= base_url('surat_mahasiswa/detail/' . $ps['id']) ?>" class="btn btn-warning btn-sm" title="Lihat Detail Pengajuan">
                            <i class="fa-solid fa-eye"></i> Detail</a>


                            <?php if ($ps['status'] == 'menunggu verifikasi') : ?>
                              <a href="<?php echo base_url('surat_mahasiswa/edit/'.$ps['id_pengajuan']); ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                              <a href="<?php echo base_url('surat_mahasiswa/hapus/'.$ps['id_pengajuan']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus surat ini?');"><i class="fa-solid fa-trash"></i>Hapus</a>
                            <?php endif; ?>
                      </div>
                        </td>
                  </tr>
                  <?php $i++;?>
                  <?php endforeach;?>
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode Resi</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Prodi</th>
                        <th>Jenis Surat</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                        <!-- <th>Catatan Admin</th> -->
                        <th>Aksi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
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







