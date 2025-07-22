



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
                    <h5>Role : <?php echo $role['role']?></h5>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Akses</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;?>
                    <?php foreach($menu as $m) :?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $m['menu']?></td>
                    <td>
                        <div class="mb-3 form-check">
                            <input class="form-check-input"  type="checkbox" <?php echo check_access($role['id'],$m['id'])?> 
                            data-role="<?php echo $role['id']?>"
                            data-menu="<?php echo $m['id']?>">
                            <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
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
                    <th>Akses</th>
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




 

