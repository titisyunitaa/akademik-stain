<div class="container">
    <h2>Edit Berita</h2>
    <?php if($this->session->flashdata('error')): ?>
        <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
    <?php endif; ?>
    <?php if($this->session->flashdata('message')): ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
    <?php endif; ?>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Judul Berita</label>
            <input type="text" name="judul" class="form-control" value="<?php echo htmlspecialchars($berita['judul']); ?>" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="<?php echo htmlspecialchars($berita['kategori']); ?>" required>
        </div>
        <div class="form-group">
            <label>Isi Berita</label>
            <textarea name="isi" class="form-control" rows="6" required><?php echo htmlspecialchars($berita['isi']); ?></textarea>
        </div>
        <div class="form-group">
            <label>Gambar Utama</label><br>
            <?php if(!empty($berita['gambar'])): ?>
                <img src="/<?php echo $berita['gambar']; ?>" alt="Gambar Berita" style="max-width:150px;max-height:150px;">
            <?php endif; ?>
            <input type="file" name="gambar" class="form-control mt-2">
            <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
        </div>
        <div class="form-group">
            <label>Lampiran Baru</label>
            <input type="file" name="lampiran[]" class="form-control" multiple>
            <small class="form-text text-muted">Kosongkan jika tidak ingin menambah lampiran baru.</small>
        </div>
        <div class="form-group">
            <label>Lampiran Lama</label>
            <ul>
            <?php if(!empty($lampiran)): foreach($lampiran as $l): ?>
                <li>
                    <a href="/<?php echo $l['file_path']; ?>" target="_blank">Lampiran (<?php echo $l['file_type']; ?>, <?php echo number_format($l['file_size']/1024,1); ?> KB)</a>
                </li>
            <?php endforeach; endif; ?>
            </ul>
        </div>
        <button type="submit" name="submit_type" value="draft" class="btn btn-secondary">Simpan Draft</button>
        <button type="submit" name="submit_type" value="publish" class="btn btn-primary">Publikasikan</button>
        <a href="<?php echo site_url('master/berita'); ?>" class="btn btn-light">Kembali</a>
    </form>
</div>
