<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Landing Page STAIN KEPRI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-glass fixed-top">
    
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2 text-success fw-bold" href="">
        <img src="<?php echo base_url('assets/img/logo_stain.png')?>" alt="" class="logo-stain";> 
        <span>Akademik STAIN KEPRI</span>
    </a>

    <!-- Burger Menu -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center position-relative" id="mainNavbar">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url('home')?>">Beranda</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLayanan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Layanan Online
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownLayanan">
                <li><a class="dropdown-item" href="<?php echo base_url('layanan_surat')?>">Layanan Surat Menyurat</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('layanan_surat/suratAktifKuliah')?>">Pengajuan Aktif Kuliah</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('layanan_surat')?>">Pengajuan Cuti Kuliah</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('layanan_surat')?>">Pengajuan Penunjuk Dosen Pembimbing</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('layanan_surat')?>">Pengajuan Pra Penelitian Skripsi</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('layanan_surat')?>">Pengajuan Izin Penelitian Skripsi</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('layanan_surat')?>">Pengajuan Permohonan Diri</a></li>
              </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLayanan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lacak Surat
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownLayanan">
                <li><a class="dropdown-item" href="<?php echo base_url('tracking')?>">Lacak Surat Online</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLayanan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Unduhan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownLayanan">
                <li><a class="dropdown-item" href="">Kalender Akademik</a></li>
                <li><a class="dropdown-item" href="">SK Beasiswa</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('unduhan')?>">Dokumen</a></li>
            </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('berita')?>">Berita</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('berita')?>">MoU</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('survey')?>">Survey</a>
        </li>
      </ul>

       <a href="<?php echo base_url('auth')?>" class="btn btn-gradient ms-lg-3 mt-2 mt-lg-0">Login</a>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="py-5">