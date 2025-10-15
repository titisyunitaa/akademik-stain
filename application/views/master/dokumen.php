  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-5">
            <h1><?php echo $title;?></h1>
            <?php if ($this->session->flashdata('message')): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo $this->session->flashdata('message'); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>
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
              <div class="card-header">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newDocumentModal"> Tambah Dokumen</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>File</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;?>
                    <?php foreach($dokumen as $d) :?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $d['kategori']?></td>
                    <td><?php echo $d['title']?></td>
                     <td>
                        <?php if(!empty($d['file_path'])): ?>
                        <a href="<?= base_url('master/download_dokumen/' . $d['id']); ?>" class="btn btn-sm btn-outline-success" rel="noopener noreferrer">
                            <i class="fa fa-file-word"></i> Download Dokumen
                        </a>
                        <div class="small text-muted">Nama file: <?= $d['title'] ?></div>
                        <?php else: ?>
                        <span class="text-danger">Belum ada dokumen</span>
                        <?php endif; ?>
                    </td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#editDokumenModal<?php echo $d['id']; ?>" class="btn btn-warning">
                          <i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        <a href="<?php echo base_url('master/delete_dokumen/'.$d['id']); ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus dokumen ini?')">
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
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>File</th>
                    <th>Action</th>
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


<!-- Modal Tambah-->
<div class="modal fade" id="newDocumentModal" tabindex="-1" aria-labelledby="newDocumentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newDocumentModalLabel">Tambah Dokumen</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo base_url('master/upload_dokumen') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <label for="kategori" class="form-label">Kategori Dokumen</label>
            <select class="form-select" name="kategori" id="kategori" required>
              <option value="">-- Pilih Kategori --</option>
              <option value="permohonan">Form Permohonan</option>
              <option value="skripsi">Panduan Skripsi</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan Judul Dokumen" required>
          </div>
          <div class="mb-3">
            <label for="filename" class="form-label">File Dokumen</label>
            <input type="file" class="form-control" name="filename" id="filename" accept=".pdf,.docx,.xlsx" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>


 <!-- Modal Edit Dokumen -->
                  <?php foreach($dokumen as $d): ?>
                  <div class="modal fade" id="editDokumenModal<?php echo $d['id']; ?>" tabindex="-1" aria-labelledby="editDokumenModalLabel<?php echo $d['id']; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="editDokumenModalLabel<?php echo $d['id']; ?>">Edit Dokumen</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?php echo base_url('master/edit_dokumen/'.$d['id']); ?>" method="post" enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="mb-3">
                              <label for="kategori<?php echo $d['id']; ?>" class="form-label">Kategori Dokumen</label>
                              <select class="form-select" name="kategori" id="kategori<?php echo $d['id']; ?>" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="permohonan" <?php if($d['kategori']=='permohonan') echo 'selected'; ?>>Form Permohonan</option>
                                <option value="skripsi" <?php if($d['kategori']=='skripsi') echo 'selected'; ?>>Panduan Skripsi</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="title<?php echo $d['id']; ?>" class="form-label">Judul</label>
                              <input type="text" class="form-control" name="title" id="title<?php echo $d['id']; ?>" value="<?php echo $d['title']; ?>" required>
                            </div>
                            <div class="mb-3">
                              <label for="filename<?php echo $d['id']; ?>" class="form-label">File Dokumen (kosongkan jika tidak ganti)</label>
                              <input type="file" class="form-control" name="filename" id="filename<?php echo $d['id']; ?>" accept=".pdf,.docx,.xlsx">
                              <div class="small text-muted">File saat ini: <?php echo $d['file_path']; ?></div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>