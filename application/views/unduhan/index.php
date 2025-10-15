   <header class="download-header">
        <div class="container">
            <h1 class="display-5">Pusat Unduhan</h1>
            <p class="lead">Download formulir, panduan, dan dokumen layanan digital</p>
            <div class="search-bar">
                <input type="search" class="form-control" placeholder="Cari dokumen...">
            </div>
        </div>
    </header> 

    <main class="container py-5">
        <div class="row g-4">
            <div class="col-lg-8">
            <?php foreach($dokumen as $kategori => $list): ?>
            <div class="card section-card mb-4">
                <div class="card-header d-flex align-items-center gap-3">
                    <i class="bi bi-folder"></i> <?php echo $kategori ?>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <?php foreach($list as $d): ?>
                        <div class="download-item d-flex align-items-center">
                            <i class="bi bi-filetype-pdf icon me-3"></i>
                            <div class="details flex-grow-1">
                                <div class="title"><?php echo $d['title']?></div>
                                <div class="metadata">
                                    <span>Format: <?php echo $d['file_type']?></span>
                                    <span>Ukuran: <?php echo $d['file_size']?> MB</span>
                                    <span><?php echo $d['download_count']?> downloads</span>
                                </div>
                            </div>
                            <a href="<?php echo site_url('master/download_dokumen/'.$d['id'])?>" class="btn btn-primary btn-sm btn-download">
                                <i class="bi bi-download me-1"></i>Download
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        

            <div class="col-lg-4 sidebar">
                
            

                <div class="card">
                    <div class="card-header d-flex align-items-center gap-2"><i class="bi bi-bar-chart-line-fill"></i> Statistik</div>
                    <div class="card-body text-center">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="stat-number"><?php echo $totalDokumen?></div>
                                <div class="stat-label">Total Dokumen</div>
                            </div>
                            <div class="col-6">
                                <div class="stat-number"><?php echo $totalDownload?></div>
                                <div class="stat-label">Total Download</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                     <div class="card-body text-center p-4">
                        <div class="mb-3"><i class="bi bi-question-circle-fill fs-2 text-primary"></i></div>
                        <h5 class="fw-bold">Butuh Bantuan?</h5>
                        <p class="text-muted small">Jika tidak menemukan dokumen yang dicari, hubungi tim support kami.</p>
                        <a href="https://wa.me/6281536821587" class="btn btn-success" target="_blank">
  <i class="fab fa-whatsapp"></i> Hubungi via WhatsApp
</a>


                     </div>
                </div>

            </div>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>