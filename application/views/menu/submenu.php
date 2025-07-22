



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
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newSubMenuModal"> Tambah Menu</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Judul</th>
                    <th>URL</th>
                    <th>Icon</th>
                    <th>Aktif</th>
                    <th>Aksi</th>
                </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;?>
                    <?php foreach($submenu as $sm) :?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $sm['menu']?></td>
                    <td><?php echo $sm['title']?></td>
                    <td><?php echo $sm['url']?></td>
                    <td><?php echo $sm['icon']?></td>
                    <td><?php echo $sm['is_active']?></td>
                    <td>
                      <div class="btn-group btn-group-sm">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#editSubMenuModal<?php echo $sm['id']; ?>" class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i></a>

                        

                        <a href="<?php echo base_url('menu/deleteSubMenu')?>/<?php echo $sm['id'];?>" class="btn btn-danger" 
                        onclick="return confirm('Yakin ingin menghapus Sub Menu ini?')">
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
                    <th>Judul</th>
                    <th>URL</th>
                    <th>Icon</th>
                    <th>Aktif</th>
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

<!-- Modal Tambah-->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newSubMenuModalLabel">Tambah Sub Menu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo base_url('menu/submenu')?>" method="post">
        <div class="modal-body">
            <div class="form-group mb-3">
                <label class="form-label">Judul</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan Judul Baru">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Pilih Menu</label>
                <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Select Menu</option>
                    <?php foreach($menu as $m):?>
                        <option value="<?php echo $m['id']?>"><?php echo $m['menu']?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">URL</label>
                <input type="text" class="form-control" name="url" id="url" placeholder="Masukkan URL Baru">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Icon</label>
                <input type="text" class="form-control" name="icon" id="icon" placeholder="Masukkan Icon Baru">
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                    <label class="form-check-label" for="is_active">
                        Active ?
                    </label>
                </div>
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



      <?php foreach($submenu as $sm):?>
      <!-- Modal Edit SubMenu -->
      <div class="modal fade" id="editSubMenuModal<?php echo $sm['id']; ?>" tabindex="-1" aria-labelledby="editSubMenuModalLabel<?php echo $sm['id']; ?>" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="editSubMenuModalLabel<?php echo $sm['id']; ?>">Edit Sub Menu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url('menu/ubahsubmenu/'.$sm['id']); ?>" method="post">
              <div class="modal-body">
                <div class="form-group mb-3">
                  <input type="text" class="form-control" name="title" value="<?php echo $sm['title']; ?>" required>
                </div>
                <div class="form-group mb-3">
                  <select name="menu_id" class="form-control" required>
                    <?php foreach($menu as $m):?>
                      <option value="<?php echo $m['id']?>" <?php if($sm['menu_id']==$m['id']) echo 'selected'; ?>><?php echo $m['menu']?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control" name="url" value="<?php echo $sm['url']; ?>" required>
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control" name="icon" value="<?php echo $sm['icon']; ?>" required>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active<?php echo $sm['id']; ?>" <?php if($sm['is_active']) echo 'checked'; ?>>
                  <label class="form-check-label" for="is_active<?php echo $sm['id']; ?>">Active?</label>
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


