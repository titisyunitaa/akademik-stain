  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
          <div class="d-flex justify-content-between align-items-center">
          <div>
            <h1><?php echo $title;?></h1>
            <p class="text-muted">Kelola berita dan pengumuman kampus</p>
          </div>
          <a href="<?php echo base_url('master/tambah_berita'); ?>"><button class="btn btn-primary btn-sm" id="btnTambah">
            <i class="fas fa-plus-circle"></i> Tambah Berita
          </button>
        </div>

          <div class="col-sm-5">
            
            <?php echo form_error('menu','<div class="alert alert-danger" role="alert">','</div>'); ?>
            <?php if (!empty($message)): ?>
              <div class="alert alert-success" role="alert"><?php echo $message;?></div>
            <?php endif; ?>
            <?php if (!empty($error)): ?>
              <div class="alert alert-danger" role="alert"><?php echo $error;?></div>
            <?php endif; ?>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal Publish</th>
                    <th>Status</th>
                    <th>views</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;?>
                    <?php foreach($berita as $b) :?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $b['judul']?></td>
                    <td><?php echo $b['kategori']?></td>
                    <td><?php echo $b['tanggal_posting']?></td>
                    <td><?php echo $b['status']?></td>
                    <td><?php echo $b['views']?></td>
                
                    <td>
                    <div class="btn-group btn-group-sm">
                        <a href="<?php echo base_url('master/edit_berita/'.$b['id']); ?>"  class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        <a href="<?php echo base_url('master/delete_berita/'.$b['id']); ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus dokumen ini?')">
                        <i class="fas fa-trash"></i> Hapus</a>
                    </div>
                    </td>
                  </tr>
                  <?php $i++;?>
                  <?php endforeach;?>
                  </tbody>
                  <tfoot>
                  <!-- endforeach di bawah sudah cukup untuk loop utama -->
                 
                  
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal Publish</th>
                    <th>Status</th>
                    <th>views</th>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





 