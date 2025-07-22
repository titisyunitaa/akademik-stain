



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
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newRoleModal"> Tambah Role</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;?>
                    <?php foreach($role as $r) :?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $r['role']?></td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <a href="<?php echo base_url('superadmin/roleaccess/') .  $r['id']; ?>" class="btn btn-success">
                            <i class="fa-solid fa-eye"></i></a>

                            <a href="#" data-bs-toggle="modal" data-bs-target="#editRoleModal<?php echo $r['id']; ?>" class="btn btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i></a>

                            <a href="<?php echo base_url('menu/delete')?>/<?php echo $r['id'];?>" class="btn btn-danger" 
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
<div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newRoleModalLabel">Tambah Role</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo base_url('superadmin/role')?>" method="post">
        <div class="modal-body">
          <div class="mb-3">
              <label for="" class="form-label">Role Baru</label>
              <input type="text" class="form-control" name="role" id="role" placeholder="Masukkan Role Baru">
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


 

