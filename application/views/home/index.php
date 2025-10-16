
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold mb-3 hero-text-gradient">
          <span>Sistem Informasi</span><br>
          <span>Pelayanan Akademik</span>
          <span>STAIN Kepri </span><br>
          <span class="text-dark"></span>
        </h1>
        <p class="lead text-muted mb-4">
        Layanan akademik online yang memudahkan mahasiswa untuk mengajukan berbagai jenis surat akademik dengan cepat dan efisien
        </p>
        <div class="d-flex flex-wrap gap-3">
            <button id="showWelcomeSipena" class="btn btn-gradient ms-lg-3 mt-2 mt-lg-0" type="button">Ajukan Surat</button>

            <a href="<?php echo base_url('tracking')?>" class="btn btn-gradient ms-lg-3 mt-2 mt-lg-0">Lacak Surat</a>
            <?php $this->load->view('home/welcome_sipena_modal'); ?>
        </div>
      </div>

      <div class="col-lg-6 text-center">
        <img src="<?php echo base_url('assets/img/ilustrasi.png')?>" alt="" class="hero-img img-fluid";> 
       </div>
       
    </div>
  </div>
</section>

<!-- Section Cara Menggunakan Layanan -->
<!-- <section id="cara-menggunakan" class="py-5" style="background: #fcfdff;">
  <div class="container">
    <h2 class="fw-bold text-center mb-2" style="font-size:2.5rem;">Cara Menggunakan Layanan</h2>
    <p class="text-center text-muted mb-5" style="font-size:1.25rem;">Ikuti langkah-langkah sederhana berikut untuk mendapatkan surat akademik Anda</p>
    <div class="row justify-content-center mb-5">
      <div class="col-6 col-md-3 text-center mb-4 mb-md-0">
        <div style="background:#2346b0;color:#fff;width:110px;height:110px;display:flex;align-items:center;justify-content:center;border-radius:50%;margin:0 auto;font-size:2.2rem;font-weight:700;">1</div>
        <h5 class="fw-bold mt-3">Pilih Jenis Surat</h5>
        <div class="text-muted">Klik "Ajukan Surat" dan pilih jenis surat yang Anda butuhkan</div>
      </div>
      <div class="col-6 col-md-3 text-center mb-4 mb-md-0">
        <div style="background:#2346b0;color:#fff;width:110px;height:110px;display:flex;align-items:center;justify-content:center;border-radius:50%;margin:0 auto;font-size:2.2rem;font-weight:700;">2</div>
        <h5 class="fw-bold mt-3">Isi Data & Upload</h5>
        <div class="text-muted">Lengkapi data diri dan upload dokumen pendukung yang diperlukan</div>
      </div>
      <div class="col-6 col-md-3 text-center mb-4 mb-md-0">
        <div style="background:#2346b0;color:#fff;width:110px;height:110px;display:flex;align-items:center;justify-content:center;border-radius:50%;margin:0 auto;font-size:2.2rem;font-weight:700;">3</div>
        <h5 class="fw-bold mt-3">Dapatkan Kode Resi</h5>
        <div class="text-muted">Sistem akan memberikan kode resi unik untuk melacak status surat</div>
      </div>
      <div class="col-6 col-md-3 text-center">
        <div style="background:#2346b0;color:#fff;width:110px;height:110px;display:flex;align-items:center;justify-content:center;border-radius:50%;margin:0 auto;font-size:2.2rem;font-weight:700;">4</div>
        <h5 class="fw-bold mt-3">Lacak & Download</h5>
        <div class="text-muted">Lacak status dengan kode resi, isi survey, dan ambil surat Anda di Pelayanan Akademik</div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10">
        <div class="d-flex flex-wrap justify-content-center align-items-center py-4 px-2 rounded-4 shadow-sm" style="background:#fff;">
          <div class="text-center flex-fill mx-2 my-2">
            <div style="background:#e3eafd;width:60px;height:60px;display:flex;align-items:center;justify-content:center;border-radius:50%;margin:0 auto;font-size:1.7rem;">
              <i class="bi bi-file-earmark-text"></i>
            </div>
            <div class="fw-semibold mt-2">Ajukan</div>
          </div>
          <div class="d-none d-md-block" style="width:60px;height:2px;background:#e3eafd;"></div>
          <div class="text-center flex-fill mx-2 my-2">
            <div style="background:#e3eafd;width:60px;height:60px;display:flex;align-items:center;justify-content:center;border-radius:50%;margin:0 auto;font-size:1.7rem;">
              <i class="bi bi-clock"></i>
            </div>
            <div class="fw-semibold mt-2">Proses</div>
          </div>
          <div class="d-none d-md-block" style="width:60px;height:2px;background:#e3eafd;"></div>
          <div class="text-center flex-fill mx-2 my-2">
            <div style="background:#e3eafd;width:60px;height:60px;display:flex;align-items:center;justify-content:center;border-radius:50%;margin:0 auto;font-size:1.7rem;">
              <i class="bi bi-star"></i>
            </div>
            <div class="fw-semibold mt-2">Survey</div>
          </div>
          <div class="d-none d-md-block" style="width:60px;height:2px;background:#e3eafd;"></div>
          <div class="text-center flex-fill mx-2 my-2">
            <div style="background:#4caf50;width:60px;height:60px;display:flex;align-items:center;justify-content:center;border-radius:50%;margin:0 auto;font-size:1.7rem;color:#fff;">
              <i class="bi bi-download"></i>
            </div>
            <div class="fw-semibold mt-2">Selesai</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->




<!-- Section Cara Menggunakan Layanan -->
<section id="cara-kerja" class="py-5" style="background: #ffffff;">
  <div class="container cara-kerja-container">
    <h2 class="text-center mb-3 fw-bold text-success">Cara Menggunakan Layanan</h2>
    
    <p class="lead text-muted mb-4 text-center">
        Ikuti langkah-langkah sederhana berikut untuk mendapatkan surat akademik Anda
    </p>

     <div class="row justify-content-center mb-5 cara-kerja-steps">
      <div class="col-6 col-md-3 text-center mb-4 mb-md-0">
        <div class="cara-kerja-step-circle">1</div>
        <h5 class="fw-bold mt-3">Pilih Jenis Surat</h5>
        <div class="text-muted">Klik "Ajukan Surat" dan pilih jenis surat yang Anda butuhkan</div>
      </div>
      <div class="col-6 col-md-3 text-center mb-4 mb-md-0">
        <div class="cara-kerja-step-circle">2</div>
        <h5 class="fw-bold mt-3">Isi Data & Upload</h5>
        <div class="text-muted">Lengkapi data diri dan upload dokumen pendukung yang diperlukan</div>
      </div>
      <div class="col-6 col-md-3 text-center mb-4 mb-md-0">
        <div class="cara-kerja-step-circle">3</div>
        <h5 class="fw-bold mt-3">Dapatkan Kode Resi</h5>
        <div class="text-muted">Sistem akan memberikan kode resi unik untuk melacak status surat</div>
      </div>
      <div class="col-6 col-md-3 text-center">
        <div class="cara-kerja-step-circle">4</div>
        <h5 class="fw-bold mt-3">Lacak & Ambil Surat</h5>
        <div class="text-muted">Lacak status dengan kode resi, isi survey, dan Ambil surat Anda di Ruang Akademik</div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10">
        <div class="d-flex flex-wrap justify-content-center align-items-center py-4 px-2 rounded-4 shadow-sm cara-kerja-progress">
          <div class="text-center flex-fill mx-2 my-2">
            <div class="cara-kerja-progress-circle"><i class="bi bi-file-earmark-text"></i></div>
            <div class="fw-semibold mt-2">Ajukan</div>
          </div>
          <div class="d-none d-md-block cara-kerja-progress-line"></div>
          <div class="text-center flex-fill mx-2 my-2">
            <div class="cara-kerja-progress-circle"><i class="bi bi-clock"></i></div>
            <div class="fw-semibold mt-2">Proses</div>
          </div>
          <div class="d-none d-md-block cara-kerja-progress-line"></div>
          <div class="text-center flex-fill mx-2 my-2">
            <div class="cara-kerja-progress-circle"><i class="bi bi-star"></i></div>
            <div class="fw-semibold mt-2">Isi Survey</div>
          </div>
          <div class="d-none d-md-block cara-kerja-progress-line"></div>
          <div class="text-center flex-fill mx-2 my-2">
            <div class="cara-kerja-progress-circle cara-kerja-progress-circle-success"><i class="bi bi-download"></i></div>
            <div class="fw-semibold mt-2">Selesai</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Section Video Tutorial -->
<section id="tutorial" class="py-5" style="background:#f9f9f9;">
  <div class="container">
    <h2 class="fw-bold text-success text-center mb-4">Video Tutorial</h2>
    <p class="text-center text-muted mb-5">Simak panduan singkat cara menggunakan layanan SIPENA.</p>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="ratio ratio-16x9 shadow rounded-4 overflow-hidden fade-in-video">
          <iframe 
            src="https://www.youtube.com/embed/rrVNH2_TF0A" 
            title="Video Tutorial SIPENA" 
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
        </div>
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
            Apa itu SIPENA?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            SIPENA (Sistem Informasi Pelayanan Akademik) adalah layanan digital STAIN Sultan Abdurrahman yang memfasilitasi pengajuan berbagai surat akademik secara online, seperti Surat Keterangan Aktif Kuliah, Surat Pra-Penelitian Skripsi, dan Surat Izin Penelitian Skripsi. Ke depan, SIPENA akan terus dikembangkan untuk mendukung lebih banyak layanan akademik bagi mahasiswa.
        </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Bagaimana cara mengetahui status pengajuan surat saya?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Kamu bisa masuk ke menu Lacak Surat, lalu masukkan kode resi yang didapat saat mengajukan surat. Status surat akan muncul apakah menunggu verifikasi, diproses, menunggu tanda tangan pimpinan, atau sudah selesai.
        </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Jika status surat di menu Lacak Surat sudah "Selesai", apa yang harus saya lakukan?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
                 Jika status surat sudah <strong>"Selesai"</strong> pada menu Lacak Surat, mahasiswa dapat mengambil surat tersebut langsung di bagian akademik kampus 
        </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Bagaimana jika saya lupa kode resi pengajuan?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Jika kamu lupa kode resi, silakan masuk ke menu <b>Lacak Surat</b>, pilih <b>lupa nomor resi</b> lalu masukkan NIM dan Nama Lengkap. Sistem akan menampilkan kembali kode resi pengajuanmu.
        </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Apa yang harus dilakukan jika pengajuan saya ditolak?
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Cek alasan penolakan yang tertera di sistem. Umumnya penolakan terjadi karena dokumen tidak lengkap atau data salah.
Kamu bisa memperbaiki lalu mengajukan kembali.
        </div>
        </div>
      </div>

    </div>
  </div>
</section>



<script>
// Deteksi saat scroll
document.addEventListener("scroll", function() {
  const video = document.querySelector(".fade-in-video");
  const rect = video.getBoundingClientRect();
  if (rect.top < window.innerHeight - 100) {
    video.classList.add("visible");
  }
});
</script>

<!-- Section Tentang -->
<!-- <section id="tentang" class="py-5 tentang-section">
  <div class="container">
    <div class="row g-4 align-items-start"> -->

      <!-- Kiri: Deskripsi -->
      <!-- <div class="col-md-7">
        <h2 class="fw-bold text-success mb-3">Tentang Layanan Akademik</h2>
        <p class="text-muted lead">
          Layanan Akademik STAIN Sultan Abdurrahman berkomitmen memberikan pelayanan prima kepada mahasiswa dalam hal administrasi perkuliahan, registrasi, pengajuan surat, dan informasi akademik lainnya.
        </p>
        <p class="text-muted">
          Dengan sistem digital yang terus dikembangkan, kami hadir untuk mempermudah mahasiswa dalam mengakses berbagai kebutuhan akademik secara cepat, transparan, dan efisien.
        </p>
      </div> -->

      <!-- Kanan: Card per item -->
      <!-- <div class="col-md-5">
        <div class="d-flex flex-column gap-3"> -->

          <!-- Telepon -->
          <!-- <div class="card p-3 d-flex flex-row align-items-center contact-box">
            <div class="icon-circle bg-success text-white me-3">
              <i class="bi bi-telephone-fill"></i>
            </div>
            <div>
              <small class="text-muted">Telepon</small><br>
              <strong>(0771) 123456</strong>
            </div>
          </div> -->

          <!-- Email -->
          <!-- <div class="card p-3 d-flex flex-row align-items-center contact-box">
            <div class="icon-circle bg-primary text-white me-3">
              <i class="bi bi-envelope-fill"></i>
            </div>
            <div>
              <small class="text-muted">Email</small><br>
              <strong>akademik@stainkepri.ac.id</strong>
            </div>
          </div> -->

          <!-- Alamat -->
          <!-- <div class="card p-3 d-flex flex-row align-items-center contact-box">
            <div class="icon-circle bg-warning text-white me-3">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div>
              <small class="text-muted">Alamat</small><br>
              <strong>Jl. Lintas Barat, Tanjungpinang</strong>
            </div>
          </div> -->

          <!-- Jam Layanan -->
          <!-- <div class="card p-3 d-flex flex-row align-items-center contact-box">
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
</section> -->



<!-- Section Sistem Informasi -->
<!-- <section id="sisteminformasi" class="py-5" style="background-color: #f8f9fa;">
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
</section> -->
