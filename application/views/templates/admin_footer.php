<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; <?php echo date('Y')?>  <a href="#"> STAIN Sultan Abdurrahman Kepri</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/')?>plugins/jquery/jquery.min.js"></script>

<!-- Summernote -->
<script src="<?php echo base_url('assets/')?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/')?>plugins/chart.js/Chart.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/')?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/')?>dist/js/demo.js"></script>

<script src="<?php echo base_url('assets/')?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/')?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/')?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets/')?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/')?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('assets/')?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/')?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url('assets/')?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url('assets/')?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url('assets/')?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('assets/')?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('assets/')?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  //manggil jquery
  $('.form-check-input').on('click',function(){
      const menuId = $(this).data('menu');
      const roleId = $(this).data('role');

      $.ajax({
          url: "<?php echo base_url('superadmin/changeaccess');?>",
          type: 'post',
          data: {
            menuId: menuId,
            roleId: roleId
          },
          success: function(){
            document.location.href = "<?php echo base_url('superadmin/roleaccess/')?>" + roleId;
          }
      });

  });
</script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

  // CodeMirror (nonaktif, hilangkan error jika tidak dipakai)
  // CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
  //   mode: "htmlmixed",
  //   theme: "monokai"
  // });
  })
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  if (window.jQuery && window.Chart) {
    // Data dari PHP
    var distribusi = <?php echo isset($distribusi_chart) ? json_encode($distribusi_chart) : '{}'; ?>;
    var labels = ['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'];
    var colors = ['#dc3545', '#fd7e14', '#ffc107', '#198754', '#0d6efd'];
    var kategori = [
      {id: 'pieKualitas', key: 'kualitas', title: 'Kualitas'},
      {id: 'pieKecepatan', key: 'kecepatan', title: 'Kecepatan'},
      {id: 'pieKemudahan', key: 'kemudahan', title: 'Kemudahan'},
      {id: 'pieKejelasan', key: 'kejelasan', title: 'Kejelasan'},
      {id: 'pieKeandalan', key: 'keandalan', title: 'Keandalan'},
      {id: 'pieKepuasan', key: 'kepuasan', title: 'Kepuasan'}
    ];
    kategori.forEach(function(kat) {
      var canvas = document.getElementById(kat.id);
      if (canvas && distribusi[kat.key]) {
        var ctx = canvas.getContext('2d');
        new Chart(ctx, {
          type: 'pie',
          data: {
            labels: labels,
            datasets: [{
              data: Object.values(distribusi[kat.key]),
              backgroundColor: colors
            }]
          },
          options: {
            responsive: true,
            plugins: {
              legend: { position: 'bottom' },
              title: {
                display: true,
                text: 'Distribusi ' + kat.title
              }
            }
          }
        });
      }
    });
  }
});
</script>

</body>
</html>
