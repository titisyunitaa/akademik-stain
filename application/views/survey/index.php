
<?php
if (!function_exists('badge')) {
  function badge($nilai) {
    if ($nilai == 1 || $nilai == 2) {
      $color = 'danger'; // merah
    } elseif ($nilai == 3) {
      $color = 'primary'; // biru
    } else {
      $color = 'success'; // hijau
    }
    return '<span class="badge bg-' . $color . '">' . $nilai . '</span>';
  }
}
?>
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
                        <th>NIM</th>
                        <th>Nilai Kualitas</th>
                        <th>Nilai Kecepatan</th>
                        <th>Nilai Kemudahan</th>
                        <th>Nilai Kejelasan</th>
                        <th>Nilai Keandalan</th>
                        <th>Nilai Kepuasan</th>
                        <th>Kritik dan Saran</th>
                        <th>Nomor Surat : </th>
                        <th>Tanggal submit : </th>
                        <th>Prodi : </th>
                        <th>Jenis Surat : </th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;?>
                    <?php foreach($survey_kepuasan as $sk) : ?>
          <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $sk['nim_mhs']?></td>

            <td><?php echo badge($sk['nilai_kualitas']);?></td>
            <td><?php echo badge($sk['nilai_kecepatan']);?></td>
            <td><?php echo badge($sk['nilai_kemudahan']);?></td>
            <td><?php echo badge($sk['nilai_kejelasan']);?></td>
            <td><?php echo badge($sk['nilai_keandalan']);?></td>
            <td><?php echo badge($sk['nilai_kepuasan']);?></td>
            <td><?php echo $sk['saran']?></td>
            <td><?php echo $sk['nomor_surat']?></td>
            <td><?php echo $sk['created_at']?></td>
            <td><?php echo $sk['nama_prodi']?></td>
            <td><?php echo $sk['jenis_surat']?></td>
          </tr> 
          <?php $i++;?>
                    <?php endforeach;?>
                   
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nilai Kualitas</th>
                        <th>Nilai Kecepatan</th>
                        <th>Nilai Kemudahan</th>
                        <th>Nilai Kejelasan</th>
                        <th>Nilai Keandalan</th>
                        <th>Nilai Kepuasan</th>
                        <th>Kritik dan Saran</th>
                        <th>Nomor Surat</th>
                        <th>Tanggal submit</th>
                        <th>Prodi</th>
                        <th>Jenis Surat</th>
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
     

      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
        
           

            <!-- PIE CHART -->
            <div class="card card-primary">
                  <div class="card-header"><h3 class="card-title">Kualitas</h3></div>
                  <div class="card-body"><canvas id="pieKualitas" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas></div>
                </div>

                <div class="card card-primary">
                  <div class="card-header"><h3 class="card-title">Kemudahan</h3></div>
                  <div class="card-body"><canvas id="pieKemudahan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas></div>
                </div>

                <div class="card card-primary">
                  <div class="card-header"><h3 class="card-title">Keandalan</h3></div>
                  <div class="card-body"><canvas id="pieKeandalan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas></div>
                </div>
            <!-- /.card -->

          </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header"><h3 class="card-title">Kecepatan</h3></div>
                  <div class="card-body"><canvas id="pieKecepatan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas></div>
                </div>

                <div class="card card-primary">
                  <div class="card-header"><h3 class="card-title">Kejelasan</h3></div>
                  <div class="card-body"><canvas id="pieKejelasan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas></div>
                </div>

                 <div class="card card-primary">
                  <div class="card-header"><h3 class="card-title">Kepuasan</h3></div>
                  <div class="card-body"><canvas id="pieKepuasan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas></div>
                </div>
         

     

          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
          

     

            <!-- PIE CHARTS PER CARD -->
            <div class="row">
              <div class="col-md-6">
                
              </div>
             
                
              
             
              
              
              
                
              
              
                
             
             
               
              
            </div>

          </div>
       
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->







