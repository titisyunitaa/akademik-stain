 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Berita</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="container-fluid">
        <div class="row">
          <div class="col-md-10">

            <div class="card">
                <div class="card-body">
                  <div class="row">
                    
                    <form action="<?php echo site_url('master/tambah_berita'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Judul Berita</label>
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan judul berita">
                        </div>
                        <div class="form-group">
                          <label for="kategori" class="form-label">Kategori Dokumen</label>
                          <select class="form-select" name="kategori" id="kategori" required>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="berita">Berita</option>
                            <option value="pengumuman">Pengumuman</option>
                          </select>
                        </div>
                        <div class="form-group">   
                            <label>Konten Berita</label>
                            <textarea id="summernote" name="isi">
                                Place <em>some</em> <u>text</u> <strong>here</strong>
                            </textarea>
                        </div>

                        <div class="card mt-4">
                          <div class="card-body">
                            <h3 class="fw-bold mb-3">Gambar Utama</h3>
                            <div id="preview-area" class="d-flex justify-content-center align-items-center" style="min-height:220px; border:2px dashed #ddd; border-radius:16px; position:relative;">
                              <img id="img-preview" src="#" alt="Preview" style="max-width:300px; max-height:200px; display:none; margin:auto;" />
                              <button type="button" id="remove-img" class="btn btn-danger position-absolute" style="top:24px; right:24px; display:none;"><i class="bi bi-x-lg"></i></button>
                            </div>
                            <div class="mt-3">
                              <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                            </div>
                          </div>
                        </div>

                        <div class="card mt-3">
                          <div class="card-body">
                            <h5 class="fw-bold mb-2">Lampiran Berita</h5>
                            <input type="file" class="form-control mb-2" name="lampiran" multiple accept=".pdf,.doc,.docx,.xls,.xlsx,.zip,.rar,.jpg,.jpeg,.png">
                            <small class="text-muted">Pilih satu atau lebih file lampiran (pdf, doc, xls, gambar, zip, rar).</small>
                          </div>
                        </div>

                        <div class="d-flex gap-2 justify-content-end mt-4">
                          <button type="submit" name="submit_type" value="draft" class="btn btn-secondary">Simpan Draft</button>
                          <button type="submit" name="submit_type" value="publish" class="btn btn-success">Publikasikan</button>
                        </div>
                      </form>
                  </div>
                </div>
            </div>            
          </div>
          
          
        </div>
      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


 <script>
                        const gambarInput = document.getElementById('gambar');
                        const imgPreview = document.getElementById('img-preview');
                        const removeBtn = document.getElementById('remove-img');
                        gambarInput.addEventListener('change', function(e) {
                          const file = e.target.files[0];
                          if (file) {
                            const reader = new FileReader();
                            reader.onload = function(ev) {
                              imgPreview.src = ev.target.result;
                              imgPreview.style.display = 'block';
                              removeBtn.style.display = 'block';
                            }
                            reader.readAsDataURL(file);
                          } else {
                            imgPreview.src = '#';
                            imgPreview.style.display = 'none';
                            removeBtn.style.display = 'none';
                          }
                        });
                        removeBtn.addEventListener('click', function() {
                          gambarInput.value = '';
                          imgPreview.src = '#';
                          imgPreview.style.display = 'none';
                          removeBtn.style.display = 'none';
                        });
                        </script>


