

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="margin-left: 50px; font-size: 40px;"><?php echo $title;?></h1>
            <p style="margin-left: 50px; font-size: 20px; color: #6c757d;">Kelola informasi profil dan data akademik Anda</p>
          </div>
        </div>
    </div>

    <!-- HTML -->
<div class="card card-outline" style="margin-left: 50px;">
  <div class="card-header p-0">
    <ul class="nav nav-tabs clean-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#data-pribadi" data-toggle="tab">Data Pribadi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#data-akademik" data-toggle="tab">Data Akademik</a>
      </li>
    </ul>
  </div>

  <div class="card-body px-5 py-4" >
    <div class="tab-content">
      <!-- Tab Data Pribadi -->
      <div class="tab-pane fade show active" id="data-pribadi">
        <h5 class="section-title">Informasi Pribadi</h5>
        <p class="section-subtitle">Data pribadi dan kontak Anda</p>
        <dl class="row">
          <dt class="col-sm-4">Nama Lengkap</dt>
          <dd class="col-sm-8">John Doe</dd>

          <dt class="col-sm-4">Email</dt>
          <dd class="col-sm-8">john.doe@university.ac.id</dd>

          <dt class="col-sm-4">No. Telepon</dt>
          <dd class="col-sm-8">081234567890</dd>

          <dt class="col-sm-4">Tanggal Lahir</dt>
          <dd class="col-sm-8">01/01/2000</dd>

          <dt class="col-sm-4">Alamat</dt>
          <dd class="col-sm-8">Jl. Universitas No. 123, Jakarta</dd>
        </dl>
        <button class="btn btn-primary">Edit Profil</button>
      </div>

      <!-- Tab Data Akademik -->
      <div class="tab-pane fade" id="data-akademik">
        <h5 class="section-title">Informasi Akademik</h5>
        <p class="section-subtitle">Data akademik Anda akan ditampilkan di sini.</p>
      </div>
    </div>
  </div>
</div>


  </section>
</div>


  
