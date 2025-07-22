<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>404 - Halaman Tidak Ditemukan</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
    }
    .container {
      max-width: 600px;
    }
    .btn-back {
      background: linear-gradient(to right, #72c07b, #2b7a3a);
      color: white;
      border-radius: 8px;
      padding: 10px 20px;
    }
  </style>
</head>
<body>
  <div class="container">
	<img src="<?php echo base_url('assets/img/404-error.png')?>" alt="" class="error-img img-fluid mb-4">
    <p class="lead">Maaf, halaman yang Anda cari tidak tersedia atau sedang dalam pengembangan.</p>
    <a href="<?= base_url() ?>" class="btn btn-back mt-3">Kembali ke Beranda</a>
    <!-- <a href="<?= base_url('auth/logout') ?>" class="btn btn-back mt-3">Logout</a> -->
  </div>
</body>
</html>
