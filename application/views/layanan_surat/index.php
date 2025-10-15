<main>
    <section class="hero-banner">
        <h2>Layanan Surat Online</h2>
        <p>Dapatkan informasi terkini seputar kegiatan akademik dan kemahasiswaan STAIN KEPRI</p>
    </section>

    <section id="sisteminformasi" class="py-5 tentang-section">
  <div class="container">
    <!-- <h2 class="fw-bold text-success text-center mb-4">Sistem Informasi</h2>
    <p class="text-center text-muted mb-5">Akses cepat ke semua layanan akademik yang Anda butuhkan. Kelola kebutuhan akademik dengan mudah dan efisien.</p>
   -->
     <div class="row g-4">
      <!-- Layanan 1 -->
      <?php foreach($jenissurat as $js): ?>
        <div class="col-md-4">
          <a href="<?php echo base_url('layanan_surat/detail/'.$js['id']) ?>" class="layanan-link text-decoration-none text-dark">
            <div class="layanan-card text-center p-4 shadow-sm h-100">
              <div class="layanan-icon mb-3">
                <i class="bi bi-person-check-fill fs-1 text-success"></i>
              </div>
              <h5 class="fw-semibold"><?php echo $js['jenis_surat'] ?></h5>
              <p class="text-muted"><?php echo $js['deskripsi'] ?></p>
            </div>
          </a>
        </div>
      <?php endforeach; ?>




    </div>

  
  </div>

  
      
</section>
</main>