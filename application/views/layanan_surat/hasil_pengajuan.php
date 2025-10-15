<main>
    <!-- <section class="hero-banner">
        <h2>Layanan Surat Online</h2>
        <p>Dapatkan informasi terkini seputar kegiatan akademik dan kemahasiswaan STAIN KEPRI</p>
    </section> -->

    <section id="sisteminformasi" class="py-5 tentang-section">
  <div class="container">
    <!-- <h2 class="fw-bold text-success text-center mb-4">Sistem Informasi</h2>
    <p class="text-center text-muted mb-5">Akses cepat ke semua layanan akademik yang Anda butuhkan. Kelola kebutuhan akademik dengan mudah dan efisien.</p>
   -->
     <div class="row g-4">
      <?php if($this->session->flashdata('sukses')): ?>
        <div class="alert alert-success d-flex align-items-center p-4 mb-4 shadow-sm" role="alert" style="font-size:1.25rem; background:#d4f5e9; border:2px solid #b2dfdb;">
          <i class="bi bi-patch-check-fill me-3 fs-1 text-success"></i>
          <div>
            <?php echo $this->session->flashdata('sukses'); ?>
          </div>
        </div>
        <div class="card shadow-sm border-success mb-4 mx-auto" style="max-width: 420px;">
          <div class="card-body text-center">
            <h4 class="mb-3 text-success"><i class="bi bi-ticket-detailed"></i> Nomor Resi Pengajuan Anda</h4>
            <div style="font-size:1.5rem; font-weight:bold; letter-spacing:2px; color:#00796b; background:#e0f2f1; border-radius:8px; padding:12px 0; margin-bottom:10px;">
              <?php 
                $sukses = $this->session->flashdata('sukses');
                if (preg_match('/Kode Resi Anda: <strong>(.*?)<\/strong>/', $sukses, $match)) {
                  echo $match[1];
                }
              ?>
            </div>
            <div class="mt-2">Simpan nomor resi ini untuk tracking status surat Anda.</div>
            <a href="<?= base_url('tracking') ?>" class="btn btn-outline-primary mt-3"><i class="bi bi-search"></i> Tracking Surat</a>
          </div>
        </div>
      <?php endif; ?>
    </div>

  
  </div> 
</section>
</main>