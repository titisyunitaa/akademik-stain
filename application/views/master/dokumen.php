



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
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newMenuModal"> Tambah Menu</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;?>
                    <?php foreach($menu as $m) :?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $m['menu']?></td>
                    <td>
                      <div class="btn-group btn-group-sm">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#editMenuModal<?php echo $m['id']; ?>" class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i></a>

                        

                        <a href="<?php echo base_url('menu/delete')?>/<?php echo $m['id'];?>" class="btn btn-danger" 
                        onclick="return confirm('Yakin ingin menghapus menu ini?')">
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
                    <th>Menu</th>
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
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newMenuModalLabel">Tambah Menu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo base_url('menu')?>" method="post">
        <div class="modal-body">
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Menu Baru</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="menu" id="menu" placeholder="Masukkan Menu Baru">
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


      <?php foreach($menu as $m):?>
      <!-- Modal Edit Menu -->
      <div class="modal fade" id="editMenuModal<?php echo $m['id']; ?>" tabindex="-1" aria-labelledby="editMenuModalLabel<?php echo $m['id']; ?>" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="editMenuModalLabel<?php echo $m['id']; ?>">Edit Menu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url('menu/edit/'.$m['id']); ?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <input type="text" class="form-control" id="menu" name="menu" value="<?php echo $m['menu']; ?>" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php endforeach;?>


