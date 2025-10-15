



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

      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newJenisSuratModal"> Tambah Jenis Surat</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Surat</th>
                    <th>Deskripsi Surat</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;?>
                    <?php foreach($jenissurat as $js) :?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $js['jenis_surat']?></td>
                    <td><?php echo $js['deskripsi']?></td>
                    <td>
                        <div class="btn-group btn-group-sm">


                            <a href="#" data-bs-toggle="modal" data-bs-target="#editJenisSuratModal<?php echo $js['id']; ?>" class="btn btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i></a>


                            <a href="<?php echo base_url('superadmin/deleteJenisSurat')?>/<?php echo $js['id'];?>" class="btn btn-danger" 
                            onclick="return confirm('Yakin ingin menghapus Jenis Surat ini?')">
                            <i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php $i++;?>
                  <?php endforeach;?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Jenis Surat</th>
                    <th>Deskripsi Surat</th>
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
<div class="modal fade" id="newJenisSuratModal" tabindex="-1" aria-labelledby="newJenisSuratModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newJenisSuratModalLabel">Tambah Jenis Surat</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo base_url('superadmin/jenissurat')?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="mb-3">
                <label for="" class="form-label">Jenis Surat Baru</label>
                <input type="text" class="form-control" name="jenis_surat" id="jenis_surat" placeholder="Masukkan Jenis Surat Baru">
            </div>

             <div class="mb-3">
                <label for="" class="form-label">Deskripsi Surat</label>
                <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi Surat">
            </div> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit Jenis Surat -->
<?php foreach($jenissurat as $js): ?>
<div class="modal fade" id="editJenisSuratModal<?php echo $js['id']; ?>" tabindex="-1" aria-labelledby="editJenisSuratModalLabel<?php echo $js['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editJenisSuratModalLabel<?php echo $js['id']; ?>">Edit Jenis Surat</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo base_url('superadmin/editJenisSurat/'.$js['id'])?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Jenis Surat</label>
                <input type="text" class="form-control" name="jenis_surat" value="<?php echo $js['jenis_surat']?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi Surat</label>
                <input type="text" class="form-control" name="deskripsi" value="<?php echo $js['deskripsi']?>" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>


 

