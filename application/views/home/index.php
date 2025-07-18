
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold mb-3 hero-text-gradient">
          <span>Pusat Layanan</span><br>
          <span>Akademik</span>
          <span>STAIN </span><br>
          <span class="text-dark">Kepulauan Riau</span>
        </h1>
        <p class="lead text-muted mb-4">
          Bergabunglah dengan ribuan mahasiswa berprestasi di STAIN Sultan Abdurrahman. Kampus Islam terdepan di Kepulauan Riau dengan fasilitas modern dan dosen berkualitas.
        </p>
        <div class="d-flex flex-wrap gap-3">
          <a href="#" class="btn btn-gradient ms-lg-3 mt-2 mt-lg-0">Ajukan Surat</a>
        </div>
      </div>

      <div class="col-lg-6 text-center">
        <img src="<?php echo base_url('assets/img/ilustrasi.png')?>" alt="" class="hero-img img-fluid";> 
       </div>
       
    </div>
  </div>
</section>

<!-- Section Layanan -->
<section id="layanan" class="py-5 layanan-section">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold text-success">Layanan Surat Online</h2>
    <p class="lead text-muted mb-4 text-center">
        Pilih layanan yang Anda butuhkan untuk mengakses informasi akademik dengan mudah dan cepat
    </p>
    <div class="d-grid gap-4 mx-auto" style="max-width: 900px;">

      <a href="<?php echo base_url('layanan_surat')?>" class="layanan-link text-decoration-none text-dark">
        <div class="layanan-card d-flex align-items-center p-4 h-100 shadow-sm rounded-4">
          <div class="layanan-icon me-4">
            <i class="bi bi-file-earmark-text fs-1 text-success"></i>
          </div>
          <div class="layanan-text flex-grow-1">
            <h5 class="fw-semibold mb-1">Layanan Surat Online</h5>
            <p class="text-muted mb-0">Permohonan surat aktif kuliah, penelitian, dan administrasi lainnya.</p>
          </div>
          <div class="layanan-arrow-icon ms-3">
            <i class="bi bi-chevron-right fs-4 text-secondary"></i>
          </div>
        </div>
      </a>

      <a href="<?php echo base_url('tracking')?>" class="layanan-link text-decoration-none text-dark">
        <div class="layanan-card d-flex align-items-center p-4 h-100 shadow-sm rounded-4">
          <div class="layanan-icon me-4">
            <i class="bi bi-search fs-1 text-success"></i>
          </div>
          <div class="layanan-text flex-grow-1">
            <h5 class="fw-semibold mb-1">Lacak Surat Online</h5>
            <p class="text-muted mb-0">Pantau status permohonan surat Anda secara real-time menggunakan nomor resi.</p>
          </div>
          <div class="layanan-arrow-icon ms-3">
            <i class="bi bi-chevron-right fs-4 text-secondary"></i>
          </div>
        </div>
      </a>
      
    </div>
  </div>
</section>

<!-- Section Berita Terbaru -->
<section id="berita" class="py-5 berita-section">
  <div class="container">
    <h2 class="text-center mb-3 fw-bold text-success">Berita Terbaru</h2>
    <p class="lead text-muted mb-5 text-center">
      Ikuti informasi dan perkembangan terkini seputar layanan dan kegiatan akademik di STAIN Sultan Abdurrahman.
    </p>
    
    <div class="row g-4">
      <!-- Berita 1 -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm berita-card">
          <img src="<?= base_url('assets/img/berita1.jpg') ?>" class="card-img-top" alt="Berita 1">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Pendaftaran Mahasiswa Baru Dibuka</h5>
            <p class="card-text text-muted">STAIN Kepri resmi membuka pendaftaran untuk tahun ajaran baru. Simak persyaratannya di sini.</p>
            <a href="#" class="btn btn-sm btn-outline-success mt-2">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <!-- Berita 2 -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm berita-card">
          <img src="<?= base_url('assets/img/berita2.jpg') ?>" class="card-img-top" alt="Berita 2">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Wisuda ke-10 Berlangsung Meriah</h5>
            <p class="card-text text-muted">Lebih dari 300 mahasiswa mengikuti wisuda tahun ini yang dilaksanakan secara khidmat dan meriah.</p>
            <a href="#" class="btn btn-sm btn-outline-success mt-2">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <!-- Berita 3 -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm berita-card">
          <img src="<?= base_url('assets/img/berita3.jpg') ?>" class="card-img-top" alt="Berita 3">
          <div class="card-body">
            <h5 class="card-title fw-semibold">STAIN Adakan Seminar Nasional</h5>
            <p class="card-text text-muted">Dosen dan mahasiswa antusias ikuti seminar nasional bertema teknologi dalam pendidikan Islam.</p>
            <a href="#" class="btn btn-sm btn-outline-success mt-2">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section Sistem Informasi -->
<section id="sisteminformasi" class="py-5" style="background-color: #f8f9fa;">
  <div class="container">
    <h2 class="fw-bold text-success text-center mb-4">Sistem Informasi</h2>
    <p class="text-center text-muted mb-5 lead" style="max-width: 650px; margin-left: auto; margin-right: auto;">
      Akses cepat ke semua layanan akademik yang Anda butuhkan. Kelola kebutuhan akademik dengan mudah dan efisien.
    </p>

    <div class="row g-4 justify-content-center">

      <div class="col-lg-4 col-md-6">
        <a href="https://siakad.stainkepri.ac.id/auth" target="_blank" class="info-card-link">
          <div class="info-card">
            <div class="icon"><i class="bi bi-person-vcard-fill"></i></div>
            <h5>SIAKAD</h5>
            <p>Portal registrasi mata kuliah, melihat nilai (KHS), dan status akademik Anda.</p>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6">
        <a href="https://p2m.stainkepri.ac.id/" target="_blank" class="info-card-link">
          <div class="info-card">
            <div class="icon"><i class="bi bi-patch-check-fill"></i></div>
            <h5>Pusat Penjamin Mutu (P2M)</h5>
            <p>Akses dokumen dan standar penjaminan mutu akademik internal.</p>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6">
        <a href="https://lib.stainkepri.ac.id/" target="_blank" class="info-card-link">
          <div class="info-card">
            <div class="icon"><i class="bi bi-book-fill"></i></div>
            <h5>Perpustakaan Online</h5>
            <p>Cari koleksi buku, jurnal, dan sumber daya digital perpustakaan.</p>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6">
        <a href="https://p3m.stainkepri.ac.id/" target="_blank" class="info-card-link">
          <div class="info-card">
            <div class="icon"><i class="bi bi-lightbulb-fill"></i></div>
            <h5>Pusat Penelitian (P3M)</h5>
            <p>Informasi program penelitian, pengabdian, dan publikasi ilmiah.</p>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6">
        <a href="https://kkn.stainkepri.ac.id/" target="_blank" class="info-card-link">
          <div class="info-card">
            <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
            <h5>KKN (Kuliah Kerja Nyata)</h5>
            <p>Portal pendaftaran, informasi lokasi, dan panduan pelaksanaan KKN.</p>
          </div>
        </a>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <a href="https://spada.stainkepri.ac.id/" target="_blank" class="info-card-link">
          <div class="info-card">
            <div class="icon"><i class="bi bi-laptop-fill"></i></div>
            <h5>SPADA (E-Learning)</h5>
            <p>Akses materi kuliah, tugas, dan forum diskusi secara online.</p>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- Section FAQ -->
<section id="faq" class="py-5">
  <div class="container" style="max-width: 800px;">
    <h2 class="fw-bold text-success text-center mb-4">Pertanyaan yang Sering Diajukan</h2>
    <p class="text-center text-muted mb-5">Temukan jawaban dari pertanyaan umum terkait layanan akademik kami.</p>

    <div class="accordion" id="faqAccordion">

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Bagaimana cara mengajukan surat keterangan aktif kuliah?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Mahasiswa dapat mengajukan surat keterangan aktif kuliah melalui portal akademik atau datang langsung ke bagian layanan akademik dengan membawa KRS terbaru.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Kapan jadwal pengambilan KHS dan KRS?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Pengambilan KHS dan pengisian KRS dilakukan setiap akhir dan awal semester sesuai kalender akademik STAIN.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Bagaimana prosedur pengajuan cuti akademik?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Pengajuan cuti akademik dilakukan dengan mengisi formulir permohonan dan persetujuan dosen PA serta pihak akademik, paling lambat 2 minggu setelah perkuliahan dimulai.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Section Tentang -->
<section id="tentang" class="py-5 tentang-section">
  <div class="container">
    <div class="row g-4 align-items-start">

      <!-- Kiri: Deskripsi -->
      <div class="col-md-7">
        <h2 class="fw-bold text-success mb-3">Tentang Layanan Akademik</h2>
        <p class="text-muted lead">
          Layanan Akademik STAIN Sultan Abdurrahman berkomitmen memberikan pelayanan prima kepada mahasiswa dalam hal administrasi perkuliahan, registrasi, pengajuan surat, dan informasi akademik lainnya.
        </p>
        <p class="text-muted">
          Dengan sistem digital yang terus dikembangkan, kami hadir untuk mempermudah mahasiswa dalam mengakses berbagai kebutuhan akademik secara cepat, transparan, dan efisien.
        </p>
      </div>

      <!-- Kanan: Card per item -->
      <div class="col-md-5">
        <div class="d-flex flex-column gap-3">

          <!-- Telepon -->
          <div class="card p-3 d-flex flex-row align-items-center contact-box">
            <div class="icon-circle bg-success text-white me-3">
              <i class="bi bi-telephone-fill"></i>
            </div>
            <div>
              <small class="text-muted">Telepon</small><br>
              <strong>(0771) 123456</strong>
            </div>
          </div>

          <!-- Email -->
          <div class="card p-3 d-flex flex-row align-items-center contact-box">
            <div class="icon-circle bg-primary text-white me-3">
              <i class="bi bi-envelope-fill"></i>
            </div>
            <div>
              <small class="text-muted">Email</small><br>
              <strong>akademik@stainkepri.ac.id</strong>
            </div>
          </div>

          <!-- Alamat -->
          <div class="card p-3 d-flex flex-row align-items-center contact-box">
            <div class="icon-circle bg-warning text-white me-3">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div>
              <small class="text-muted">Alamat</small><br>
              <strong>Jl. Lintas Barat, Tanjungpinang</strong>
            </div>
          </div>

          <!-- Jam Layanan -->
          <div class="card p-3 d-flex flex-row align-items-center contact-box">
            <div class="icon-circle bg-danger text-white me-3">
              <i class="bi bi-clock-fill"></i>
            </div>
            <div>
              <small class="text-muted">Jam Layanan</small><br>
              <strong>Senin – Jumat: 08.00 – 16.00</strong>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

