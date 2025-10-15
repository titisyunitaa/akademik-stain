<!-- Arsip Surat Selesai -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $title;?></h1>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Surat Selesai (Arsip)</h3>
        </div>
        <div class="card-body p-0">
          <?php if (!empty($arsip_selesai)) : ?>
            <div class="table-responsive">
               <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-light">
                  <tr>
                    <th>No</th>
                    <th>No Surat</th>
                    <th>Tanggal</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Jenis Surat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;?>
                  <?php foreach ($arsip_selesai as $a) : ?>
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo htmlspecialchars($a['nomor_surat']); ?></td>
                      <td><?php echo date('d-m-Y H:i', strtotime($a['created_at'])); ?></td>
                      <td><?php echo htmlspecialchars($a['nama_mhs']); ?></td>
                      <td><?php echo htmlspecialchars($a['nim_mhs']); ?></td>
                      <td><?php echo htmlspecialchars($a['nama_prodi']); ?></td>
                      <td><?php echo htmlspecialchars($a['jenis_surat']); ?></td>
                      <td><span class="badge badge-success">Selesai</span></td>
                      <td>
                        <?php if (!empty($a['file_surat_pdf'])) : ?>
                          <button class="btn btn-primary" onclick="showSuratIframe('<?php echo base_url($a['file_surat_pdf']); ?>', '<?php echo htmlspecialchars($a['nama_mhs']); ?>', '<?php echo htmlspecialchars($a['jenis_surat']); ?>')">Download & Preview</button>
                        <?php endif; ?>
                      </td>
                    </tr>
                     <?php $i++;?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          <?php else : ?>
            <div class="p-3 text-center text-muted">Tidak ada surat yang diarsipkan.</div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</div>
<div id="suratPreviewModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="suratPreviewTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="suratPreviewBody" style="height:500px;overflow:auto;"></div>
    </div>
  </div>
</div>
<script>
function showSuratIframe(url, nama, jenis) {
  document.getElementById('suratPreviewTitle').innerText = nama + ' - ' + jenis;
  document.getElementById('suratPreviewBody').innerHTML = '<iframe src="' + url + '" style="width:100%;height:100%;border:none;"></iframe>';
  $('#suratPreviewModal').modal('show');
}
</script>
