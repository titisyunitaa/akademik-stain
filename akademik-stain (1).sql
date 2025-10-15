-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2025 at 06:32 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik-stain`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengajuan_surat_izin_penelitian_skripsi`
--

CREATE TABLE `detail_pengajuan_surat_izin_penelitian_skripsi` (
  `id` int NOT NULL,
  `pengajuan_id` int NOT NULL,
  `judul_skripsi` varchar(500) NOT NULL,
  `tempat_penelitian` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengajuan_surat_pra_penelitian`
--

CREATE TABLE `detail_pengajuan_surat_pra_penelitian` (
  `id` int NOT NULL,
  `pengajuan_id` int NOT NULL,
  `judul_proposal` varchar(500) NOT NULL,
  `tempat_penelitian` varchar(200) NOT NULL,
  `kepada` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int NOT NULL,
  `jenis_surat_id` int NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `file_path` varchar(128) NOT NULL,
  `uploaded_at` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `file_size` varchar(50) NOT NULL,
  `file_type` varchar(128) NOT NULL,
  `download_count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `jenis_surat_id`, `kategori`, `title`, `file_path`, `uploaded_at`, `file_size`, `file_type`, `download_count`) VALUES
(8, 0, 'permohonan', 'Form Permohonan Surat Aktif Kuliah', 'uploads/dokumen/bf1535d1e17ff21646b20eefa3940cfd.docx', '2025-09-02 01:04:33', '52.12', '.docx', 0),
(10, 0, 'permohonan', 'Form Permohonan Izin Penelitian Skripsi', 'uploads/dokumen/8c0e5fe010e51dfa8c4851aea6e8ce10.docx', '2025-09-02 02:24:05', '55.99', '.docx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int NOT NULL,
  `judul` varchar(500) NOT NULL,
  `isi` text NOT NULL,
  `kategori` enum('berita','pengumuman','akademik') NOT NULL,
  `tanggal_posting` datetime NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` enum('publish','draft') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `views` int NOT NULL,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `isi`, `kategori`, `tanggal_posting`, `gambar`, `status`, `views`, `lampiran`) VALUES
(1, 'Monitoring Saran', 'dhajwgdaj', 'berita', '2025-07-31 01:48:02', 'uploads/berita/4ffb9a62567ff9ccf72455515e4f2ccf.jpeg', 'publish', 0, ''),
(2, 'Pengumuman UM-PTKIN', '<span style=\"font-family: sans-serif; text-align: justify; background-color: rgb(248, 249, 250);\">Sekolah Tinggi Agama Islam Negeri (STAIN) Sultan Abdurrahman Kepulauan Riau diprakarsai oleh Badan Pengelola yang dibentuk Gubernur Kepuluan Riau dengan SK. No. 193 Tahun 2009 sebagai langkah awal terbentuknya Sekolah Tinggi Agama Islam Negeri (STAIN) di Provinsi Kepulauan Riau dan berdiri berdasarkan SK Direktur Jenderal Pendidikan Islam No. Dj.I/454/2010 tanggal 20 Juli 2010.</span>', 'berita', '2025-07-31 01:49:38', 'uploads/berita/dd70eca8525e73d6d47ecc76c006df6c.jpeg', 'draft', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `log_status_surat`
--

CREATE TABLE `log_status_surat` (
  `id` int NOT NULL,
  `pengajuan_id` int NOT NULL,
  `status` varchar(50) NOT NULL,
  `timestamp` datetime NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_jenis_surat`
--

CREATE TABLE `master_jenis_surat` (
  `id` int NOT NULL,
  `jenis_surat` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `master_jenis_surat`
--

INSERT INTO `master_jenis_surat` (`id`, `jenis_surat`, `deskripsi`, `icon`) VALUES
(5, 'Surat Aktif Kuliah', 'Untuk Keperluan Beasiswa, Tunjangan atau Verifikasi Status Kemahasiswaan', 'bi bi-person-check-fill fs-1 text-success'),
(8, 'Surat Permohonan Pra Penelitian Skripsi', 'Surat Pengantar untuk Melakukan Observasi Awal atau Studi Pendahuluan', 'bi bi-search fs-1 text-success'),
(9, 'Surat Permohonan Izin Penelitian Skripsi', 'Permohonan izin resmi untuk pengambilan data skripsi di lokasi penelitian.', 'bi bi-journal-check fs-1 text-success');

-- --------------------------------------------------------

--
-- Table structure for table `master_prodi`
--

CREATE TABLE `master_prodi` (
  `id` int NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `kode_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `master_prodi`
--

INSERT INTO `master_prodi` (`id`, `nama_prodi`, `kode_prodi`) VALUES
(1, 'Pendidikan Agama Islam', 'PAI'),
(2, 'Tadris Bahasa Inggris', 'TBI'),
(3, 'Manajemen Bisnis Syariah', 'MBS'),
(4, 'Pendidikan Islam Anak Usia Dini', 'PIAUD'),
(5, 'Manajemen Pendidikan Islam', 'MPI'),
(6, 'Komunikasi Penyiaran Islam', 'KPI'),
(7, 'Pendidikan Bahasa Arab', 'PBA'),
(8, 'Akuntansi Syariah', 'AKS'),
(9, 'Hukum Ekonomi Syariah', 'HES'),
(10, 'Hukum Keluarga Islam', 'HKI'),
(11, 'Ilmu Alquran dan Tafsir', 'IAT');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_berkas`
--

CREATE TABLE `pengajuan_berkas` (
  `id` int NOT NULL,
  `pengajuan_id` int NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `path_file` varchar(255) NOT NULL,
  `jenis_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id` int NOT NULL,
  `kode_resi` varchar(255) NOT NULL,
  `jenis_surat_id` int NOT NULL,
  `prodi_id` int NOT NULL,
  `nama_mhs` varchar(200) NOT NULL,
  `nim_mhs` varchar(50) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jalan` varchar(255) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `semester` int NOT NULL,
  `keperluan_surat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tahun_akademik_awal` varchar(50) NOT NULL,
  `tahun_akademik_akhir` varchar(50) NOT NULL,
  `status` enum('menunggu verifikasi','diproses','menunggu tanda tangan','selesai','ditolak') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `file_surat_pdf` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `keterangan_admin` text NOT NULL,
  `nomor_surat` varchar(128) NOT NULL,
  `tampilkan_ttd` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_kepuasan`
--

CREATE TABLE `survey_kepuasan` (
  `id` int NOT NULL,
  `pengajuan_id` int NOT NULL,
  `kualitas` tinyint NOT NULL,
  `kecepatan` tinyint NOT NULL,
  `kemudahan` tinyint NOT NULL,
  `kejelasan` tinyint NOT NULL,
  `keandalan` tinyint NOT NULL,
  `kepuasan` tinyint NOT NULL,
  `saran` text NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int NOT NULL,
  `is_active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`, `role_id`, `is_active`) VALUES
(1, 'titis', 'Titis Yunita', '', '$2y$10$RpO6zG7T73nsdAfnGrd9neU5XG2zjPu9aIs1EZJF5dmXWry7iVY/C', 1, 1),
(2, 'makrup', 'Makrup', '', '$2y$10$RpO6zG7T73nsdAfnGrd9neU5XG2zjPu9aIs1EZJF5dmXWry7iVY/C', 2, 1),
(3, 'wisdar', 'Wisdar Hanum', '', '$2y$10$RpO6zG7T73nsdAfnGrd9neU5XG2zjPu9aIs1EZJF5dmXWry7iVY/C', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int NOT NULL,
  `role_id` int NOT NULL,
  `menu_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(5, 1, 2),
(7, 1, 3),
(9, 1, 9),
(10, 1, 10),
(11, 1, 8),
(12, 1, 11),
(13, 2, 2),
(14, 2, 8),
(15, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'superadmin'),
(2, 'user'),
(3, 'menu'),
(8, 'master'),
(10, 'Arsip ');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Superadmin'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int NOT NULL,
  `menu_id` int NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Dashboard', 'user/index', 'fa-solid fa-house', 1),
(2, 2, 'My Profile', 'user', 'fa-solid fa-user', 0),
(3, 3, 'Menu Management', 'menu', 'fa-solid fa-list', 1),
(4, 3, 'Sub Menu Management', 'menu/submenu', 'fa-solid fa-folder-open', 1),
(9, 1, 'Role', 'superadmin/role', 'fa-solid fa-user-tie', 1),
(10, 8, 'Dokumen', 'master/dokumen', 'fa-solid fa-file-pdf', 1),
(11, 1, 'Jenis Surat', 'superadmin/jenissurat', 'fa-solid fa-envelopes-bulk', 1),
(12, 1, 'Manajemen Prodi', 'superadmin/prodi', 'fa-solid fa-building-columns', 0),
(13, 2, 'Surat Mahasiswa', 'surat_mahasiswa/index', 'fa-solid fa-envelope-open', 1),
(14, 10, 'Arsip Surat', 'arsip', 'fa-solid fa-box-archive', 0),
(15, 8, 'Berita & Pengumuman', 'master/berita', 'fa-solid fa-newspaper', 0),
(16, 2, 'Survey Kepuasan', 'survey', 'fa-solid fa-square-poll-vertical', 1),
(17, 10, 'Arsip Surat', 'arsip/index', 'fa-solid fa-box-archive', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pengajuan_surat_izin_penelitian_skripsi`
--
ALTER TABLE `detail_pengajuan_surat_izin_penelitian_skripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_pengajuan_surat_pra_penelitian`
--
ALTER TABLE `detail_pengajuan_surat_pra_penelitian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_status_surat`
--
ALTER TABLE `log_status_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_jenis_surat`
--
ALTER TABLE `master_jenis_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_prodi`
--
ALTER TABLE `master_prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan_berkas`
--
ALTER TABLE `pengajuan_berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_kepuasan`
--
ALTER TABLE `survey_kepuasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pengajuan_surat_izin_penelitian_skripsi`
--
ALTER TABLE `detail_pengajuan_surat_izin_penelitian_skripsi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_pengajuan_surat_pra_penelitian`
--
ALTER TABLE `detail_pengajuan_surat_pra_penelitian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_status_surat`
--
ALTER TABLE `log_status_surat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `master_jenis_surat`
--
ALTER TABLE `master_jenis_surat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `master_prodi`
--
ALTER TABLE `master_prodi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengajuan_berkas`
--
ALTER TABLE `pengajuan_berkas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `survey_kepuasan`
--
ALTER TABLE `survey_kepuasan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
