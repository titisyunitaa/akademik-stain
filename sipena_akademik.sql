-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2025 at 03:07 AM
-- Server version: 11.4.8-MariaDB
-- PHP Version: 8.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipena_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengajuan_surat_izin_penelitian_skripsi`
--

CREATE TABLE `detail_pengajuan_surat_izin_penelitian_skripsi` (
  `id` int(11) NOT NULL,
  `pengajuan_id` int(11) NOT NULL,
  `judul_skripsi` varchar(500) NOT NULL,
  `tempat_penelitian` varchar(200) NOT NULL,
  `kepada` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `detail_pengajuan_surat_izin_penelitian_skripsi`
--

INSERT INTO `detail_pengajuan_surat_izin_penelitian_skripsi` (`id`, `pengajuan_id`, `judul_skripsi`, `tempat_penelitian`, `kepada`) VALUES
(2, 116, 'Pelaksanaan Program Pembinaan Calon Pengantin terhadap Pengetahuan Pernikahan pada tahun 2002', 'Pengadilan Agama Kelas 1A Tanjungpinang', ''),
(4, 145, 'Efektivitas Kegiatan Didikan Subuh di TPQ Al-Hidayah Hang Tuah Terhadap Pembentukan Karakter Siswa di Masyarakat', 'TPQ Al-Hidayah Hang Tuah', ''),
(5, 158, 'Analisis Hukum Ekonomi Syariah Terhadap Praktik Utang Bibit dalam Kerja Sama Budidaya Ikan Kerapu di Desa Resun Pesisir Kabupaten Lingga', 'Desa Resun Pesisir Kabupaten Lingga', ''),
(6, 159, 'Pengaruh kualitas pelayanan dan nilai pelanggan terhadap loyalitas pelanggan joint Coffe km 5 Tanjungpinang', 'Joint Coffe km 5 Tanjungpinang', ''),
(7, 162, 'Tradisi Pembacaan Surat Al-Waqi\'ah (Studi Living Qur\'an Di Pondok Pesantren Al-Badariyyah Kota Batam)', 'Pondok Pesantren Al-Badariyyah Kota Batam', ''),
(8, 165, 'Tinjauan Hukum Islam Terhadap Akad Syirkah Tidak Tercata Antara Nelayan Dan Penampung Ikan', 'Desa Selat Mendaun', ''),
(9, 171, 'Peran Guru Pendidikan Agama Islam Dalam menangani Kasus Bullying di SMAN 1 Siantan', 'SMAN 1 Siantan', ''),
(10, 172, 'Legal Reasoning Hakim Dalam Memutus Perkara Dispensasi Nikah Perspektif Saddu Adz-Dzari\'ah (Studi Penetapan Pengadilan Agama Tanjungpinang No.133/Pdtp/2020/PA.Tpi)', 'Pengadilan Agama Tanjungpinang', 'Ketua'),
(11, 174, 'Manajemen Strategi dalam Meningkatkan Prestasi Santri di Pondok Pesantren Al Badariyyah Batam', 'Pondok Pesantren Al Badariyyah Batam', 'Kepala '),
(12, 177, 'Pengaruh Pemahaman PAI Dan Konformitas Teman Sebaya Terhadap Perilaku Bullying Pada Siswa Kelas IX MTsN Bintan Kabupaten Bintan', 'MTsN Bintan', 'Kepala '),
(16, 187, 'Strategi manajerial guru dalam membentuk karakter siswa melalui model pembelajaran berbasis pondok pesantren di mts madani tebuireng', 'Mts Madani Tebuireng', 'Kepala '),
(18, 189, 'Strategi komunikasi dians pemberdayaan anak pengendalian penduduk dan keluarga berencana (bp3kb) dalam mencegah tindak kekerasan terhadap anak di kabupaten bintan', 'Kantor bp3kb', 'Kepala '),
(19, 190, 'Penetapan hak asuh anak dalam ibu gangguan jiwa dalam putusan nomor 680/Pdt.G/2020.(Studi kasus peradilan agama Tanjung Pinang)', 'Peradilan Agama', 'Ketua'),
(20, 192, 'KINERJA PEGAWAI TATA USAHA TERHADAP LAYANAN KEPENDIDIKAN DI SDN 011 SAGULUNG BATAM', 'SDN 011 SAGULUNG BATAM', 'Kepala '),
(21, 198, 'Penetapan hak asuh anak pada ibu penyakit gangguan jiwa dalam putusan nomor 680/Pdt.G/2020,PA, TPI.', 'Peradilan Agama Tanjung pinang', 'Ketua'),
(22, 200, 'Pengaruh Permainan Twister Modifikasi Terhadap Perkembangan Motorik Kasar Anak Usia 5-6 Tahun di TK Bidadari Islamic School Tanjungpinang', 'TK Bidadari Islamic School Tanjungpinang', 'Kepala '),
(26, 205, 'Pengaruh kualitas produk dan harga terhadap kepuasan konsumen warung ibu sal pulau penyengat tanjung pinang', 'Warung ibu sal pulau penyengat', 'Pemilik'),
(28, 211, 'Pengaruh Kegiatan Meronce Terhadap Optimalisasi Motorik Halus Anak Usia 5-6 Tahun di RA Ar-Rahman Tanjungpinang', 'RA Ar-Rahman', 'Kepala '),
(29, 212, 'تطبيق أنشطة المحادثة اليومية لتحسين مهارات الكلام في اللغة العربية لدى الطالبات بمعهد دار السلم بنتان', 'Pondok Pesantren Darussilmi Bintan', 'Kepala ');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengajuan_surat_pra_penelitian`
--

CREATE TABLE `detail_pengajuan_surat_pra_penelitian` (
  `id` int(11) NOT NULL,
  `pengajuan_id` int(11) NOT NULL,
  `judul_proposal` varchar(500) NOT NULL,
  `tempat_penelitian` varchar(200) NOT NULL,
  `kepada` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `detail_pengajuan_surat_pra_penelitian`
--

INSERT INTO `detail_pengajuan_surat_pra_penelitian` (`id`, `pengajuan_id`, `judul_proposal`, `tempat_penelitian`, `kepada`) VALUES
(8, 153, 'Analisis Hukum Ekonomi Syariah terhadap Praktik Utang Bibit dalam Kerja Sama Budidaya Ikan Kerapu di Desa Resun Pesisir  Kabupaten Lingga', 'Desa Resun Pesisir Kabupaten Lingga', ''),
(10, 166, 'Pengaruh partisipasi aktif siswa dalam pembelajaran PAI terhadap hasil belajar kelas XI SMAN 1 Teluk Bintan', 'SMAN 1 Teluk Bintan', ''),
(11, 173, 'Penetapan hak asuh anak pada ibu penderita penyakit gangguan jiwa dalam putusan nomor 680/Pdt.G/2020 PA, TPI (studi kasus peradilan agama tanjung pinang).', 'Peradilan Agama', 'Ketua');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `jenis_surat_id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `file_path` varchar(128) NOT NULL,
  `uploaded_at` varchar(128) NOT NULL,
  `file_size` varchar(50) NOT NULL,
  `file_type` varchar(128) NOT NULL,
  `download_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `jenis_surat_id`, `kategori`, `title`, `file_path`, `uploaded_at`, `file_size`, `file_type`, `download_count`) VALUES
(8, 0, 'permohonan', 'Form Permohonan Surat Aktif Kuliah', 'uploads/dokumen/bf1535d1e17ff21646b20eefa3940cfd.docx', '2025-09-02 01:04:33', '52.12', '.docx', 27),
(10, 0, 'permohonan', 'Form Permohonan Izin Penelitian Skripsi', '727f46f9f7187805e747cfd8237eb3a0.docx', '2025-09-02 02:24:05', '56.82', '.docx', 17),
(15, 0, 'kalender', 'Kalender Akademik T.A 2025/2026', 'uploads/dokumen/0c57cf413ddbd02dcefea73fbca62aa3.pdf', '2025-09-23 07:13:40', '984.55', '.pdf', 3),
(16, 0, 'permohonan', 'Form Permohonan Cuti Kuliah', 'uploads/dokumen/48ab3042c4cc7983db25d839fca36a4c.docx', '2025-10-14 02:11:54', '18.57', '.docx', 0),
(17, 0, 'permohonan', 'Form Permohonan Pengaktifan Kembali	', 'uploads/dokumen/560dcabea0826baef1c872f2b2f217d0.docx', '2025-10-14 02:12:37', '54.23', '.docx', 0),
(18, 0, 'permohonan', 'Form Permohonan Penunjuk Dosen Pembimbing	', 'uploads/dokumen/137aa5f9d191f13df330613f03b33f14.docx', '2025-10-14 02:13:06', '175', '.docx', 0),
(19, 0, 'permohonan', 'Form Pengunduran Diri	', 'uploads/dokumen/92f3da8cbc67834f8f2d0bc7ac4e5b99.docx', '2025-10-14 02:13:34', '23.68', '.docx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `isi` text NOT NULL,
  `kategori` enum('berita','pengumuman','akademik') NOT NULL,
  `tanggal_posting` datetime NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` enum('publish','draft') NOT NULL,
  `views` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
  `pengajuan_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `timestamp` datetime NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `log_status_surat`
--

INSERT INTO `log_status_surat` (`id`, `pengajuan_id`, `status`, `timestamp`, `keterangan`) VALUES
(181, 76, 'menunggu verifikasi', '2025-09-10 04:51:26', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(182, 76, 'diproses', '2025-09-10 06:06:07', 'Pengajuan disetujui dan sedang diproses admin.'),
(183, 76, 'menunggu tanda tangan', '2025-09-10 06:08:31', 'Surat menunggu tanda tangan pimpinan.'),
(184, 76, 'selesai', '2025-09-10 06:23:24', 'Surat telah selesai dan silahkan ambil di akademik'),
(186, 78, 'menunggu verifikasi', '2025-09-10 12:10:18', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(187, 78, 'diproses', '2025-09-10 16:20:07', 'Pengajuan disetujui dan sedang diproses admin.'),
(189, 78, 'menunggu tanda tangan', '2025-09-11 00:47:16', 'Surat menunggu tanda tangan pimpinan.'),
(190, 78, 'selesai', '2025-09-11 00:51:47', 'Surat telah selesai dan silahkan ambil di akademik'),
(201, 82, 'menunggu verifikasi', '2025-09-12 05:00:45', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(202, 83, 'menunggu verifikasi', '2025-09-12 12:37:01', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(203, 84, 'menunggu verifikasi', '2025-09-12 12:50:28', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(205, 86, 'menunggu verifikasi', '2025-09-13 07:40:39', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(207, 88, 'menunggu verifikasi', '2025-09-13 08:38:35', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(208, 89, 'menunggu verifikasi', '2025-09-15 03:09:16', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(209, 90, 'menunggu verifikasi', '2025-09-15 03:26:33', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(210, 91, 'menunggu verifikasi', '2025-09-15 04:27:48', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(212, 90, 'ditolak', '2025-09-15 04:47:40', 'formulir permohonan yang di ttd ketua prodi tidak dilampirkan. silahkan lengkapi persyaratan lalu ajukan ulang. Jika bingung, bisa datang ke pelayanan'),
(213, 89, 'ditolak', '2025-09-15 04:52:20', '1)formulir permohonan yang di ttd ketua prodi tidak dilampirkan. 2) KRS yang di ttd PA dan kasubbag akademik tidak dilampirkan (bukan KHS),  silahkan lengkapi persyaratan lalu ajukan ulang. Jika bingung, bisa datang ke pelayanan'),
(214, 82, 'diproses', '2025-09-15 05:10:23', 'Pengajuan disetujui dan sedang diproses admin.'),
(215, 93, 'menunggu verifikasi', '2025-09-15 05:33:39', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(216, 94, 'menunggu verifikasi', '2025-09-15 06:09:13', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(219, 82, 'menunggu tanda tangan', '2025-09-15 07:05:47', 'Surat menunggu tanda tangan pimpinan.'),
(220, 82, 'selesai', '2025-09-15 07:12:44', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(221, 83, 'diproses', '2025-09-15 07:13:10', 'Pengajuan disetujui dan sedang diproses admin.'),
(222, 84, 'diproses', '2025-09-15 07:16:08', 'Pengajuan disetujui dan sedang diproses admin.'),
(223, 86, 'diproses', '2025-09-15 07:18:07', 'Pengajuan disetujui dan sedang diproses admin.'),
(224, 86, 'menunggu tanda tangan', '2025-09-15 07:19:49', 'Surat menunggu tanda tangan pimpinan.'),
(225, 84, 'menunggu tanda tangan', '2025-09-15 07:19:59', 'Surat menunggu tanda tangan pimpinan.'),
(226, 83, 'menunggu tanda tangan', '2025-09-15 07:20:12', 'Surat menunggu tanda tangan pimpinan.'),
(227, 88, 'diproses', '2025-09-15 07:21:57', 'Pengajuan disetujui dan sedang diproses admin.'),
(228, 88, 'menunggu tanda tangan', '2025-09-15 07:22:38', 'Surat menunggu tanda tangan pimpinan.'),
(229, 93, 'diproses', '2025-09-15 07:23:20', 'Pengajuan disetujui dan sedang diproses admin.'),
(230, 93, 'menunggu tanda tangan', '2025-09-15 07:24:22', 'Surat menunggu tanda tangan pimpinan.'),
(231, 94, 'diproses', '2025-09-15 07:27:21', 'Pengajuan disetujui dan sedang diproses admin.'),
(232, 94, 'menunggu tanda tangan', '2025-09-15 07:28:08', 'Surat menunggu tanda tangan pimpinan.'),
(233, 83, 'selesai', '2025-09-15 07:46:08', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(234, 84, 'selesai', '2025-09-15 07:46:18', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(235, 86, 'selesai', '2025-09-15 07:46:32', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(236, 88, 'selesai', '2025-09-15 07:46:42', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(237, 93, 'selesai', '2025-09-15 07:46:53', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(238, 94, 'selesai', '2025-09-15 07:47:06', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(239, 97, 'menunggu verifikasi', '2025-09-15 08:30:32', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(241, 99, 'menunggu verifikasi', '2025-09-15 08:47:53', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(244, 102, 'menunggu verifikasi', '2025-09-15 09:08:15', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(245, 103, 'menunggu verifikasi', '2025-09-15 13:10:46', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(246, 97, 'diproses', '2025-09-16 00:50:08', 'Pengajuan disetujui dan sedang diproses admin.'),
(247, 99, 'diproses', '2025-09-16 00:50:30', 'Pengajuan disetujui dan sedang diproses admin.'),
(248, 102, 'diproses', '2025-09-16 00:51:10', 'Pengajuan disetujui dan sedang diproses admin.'),
(249, 103, 'ditolak', '2025-09-16 00:55:03', 'silahkan ajukan ulang dengan melengkapi persyaratan berupa (1) Bukti surat permohonan yang telah ditandatangani oleh Ketua Program Studi (2) KRS Semester ini yang TELAH ditandatangani oleh Pembimbing Akademik dan Kasubbag akademik. '),
(250, 99, 'menunggu tanda tangan', '2025-09-16 01:06:23', 'Surat menunggu tanda tangan pimpinan.'),
(251, 97, 'menunggu tanda tangan', '2025-09-16 01:06:30', 'Surat menunggu tanda tangan pimpinan.'),
(252, 102, 'menunggu tanda tangan', '2025-09-16 01:08:25', 'Surat menunggu tanda tangan pimpinan.'),
(253, 102, 'selesai', '2025-09-16 02:13:16', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(254, 99, 'selesai', '2025-09-16 02:13:31', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(255, 97, 'selesai', '2025-09-16 02:14:41', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(260, 108, 'menunggu verifikasi', '2025-09-16 07:04:06', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(263, 111, 'menunggu verifikasi', '2025-09-16 07:13:46', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(265, 113, 'menunggu verifikasi', '2025-09-16 16:25:20', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(266, 113, 'diproses', '2025-09-17 00:51:59', 'Pengajuan disetujui dan sedang diproses admin.'),
(267, 111, 'diproses', '2025-09-17 00:52:06', 'Pengajuan disetujui dan sedang diproses admin.'),
(268, 108, 'diproses', '2025-09-17 00:52:14', 'Pengajuan disetujui dan sedang diproses admin.'),
(269, 108, 'menunggu tanda tangan', '2025-09-17 01:14:20', 'Surat menunggu tanda tangan pimpinan.'),
(270, 111, 'menunggu tanda tangan', '2025-09-17 01:16:03', 'Surat menunggu tanda tangan pimpinan.'),
(271, 113, 'menunggu tanda tangan', '2025-09-17 01:16:52', 'Surat menunggu tanda tangan pimpinan.'),
(274, 108, 'selesai', '2025-09-17 01:41:32', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(275, 111, 'selesai', '2025-09-17 01:41:54', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(278, 113, 'selesai', '2025-09-17 01:48:54', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(284, 118, 'menunggu verifikasi', '2025-09-17 03:34:06', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(285, 119, 'menunggu verifikasi', '2025-09-17 04:14:39', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(286, 119, 'diproses', '2025-09-17 06:36:24', 'Pengajuan disetujui dan sedang diproses admin.'),
(287, 118, 'diproses', '2025-09-17 06:37:09', 'Pengajuan disetujui dan sedang diproses admin.'),
(288, 119, 'menunggu tanda tangan', '2025-09-17 06:50:34', 'Surat menunggu tanda tangan pimpinan.'),
(289, 119, 'selesai', '2025-09-17 06:50:41', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(290, 118, 'menunggu tanda tangan', '2025-09-17 06:50:54', 'Surat menunggu tanda tangan pimpinan.'),
(291, 118, 'selesai', '2025-09-17 06:51:09', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(296, 124, 'menunggu verifikasi', '2025-09-17 09:00:45', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(297, 124, 'diproses', '2025-09-17 09:02:56', 'Pengajuan disetujui dan sedang diproses admin.'),
(298, 124, 'menunggu tanda tangan', '2025-09-17 09:05:50', 'Surat menunggu tanda tangan pimpinan.'),
(299, 124, 'selesai', '2025-09-17 09:06:05', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(300, 125, 'menunggu verifikasi', '2025-09-18 06:14:15', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(301, 125, 'diproses', '2025-09-18 06:21:43', 'Pengajuan disetujui dan sedang diproses admin.'),
(302, 126, 'menunggu verifikasi', '2025-09-18 07:29:51', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(303, 126, 'diproses', '2025-09-18 07:36:02', 'Pengajuan disetujui dan sedang diproses admin.'),
(304, 125, 'menunggu tanda tangan', '2025-09-18 07:36:52', 'Surat menunggu tanda tangan pimpinan.'),
(305, 126, 'menunggu tanda tangan', '2025-09-18 07:44:11', 'Surat menunggu tanda tangan pimpinan.'),
(306, 125, 'selesai', '2025-09-18 07:44:57', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(307, 126, 'selesai', '2025-09-18 07:45:24', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(308, 127, 'menunggu verifikasi', '2025-09-18 10:55:43', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(309, 128, 'menunggu verifikasi', '2025-09-18 11:49:59', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(311, 127, 'diproses', '2025-09-19 00:40:01', 'Pengajuan disetujui dan sedang diproses admin.'),
(312, 128, 'diproses', '2025-09-19 00:41:26', 'Pengajuan disetujui dan sedang diproses admin.'),
(313, 127, 'menunggu tanda tangan', '2025-09-19 01:40:03', 'Surat menunggu tanda tangan pimpinan.'),
(314, 128, 'menunggu tanda tangan', '2025-09-19 01:40:10', 'Surat menunggu tanda tangan pimpinan.'),
(315, 128, 'selesai', '2025-09-19 02:13:43', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(316, 127, 'selesai', '2025-09-19 02:13:53', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(317, 130, 'menunggu verifikasi', '2025-09-19 06:54:36', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(318, 130, 'diproses', '2025-09-19 07:02:03', 'Pengajuan disetujui dan sedang diproses admin.'),
(321, 133, 'menunggu verifikasi', '2025-09-19 07:41:58', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(322, 133, 'diproses', '2025-09-19 07:45:52', 'Pengajuan disetujui dan sedang diproses admin.'),
(327, 138, 'menunggu verifikasi', '2025-09-19 08:02:34', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(328, 138, 'diproses', '2025-09-19 08:03:39', 'Pengajuan disetujui dan sedang diproses admin.'),
(329, 139, 'menunggu verifikasi', '2025-09-19 08:08:38', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(330, 139, 'diproses', '2025-09-19 08:09:28', 'Pengajuan disetujui dan sedang diproses admin.'),
(331, 140, 'menunggu verifikasi', '2025-09-19 08:26:55', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(332, 130, 'menunggu tanda tangan', '2025-09-19 08:27:14', 'Surat menunggu tanda tangan pimpinan.'),
(333, 133, 'menunggu tanda tangan', '2025-09-19 08:27:24', 'Surat menunggu tanda tangan pimpinan.'),
(334, 138, 'menunggu tanda tangan', '2025-09-19 08:27:29', 'Surat menunggu tanda tangan pimpinan.'),
(335, 139, 'menunggu tanda tangan', '2025-09-19 08:27:36', 'Surat menunggu tanda tangan pimpinan.'),
(336, 140, 'diproses', '2025-09-19 08:27:58', 'Pengajuan disetujui dan sedang diproses admin.'),
(337, 141, 'menunggu verifikasi', '2025-09-19 08:28:33', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(338, 130, 'selesai', '2025-09-19 08:38:05', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(339, 133, 'selesai', '2025-09-19 08:38:20', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(340, 138, 'selesai', '2025-09-19 08:38:39', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(341, 139, 'selesai', '2025-09-19 08:38:54', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(342, 141, 'diproses', '2025-09-19 08:55:17', 'Pengajuan disetujui dan sedang diproses admin.'),
(343, 140, 'menunggu tanda tangan', '2025-09-19 09:20:31', 'Surat menunggu tanda tangan pimpinan.'),
(344, 141, 'menunggu tanda tangan', '2025-09-19 09:20:35', 'Surat menunggu tanda tangan pimpinan.'),
(345, 140, 'selesai', '2025-09-19 09:31:36', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(346, 141, 'selesai', '2025-09-19 09:31:51', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(347, 142, 'menunggu verifikasi', '2025-09-19 09:33:47', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(350, 145, 'menunggu verifikasi', '2025-09-20 14:26:31', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(353, 148, 'menunggu verifikasi', '2025-09-21 04:19:30', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(355, 150, 'menunggu verifikasi', '2025-09-21 09:46:53', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(356, 145, 'diproses', '2025-09-22 01:11:32', 'Pengajuan disetujui dan sedang diproses admin.'),
(357, 142, 'diproses', '2025-09-22 01:14:52', 'Pengajuan disetujui dan sedang diproses admin.'),
(358, 150, 'diproses', '2025-09-22 01:23:43', 'Pengajuan disetujui dan sedang diproses admin.'),
(359, 148, 'diproses', '2025-09-22 01:28:38', 'Pengajuan disetujui dan sedang diproses admin.'),
(360, 142, 'menunggu tanda tangan', '2025-09-22 01:32:02', 'Surat menunggu tanda tangan pimpinan.'),
(361, 142, 'selesai', '2025-09-22 01:44:06', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(362, 148, 'menunggu tanda tangan', '2025-09-22 01:44:26', 'Surat menunggu tanda tangan pimpinan.'),
(363, 150, 'menunggu tanda tangan', '2025-09-22 01:44:32', 'Surat menunggu tanda tangan pimpinan.'),
(364, 148, 'selesai', '2025-09-22 01:45:13', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(365, 150, 'selesai', '2025-09-22 01:45:37', 'Surat telah selesai dan ambil surat di Ruangan Akademik'),
(367, 145, 'menunggu tanda tangan', '2025-09-22 04:36:16', 'Surat menunggu tanda tangan pimpinan.'),
(368, 145, 'selesai', '2025-09-22 04:36:38', 'Surat final telah diupload dan selesai.'),
(369, 152, 'menunggu verifikasi', '2025-09-22 07:03:04', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(370, 153, 'menunggu verifikasi', '2025-09-22 09:04:16', 'Pengajuan surat pra penelitian masuk dan menunggu verifikasi admin'),
(374, 157, 'menunggu verifikasi', '2025-09-22 15:46:30', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(375, 153, 'diproses', '2025-09-23 00:41:57', 'Pengajuan disetujui dan sedang diproses admin.'),
(377, 153, 'menunggu tanda tangan', '2025-09-23 00:54:48', 'Surat menunggu tanda tangan pimpinan.'),
(378, 153, 'selesai', '2025-09-23 00:55:06', 'Surat final telah diupload dan selesai.'),
(379, 157, 'diproses', '2025-09-23 02:20:30', 'Pengajuan disetujui dan sedang diproses admin.'),
(380, 157, 'menunggu tanda tangan', '2025-09-23 02:31:30', 'Surat menunggu tanda tangan pimpinan.'),
(381, 152, 'diproses', '2025-09-23 02:35:51', 'Pengajuan disetujui dan sedang diproses admin.'),
(382, 157, 'selesai', '2025-09-23 02:36:55', 'Surat final telah diupload dan selesai.'),
(383, 152, 'menunggu tanda tangan', '2025-09-23 03:28:28', 'Surat menunggu tanda tangan pimpinan.'),
(384, 152, 'selesai', '2025-09-23 03:28:57', 'Surat final telah diupload dan selesai.'),
(385, 158, 'menunggu verifikasi', '2025-09-23 06:27:36', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(386, 159, 'menunggu verifikasi', '2025-09-23 06:47:30', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(395, 158, 'diproses', '2025-09-24 00:09:51', 'Pengajuan disetujui dan sedang diproses admin.'),
(396, 158, 'menunggu tanda tangan', '2025-09-24 00:18:40', 'Surat menunggu tanda tangan pimpinan.'),
(397, 158, 'selesai', '2025-09-24 00:18:49', 'Surat final telah diupload dan selesai.'),
(398, 159, 'diproses', '2025-09-24 00:19:32', 'Pengajuan disetujui dan sedang diproses admin.'),
(399, 159, 'menunggu tanda tangan', '2025-09-24 00:20:21', 'Surat menunggu tanda tangan pimpinan.'),
(400, 159, 'selesai', '2025-09-24 00:20:32', 'Surat final telah diupload dan selesai.'),
(401, 162, 'menunggu verifikasi', '2025-09-24 02:55:37', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(403, 164, 'menunggu verifikasi', '2025-09-24 03:31:28', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(404, 162, 'diproses', '2025-09-24 03:39:44', 'Pengajuan disetujui dan sedang diproses admin.'),
(406, 162, 'menunggu tanda tangan', '2025-09-24 03:45:45', 'Surat menunggu tanda tangan pimpinan.'),
(407, 162, 'selesai', '2025-09-24 03:45:54', 'Surat final telah diupload dan selesai.'),
(408, 165, 'menunggu verifikasi', '2025-09-24 05:44:04', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(409, 165, 'diproses', '2025-09-24 06:24:11', 'Pengajuan disetujui dan sedang diproses admin.'),
(410, 165, 'menunggu tanda tangan', '2025-09-24 06:34:38', 'Surat menunggu tanda tangan pimpinan.'),
(411, 165, 'selesai', '2025-09-24 06:34:47', 'Surat final telah diupload dan selesai.'),
(412, 166, 'menunggu verifikasi', '2025-09-24 08:16:00', 'Pengajuan surat pra penelitian masuk dan menunggu verifikasi admin'),
(413, 166, 'diproses', '2025-09-24 08:46:31', 'Pengajuan disetujui dan sedang diproses admin.'),
(414, 166, 'menunggu tanda tangan', '2025-09-24 08:47:18', 'Surat menunggu tanda tangan pimpinan.'),
(415, 166, 'selesai', '2025-09-24 08:47:29', 'Surat final telah diupload dan selesai.'),
(416, 164, 'diproses', '2025-09-25 01:29:04', 'Pengajuan disetujui dan sedang diproses admin.'),
(417, 164, 'menunggu tanda tangan', '2025-09-25 01:34:33', 'Surat menunggu tanda tangan pimpinan.'),
(418, 164, 'selesai', '2025-09-25 01:34:53', 'Surat final telah diupload dan selesai.'),
(420, 168, 'menunggu verifikasi', '2025-09-26 09:36:09', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(421, 168, 'diproses', '2025-09-26 09:40:13', 'Pengajuan disetujui dan sedang diproses admin.'),
(422, 168, 'menunggu tanda tangan', '2025-09-26 09:52:30', 'Surat menunggu tanda tangan pimpinan.'),
(424, 168, 'selesai', '2025-09-26 10:55:37', 'Surat final telah diupload dan selesai.'),
(426, 171, 'menunggu verifikasi', '2025-09-29 13:44:57', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(427, 172, 'menunggu verifikasi', '2025-09-30 10:06:41', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(428, 171, 'diproses', '2025-10-01 07:56:50', 'Pengajuan disetujui dan sedang diproses admin.'),
(429, 171, 'menunggu tanda tangan', '2025-10-01 08:02:54', 'Surat menunggu tanda tangan pimpinan.'),
(430, 171, 'selesai', '2025-10-01 08:03:04', 'Surat final telah diupload dan selesai.'),
(431, 173, 'menunggu verifikasi', '2025-10-01 09:17:44', 'Pengajuan surat pra penelitian masuk dan menunggu verifikasi admin'),
(432, 174, 'menunggu verifikasi', '2025-10-01 09:27:24', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(433, 172, 'diproses', '2025-10-01 10:00:28', 'Pengajuan disetujui dan sedang diproses admin.'),
(434, 172, 'menunggu tanda tangan', '2025-10-01 10:21:49', 'Surat menunggu tanda tangan pimpinan.'),
(435, 172, 'selesai', '2025-10-01 10:21:59', 'Surat final telah diupload dan selesai.'),
(436, 174, 'diproses', '2025-10-01 10:41:28', 'Pengajuan disetujui dan sedang diproses admin.'),
(437, 173, 'diproses', '2025-10-01 10:43:02', 'Pengajuan disetujui dan sedang diproses admin.'),
(438, 173, 'menunggu tanda tangan', '2025-10-01 10:45:09', 'Surat menunggu tanda tangan pimpinan.'),
(439, 173, 'selesai', '2025-10-01 10:45:25', 'Surat final telah diupload dan selesai.'),
(441, 174, 'menunggu tanda tangan', '2025-10-01 10:48:52', 'Surat menunggu tanda tangan pimpinan.'),
(442, 174, 'selesai', '2025-10-01 10:49:02', 'Surat final telah diupload dan selesai.'),
(444, 176, 'menunggu verifikasi', '2025-10-02 14:18:48', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(445, 177, 'menunggu verifikasi', '2025-10-03 10:50:52', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(446, 177, 'diproses', '2025-10-03 13:50:24', 'Pengajuan disetujui dan sedang diproses admin.'),
(447, 177, 'menunggu tanda tangan', '2025-10-03 13:53:16', 'Surat menunggu tanda tangan pimpinan.'),
(448, 177, 'selesai', '2025-10-03 13:53:28', 'Surat final telah diupload dan selesai.'),
(449, 176, 'diproses', '2025-10-07 07:30:52', 'Pengajuan disetujui dan sedang diproses admin.'),
(450, 176, 'menunggu tanda tangan', '2025-10-07 07:36:19', 'Surat menunggu tanda tangan pimpinan.'),
(451, 176, 'selesai', '2025-10-07 07:36:39', 'Surat final telah diupload dan selesai.'),
(454, 180, 'menunggu verifikasi', '2025-10-07 11:12:56', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(456, 182, 'menunggu verifikasi', '2025-10-07 15:02:25', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(457, 183, 'menunggu verifikasi', '2025-10-07 15:04:38', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(461, 187, 'menunggu verifikasi', '2025-10-08 04:36:28', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(463, 189, 'menunggu verifikasi', '2025-10-08 13:34:59', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(464, 187, 'diproses', '2025-10-08 15:01:26', 'Pengajuan disetujui dan sedang diproses admin.'),
(465, 187, 'menunggu tanda tangan', '2025-10-08 15:05:34', 'Surat menunggu tanda tangan pimpinan.'),
(466, 187, 'selesai', '2025-10-08 15:05:42', 'Surat final telah diupload dan selesai.'),
(467, 189, 'diproses', '2025-10-08 15:06:48', 'Pengajuan disetujui dan sedang diproses admin.'),
(468, 189, 'menunggu tanda tangan', '2025-10-08 15:07:20', 'Surat menunggu tanda tangan pimpinan.'),
(469, 189, 'selesai', '2025-10-08 15:08:08', 'Surat final telah diupload dan selesai.'),
(470, 190, 'menunggu verifikasi', '2025-10-09 06:44:25', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(471, 190, 'diproses', '2025-10-09 09:44:23', 'Pengajuan disetujui dan sedang diproses admin.'),
(472, 190, 'menunggu tanda tangan', '2025-10-09 09:47:47', 'Surat menunggu tanda tangan pimpinan.'),
(473, 190, 'selesai', '2025-10-09 09:47:59', 'Surat final telah diupload dan selesai.'),
(475, 192, 'menunggu verifikasi', '2025-10-09 15:47:10', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(476, 192, 'diproses', '2025-10-09 15:51:38', 'Pengajuan disetujui dan sedang diproses admin.'),
(477, 192, 'menunggu tanda tangan', '2025-10-09 15:56:08', 'Surat menunggu tanda tangan pimpinan.'),
(478, 192, 'selesai', '2025-10-09 15:56:17', 'Surat final telah diupload dan selesai.'),
(479, 193, 'menunggu verifikasi', '2025-10-09 18:45:26', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(480, 194, 'menunggu verifikasi', '2025-10-09 18:48:23', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(481, 195, 'menunggu verifikasi', '2025-10-10 09:55:25', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(484, 198, 'menunggu verifikasi', '2025-10-13 07:24:17', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(485, 198, 'diproses', '2025-10-13 07:48:28', 'Pengajuan disetujui dan sedang diproses admin.'),
(486, 198, 'menunggu tanda tangan', '2025-10-13 07:49:38', 'Surat menunggu tanda tangan pimpinan.'),
(487, 198, 'selesai', '2025-10-13 07:49:48', 'Surat final telah diupload dan selesai.'),
(488, 199, 'menunggu verifikasi', '2025-10-13 08:52:22', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(489, 183, 'diproses', '2025-10-13 09:25:44', 'Pengajuan disetujui dan sedang diproses admin.'),
(490, 193, 'diproses', '2025-10-13 09:26:38', 'Pengajuan disetujui dan sedang diproses admin.'),
(491, 194, 'diproses', '2025-10-13 09:27:12', 'Pengajuan disetujui dan sedang diproses admin.'),
(492, 195, 'diproses', '2025-10-13 09:27:36', 'Pengajuan disetujui dan sedang diproses admin.'),
(493, 199, 'diproses', '2025-10-13 09:28:10', 'Pengajuan disetujui dan sedang diproses admin.'),
(494, 199, 'menunggu tanda tangan', '2025-10-13 09:34:18', 'Surat menunggu tanda tangan pimpinan.'),
(495, 195, 'menunggu tanda tangan', '2025-10-13 09:34:24', 'Surat menunggu tanda tangan pimpinan.'),
(496, 194, 'menunggu tanda tangan', '2025-10-13 09:34:30', 'Surat menunggu tanda tangan pimpinan.'),
(497, 193, 'menunggu tanda tangan', '2025-10-13 09:34:34', 'Surat menunggu tanda tangan pimpinan.'),
(498, 183, 'menunggu tanda tangan', '2025-10-13 09:34:42', 'Surat menunggu tanda tangan pimpinan.'),
(499, 200, 'menunggu verifikasi', '2025-10-13 09:42:00', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(500, 199, 'selesai', '2025-10-13 09:42:43', 'Surat final telah diupload dan selesai.'),
(501, 195, 'selesai', '2025-10-13 09:44:06', 'Surat final telah diupload dan selesai.'),
(502, 194, 'selesai', '2025-10-13 09:44:17', 'Surat final telah diupload dan selesai.'),
(503, 183, 'selesai', '2025-10-13 09:44:44', 'Surat final telah diupload dan selesai.'),
(504, 193, 'selesai', '2025-10-13 09:45:02', 'Surat final telah diupload dan selesai.'),
(505, 201, 'menunggu verifikasi', '2025-10-13 12:14:51', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(509, 205, 'menunggu verifikasi', '2025-10-13 12:40:52', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(510, 205, 'diproses', '2025-10-13 13:31:25', 'Pengajuan disetujui dan sedang diproses admin.'),
(511, 205, 'menunggu tanda tangan', '2025-10-13 13:33:00', 'Surat menunggu tanda tangan pimpinan.'),
(512, 205, 'selesai', '2025-10-13 13:33:19', 'Surat final telah diupload dan selesai.'),
(513, 200, 'diproses', '2025-10-13 13:33:58', 'Pengajuan disetujui dan sedang diproses admin.'),
(514, 200, 'menunggu tanda tangan', '2025-10-13 13:34:36', 'Surat menunggu tanda tangan pimpinan.'),
(515, 200, 'selesai', '2025-10-13 13:34:58', 'Surat final telah diupload dan selesai.'),
(516, 206, 'menunggu verifikasi', '2025-10-14 13:41:28', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(517, 206, 'diproses', '2025-10-14 14:08:37', 'Pengajuan disetujui dan sedang diproses admin.'),
(518, 201, 'diproses', '2025-10-14 14:11:45', 'Pengajuan disetujui dan sedang diproses admin.'),
(519, 201, 'menunggu tanda tangan', '2025-10-14 14:13:18', 'Surat menunggu tanda tangan pimpinan.'),
(520, 206, 'menunggu tanda tangan', '2025-10-14 14:15:28', 'Surat menunggu tanda tangan pimpinan.'),
(521, 206, 'selesai', '2025-10-14 14:25:11', 'Surat final telah diupload dan selesai.'),
(522, 201, 'selesai', '2025-10-14 14:25:21', 'Surat final telah diupload dan selesai.'),
(523, 207, 'menunggu verifikasi', '2025-10-14 14:30:12', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(524, 208, 'menunggu verifikasi', '2025-10-14 14:32:37', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(525, 209, 'menunggu verifikasi', '2025-10-14 14:33:03', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(527, 211, 'menunggu verifikasi', '2025-10-14 16:10:43', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(528, 212, 'menunggu verifikasi', '2025-10-14 17:49:52', 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'),
(529, 211, 'diproses', '2025-10-15 07:23:26', 'Pengajuan disetujui dan sedang diproses admin.'),
(530, 211, 'menunggu tanda tangan', '2025-10-15 07:24:35', 'Surat menunggu tanda tangan pimpinan.'),
(531, 211, 'selesai', '2025-10-15 07:24:48', 'Surat final telah diupload dan selesai.'),
(532, 212, 'diproses', '2025-10-15 07:25:20', 'Pengajuan disetujui dan sedang diproses admin.'),
(533, 209, 'diproses', '2025-10-15 07:29:49', 'Pengajuan disetujui dan sedang diproses admin.'),
(535, 214, 'menunggu verifikasi', '2025-10-15 08:28:04', 'Pengajuan surat masuk dan menunggu verifikasi admin'),
(536, 214, 'diproses', '2025-10-15 09:07:27', 'Pengajuan disetujui dan sedang diproses admin.'),
(537, 214, 'menunggu tanda tangan', '2025-10-15 09:14:07', 'Surat menunggu tanda tangan pimpinan.'),
(538, 209, 'menunggu tanda tangan', '2025-10-15 09:14:17', 'Surat menunggu tanda tangan pimpinan.'),
(539, 209, 'selesai', '2025-10-15 09:14:29', 'Surat final telah diupload dan selesai.'),
(540, 214, 'selesai', '2025-10-15 09:14:39', 'Surat final telah diupload dan selesai.');

-- --------------------------------------------------------

--
-- Table structure for table `master_jenis_surat`
--

CREATE TABLE `master_jenis_surat` (
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
  `pengajuan_id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `path_file` varchar(255) NOT NULL,
  `jenis_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengajuan_berkas`
--

INSERT INTO `pengajuan_berkas` (`id`, `pengajuan_id`, `nama_file`, `path_file`, `jenis_file`) VALUES
(151, 76, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Siti_Fatimah_25742343701/c39c73932bf1e91cfe0b634c97c4b4e8.jpeg', 'jpeg'),
(152, 76, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Siti_Fatimah_25742343701/43b1dba02fb8729f979426aa99823555.jpeg', 'jpeg'),
(153, 76, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Siti_Fatimah_25742343701/764fead79a7ea5eb2f8e852a00bfa551.jpeg', 'jpeg'),
(157, 78, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Muhammad_Rakha_25612053889/9d26247d8f76f3c0494c63073431c41c.jpeg', 'jpeg'),
(158, 78, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Muhammad_Rakha_25612053889/9b3880e5841398a9898ba47150bc6d89.jpeg', 'jpeg'),
(159, 78, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Muhammad_Rakha_25612053889/934dda19fcb7f972c5ac182e24cd5ad5.jpeg', 'jpeg'),
(168, 82, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Farhan_Hidayat_Putra_Ramon_24762313157/c7f58b433882ac6917bd3b548285b82f.pdf', 'pdf'),
(169, 82, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Farhan_Hidayat_Putra_Ramon_24762313157/c1781ec0008bb8aa1a44a2d42c358293.pdf', 'pdf'),
(170, 82, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Farhan_Hidayat_Putra_Ramon_24762313157/df8b794d9c9bd6138bc9905053d0ddce.pdf', 'pdf'),
(171, 83, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Zahid_Aditia_Gusdi_24882033269/0e7ec4ff078a9668696531f6d70cb893.jpg', 'jpg'),
(172, 83, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Zahid_Aditia_Gusdi_24882033269/f4d125af2c0458fcb7ad2c8538803aef.jpg', 'jpg'),
(173, 83, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Zahid_Aditia_Gusdi_24882033269/8b2de61962b5b3aae94f553a366ea40d.jpg', 'jpg'),
(174, 84, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Andika_Karya_Saputra_24882033395/92cf9fcd9f2a9d8d73f065a01df3b4e3.jpg', 'jpg'),
(175, 84, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Andika_Karya_Saputra_24882033395/8c5b6138d8ceb1127f40701e5dd4bd88.png', 'png'),
(176, 84, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Andika_Karya_Saputra_24882033395/a1093bd4b247d81a5d2eb5b99f70a495.jpg', 'jpg'),
(178, 86, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Wulan_Zapriani_24882033392/a2fdb9e0c8422ecc49d5e9504750517c.jpg', 'jpg'),
(179, 86, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Wulan_Zapriani_24882033392/8addc7940a2f219da9ab2afa9ce1e04c.pdf', 'pdf'),
(180, 86, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Wulan_Zapriani_24882033392/7751c0ef831918c6f2cfcefabe66cb9d.pdf', 'pdf'),
(184, 88, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Alviona_Hutrichia_24882033271/d29e70e8d3093025687ce357ad362782.pdf', 'pdf'),
(185, 88, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Alviona_Hutrichia_24882033271/27d0a3b6ba04346f9eb2d61ac3c71043.pdf', 'pdf'),
(186, 88, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Alviona_Hutrichia_24882033271/66d73c9d65e908c475eb10dc03353ec6.pdf', 'pdf'),
(187, 89, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Eddies_Riswanda_24882043256/8499c306361a70563bbd59395d22c0d0.jpg', 'jpg'),
(188, 89, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Eddies_Riswanda_24882043256/84ddac5408427801abdda1a3ed97e582.pdf', 'pdf'),
(189, 90, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Marsila_22762312110/1d91db3a1280bffdc650703351133a50.png', 'png'),
(190, 90, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Marsila_22762312110/0114bdd4831d2910c01a54c57bfac989.pdf', 'pdf'),
(197, 93, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Addina_Silmi_Khairun_nisa_24882043259/f355b54e8faeb7cc4513d2298fa09337.jpg', 'jpg'),
(198, 93, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Addina_Silmi_Khairun_nisa_24882043259/9dae3ca5e006773950bc58aa6c9e10bc.pdf', 'pdf'),
(199, 93, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Addina_Silmi_Khairun_nisa_24882043259/5d53b5f838cd6b77951f38ad463e7dea.jpeg', 'jpeg'),
(200, 94, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/MUHAMMAD_WISNU_FITRIALDI_25862303905/76930b0a0f54368423641493d7d25fa0.jpg', 'jpg'),
(201, 94, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/MUHAMMAD_WISNU_FITRIALDI_25862303905/756d9e9dfe7cf81e8ac15b383e7946cd.jpg', 'jpg'),
(202, 94, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/MUHAMMAD_WISNU_FITRIALDI_25862303905/249d9b81096434a7fae33a6c1f1223ce.jpg', 'jpg'),
(205, 97, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Nurul_Asy_Syifa_25702333736/4decbeab0945a9612314c5d48846d9b7.jpg', 'jpg'),
(206, 97, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Nurul_Asy_Syifa_25702333736/b43a86b9bc14deaae54122410ca2fce0.pdf', 'pdf'),
(207, 97, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Nurul_Asy_Syifa_25702333736/952700b084ca387569bbf0dc8a530cb7.pdf', 'pdf'),
(208, 99, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Abid_Damar_Az-zuhri_24612053013/f445a4e306bd5b26a061fd563bcf8f8c.jpg', 'jpg'),
(209, 99, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Abid_Damar_Az-zuhri_24612053013/9926a11e5b3710695e8e27ff4b2babaf.jpg', 'jpg'),
(210, 99, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Abid_Damar_Az-zuhri_24612053013/1dee6a9cbbc35e5402049e6cb76d4a8a.jpg', 'jpg'),
(211, 102, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Siti_Amelia_25702333882/d693432fde34ccab007ada9fc704152e.jpg', 'jpg'),
(212, 102, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Siti_Amelia_25702333882/81b5e72c9322a141756354892e189ee3.jpg', 'jpg'),
(213, 102, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Siti_Amelia_25702333882/c26833f8a615e5f1bb3b549c5e479940.jpg', 'jpg'),
(214, 103, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Heri_juliawan_saputra_22862302303/5a125a5db8c541138b503b2a3018c00d.jpg', 'jpg'),
(215, 103, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Heri_juliawan_saputra_22862302303/201b1e30a0de4dcf4e0ae9221e7c6e18.PDF', 'pdf'),
(216, 108, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Maya_Duwi_Ayunda_2474230315/35bf08d0ababa42aeb7464ce1d73a6fc.jpg', 'jpg'),
(217, 108, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Maya_Duwi_Ayunda_2474230315/4088ff8160fc9f92adbaceb31a11cff0.jpg', 'jpg'),
(218, 108, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Maya_Duwi_Ayunda_2474230315/b70ee3524febd5af0e70074f84c08753.jpg', 'jpg'),
(219, 111, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Dina_Afriladewi_24742303144/d18ba452a1c831c9967141297cd0afef.jpg', 'jpg'),
(220, 111, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Dina_Afriladewi_24742303144/d276e27766f0b7e699ade802bb16ba4c.jpg', 'jpg'),
(221, 111, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Dina_Afriladewi_24742303144/c7f05161b18f08f56e846daf8d13e317.jpg', 'jpg'),
(224, 113, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Fatimatuzzahra_24862303052/7cb94b3367cd3d861dbf30a551c8fd4e.pdf', 'pdf'),
(225, 113, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Fatimatuzzahra_24862303052/488bf2ba080cb330fe7d8723a4bf5d21.pdf', 'pdf'),
(226, 113, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Fatimatuzzahra_24862303052/35f00d45791a97c7e5aaf1764ad313d8.pdf', 'pdf'),
(238, 118, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Farhan_Mahardika_Putra_24742302951/f2897a085c479de2316e197231128d03.png', 'png'),
(239, 118, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Farhan_Mahardika_Putra_24742302951/5e61ecb26cd98a9a74c5fa9cd8378712.jpg', 'jpg'),
(240, 118, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Farhan_Mahardika_Putra_24742302951/49277afe2860d23e4597b6f28242d4bb.jpg', 'jpg'),
(241, 119, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Nadia_Syafitri_24862303243/92341e411d083c0113ef4e4231a15af4.pdf', 'pdf'),
(242, 119, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Nadia_Syafitri_24862303243/34c621173ff670888562504b7eee62b3.pdf', 'pdf'),
(243, 119, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Nadia_Syafitri_24862303243/8ea683eed9af24dd5fe04a04fbd6f389.pdf', 'pdf'),
(249, 124, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Rizka_Awaliyah_putri_25702333738/bb47a8a37ec28d84575e03a706cf3255.jpg', 'jpg'),
(250, 124, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Rizka_Awaliyah_putri_25702333738/5a97f1b969ad65b80fbed85ace4cfb44.jpg', 'jpg'),
(251, 124, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Rizka_Awaliyah_putri_25702333738/b591e6b401fdfa307dd61f88ec290ac8.jpg', 'jpg'),
(252, 125, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Salsabila_Azhzahra_24862303048/c9c37db1617bdff2dbbc20914df326c0.pdf', 'pdf'),
(253, 125, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Salsabila_Azhzahra_24862303048/5a50923d2b49986a2a65734b9b3feadd.pdf', 'pdf'),
(254, 125, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Salsabila_Azhzahra_24862303048/2ebec6feac0925b148007a5cb0fbea47.pdf', 'pdf'),
(255, 126, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Revalina_Azmely_25882043838/af13a4a32c1258a944fa9b40e6985056.pdf', 'pdf'),
(256, 126, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Revalina_Azmely_25882043838/085d0a648699f4e0f0cf5d9acafea78e.pdf', 'pdf'),
(257, 126, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Revalina_Azmely_25882043838/16cafdc4e3fe0c72765bdefc51ce2785.pdf', 'pdf'),
(258, 127, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Adriandi_Mukti_211740/8960073ef338f788b1a531f82ad96caa.jpg', 'jpg'),
(259, 127, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Adriandi_Mukti_211740/8619fa8a087b1b1a5fecb7a768c5123c.jpg', 'jpg'),
(260, 127, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Adriandi_Mukti_211740/9a290e3cba1c660ffbfb292b7a764331.jpg', 'jpg'),
(261, 128, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Nurdayanti_24882043087/d84bbde43de85008ed9b3cfdf7a1f358.jpeg', 'jpeg'),
(262, 128, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Nurdayanti_24882043087/9fb7d0f86ab1358a8eb8759bcdde3ec0.jpeg', 'jpeg'),
(263, 128, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Nurdayanti_24882043087/95cd36d6cad387e49ec617727c38d1a9.jpeg', 'jpeg'),
(267, 130, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Muhammad_Nur_Hasan_24742302961/73f97ae71e283848f72459164fc4407b.pdf', 'pdf'),
(268, 130, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Muhammad_Nur_Hasan_24742302961/7cd0bfd917d10920c5c85ceceb30986e.pdf', 'pdf'),
(269, 130, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Muhammad_Nur_Hasan_24742302961/6fd9671518a58fd49248be397b494397.pdf', 'pdf'),
(274, 133, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Leoni_Oktapini_22882042209/2073569198403c8a60c22ac00b4eb8fa.jpg', 'jpg'),
(275, 133, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Leoni_Oktapini_22882042209/b18d04094e262a234fa38b80db5828fe.jpg', 'jpg'),
(276, 133, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Leoni_Oktapini_22882042209/774a06b217967cece499464532d15327.jpg', 'jpg'),
(277, 138, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Amirah_22882042462/e64131eda933fb6eda9d99493244be7d.pdf', 'pdf'),
(278, 138, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Amirah_22882042462/20e68222b9b0d1abee3c5e08fcef5c20.pdf', 'pdf'),
(279, 138, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Amirah_22882042462/e844ce53b1b5f4838b6eb760220c4adc.pdf', 'pdf'),
(280, 139, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Alfi_nadiah_rahmi_22882032335/27468307206f5c2de23054fba114fad6.jpg', 'jpg'),
(281, 139, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Alfi_nadiah_rahmi_22882032335/b0a58aa0b12298a94aa7253771b512fb.jpg', 'jpg'),
(282, 139, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Alfi_nadiah_rahmi_22882032335/f6124bd77995537a075c4ffe151d7f41.jpg', 'jpg'),
(283, 140, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Putri_Nuriantika_24622023280/c2e29cdf2b468a275d0be9d7a5ab8c12.jpeg', 'jpeg'),
(284, 140, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Putri_Nuriantika_24622023280/d66aa74f9fe6de37d0e859a0910b6a13.pdf', 'pdf'),
(285, 140, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Putri_Nuriantika_24622023280/4c46f9934b6008cbca56cca808700394.pdf', 'pdf'),
(286, 141, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Zalzabilla_Aprilia_24622023281/c10b558f1bd7f09ed58ab6a787592f0e.jpg', 'jpg'),
(287, 141, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Zalzabilla_Aprilia_24622023281/05006b5b31b3ff88c551de20d862115c.jpg', 'jpg'),
(288, 141, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Zalzabilla_Aprilia_24622023281/3d2eb902032864484a901b438a528bf1.jpg', 'jpg'),
(289, 142, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Fikria_aisyah_25702333499/656bac961d936824b4db4d42b9ed4b3a.jpeg', 'jpeg'),
(290, 142, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Fikria_aisyah_25702333499/7071bf8bd9992c4797109ed8596d87e1.jpeg', 'jpeg'),
(291, 142, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Fikria_aisyah_25702333499/edbe570f3a2e8914e49acb81963818c2.jpeg', 'jpeg'),
(292, 145, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Shella_Afriauni_Widya_211967/be1c6f488879a4980bf313faddd83c29.jpg', 'jpg'),
(293, 145, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Shella_Afriauni_Widya_211967/b314faaf13e5a7aa491d86a14c88fff1.jpg', 'jpg'),
(294, 145, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Shella_Afriauni_Widya_211967/52f16ff715f0165cf0302f48fa5ada98.jpg', 'jpg'),
(295, 145, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Shella_Afriauni_Widya_211967/172e006e47a10b064de9606898a1f417.jpg', 'jpg'),
(299, 148, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Fernando_sastra_sunyoto_25882033671/b99f2de6beaaa5fd465d65a690bc2b74.jpg', 'jpg'),
(300, 148, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Fernando_sastra_sunyoto_25882033671/33ffe86f36dd35b1a6a8c172afbcdefd.jpg', 'jpg'),
(301, 148, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Fernando_sastra_sunyoto_25882033671/c5268a22b2727555995e5c4ac1efaf6a.jpg', 'jpg'),
(303, 150, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Anggun_Salsabila_25882033667/a71fa67d08c2cde92e09ed1f0afca275.jpeg', 'jpeg'),
(304, 150, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Anggun_Salsabila_25882033667/5be441b51ead347f8e4d6c0711b90d9a.jpg', 'jpg'),
(305, 150, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Anggun_Salsabila_25882033667/eb7ecb474222139c4aa6e4af8788dc7f.jpg', 'jpg'),
(306, 152, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Bambang_Supriyadi_24862303046/02f73115186e15924e2be40c8910f983.pdf', 'pdf'),
(307, 152, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Bambang_Supriyadi_24862303046/c30c08ad19d23adf5203899ed1429263.pdf', 'pdf'),
(308, 152, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Bambang_Supriyadi_24862303046/17b4d9d93cefb3f9cc0b197d451d0f83.pdf', 'pdf'),
(309, 153, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_pra_penelitian_skripsi/Thendy_Razaldy_211907/0d4d3d12d5a5cdad4a1b700f9c3a5f53.jpg', 'jpg'),
(310, 153, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_pra_penelitian_skripsi/Thendy_Razaldy_211907/ecdbfd10ef23dd0366310420a26fb30f.jpg', 'jpg'),
(311, 157, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Reysa_Ulfa_Aurum_24622023112/88b4c6b27d54550c3ee76b6a1627ea4c.jpeg', 'jpeg'),
(312, 157, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Reysa_Ulfa_Aurum_24622023112/b155d002c86215047380cf0cd64b6e7b.jpeg', 'jpeg'),
(313, 157, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Reysa_Ulfa_Aurum_24622023112/d0156a57af8e702f005c21c0b574f9bc.jpeg', 'jpeg'),
(314, 158, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Thendy_Razaldy_211907/ad0a7205dc70a15c4b35ceebaf63d9de.jpg', 'jpg'),
(315, 158, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Thendy_Razaldy_211907/d7a99f87f7802d97e446679acefa8c12.jpg', 'jpg'),
(316, 158, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Thendy_Razaldy_211907/8931597bd21b7bc090079fe767d5fecf.jpg', 'jpg'),
(317, 158, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Thendy_Razaldy_211907/ff141ff32f12fe7f2dadb8a541929a49.jpg', 'jpg'),
(318, 159, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Muhammad_izam_hadhriansah_212017/46b8c40257f65e92da945e8b5a5622b3.jpg', 'jpg'),
(319, 159, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Muhammad_izam_hadhriansah_212017/d21efe0007fce6252a1ee865c8ac50f4.jpg', 'jpg'),
(320, 159, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Muhammad_izam_hadhriansah_212017/41624bda36b1899cd1ac76a5837b21de.jpg', 'jpg'),
(321, 159, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Muhammad_izam_hadhriansah_212017/2090222220fe7ccb9d6047ecca14068e.jpg', 'jpg'),
(327, 162, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Fattahul_Rahman_211834/a204e00e9e6c9d02ea18dadb29d28c41.jpg', 'jpg'),
(328, 162, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Fattahul_Rahman_211834/6ab2b70d61c1c0904e5a2069450a1e2a.jpg', 'jpg'),
(329, 162, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Fattahul_Rahman_211834/f896fd05b73d57073d247056ee27ea07.jpg', 'jpg'),
(330, 162, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Fattahul_Rahman_211834/78e78fe0fa8501942a9147f582cba2f4.jpg', 'jpg'),
(331, 164, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Muhammad_Nur_Zikri_212010/5ed244446cab0fa1d84f2a31cb8cdeff.jpeg', 'jpeg'),
(332, 164, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Muhammad_Nur_Zikri_212010/169b0e295c29d760f51442f117be62a3.jpeg', 'jpeg'),
(333, 164, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Muhammad_Nur_Zikri_212010/a1fb9388497af079fb7121224eb01f65.jpeg', 'jpeg'),
(334, 165, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/AIDIL_NASRA_211714/f9be206f2f8d22d05b58bcb0fdda786f.jpg', 'jpg'),
(335, 165, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/AIDIL_NASRA_211714/713d2f2853348de375968b153b2cf28d.jpg', 'jpg'),
(336, 165, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/AIDIL_NASRA_211714/9eae03e38afeb7ace486d078b4ca82bf.jpg', 'jpg'),
(337, 165, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/AIDIL_NASRA_211714/bf2d6c42a71d4abe9e7a3d4d2a2c1c20.jpg', 'jpg'),
(338, 166, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_pra_penelitian_skripsi/Annaafi_Sekar_Yasmin_211874/7bbe038c5a3124c356b4e8b9e484da8a.jpg', 'jpg'),
(339, 166, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_pra_penelitian_skripsi/Annaafi_Sekar_Yasmin_211874/ece307ca5cfa8a081e4deb8b2975f2fd.jpg', 'jpg'),
(340, 168, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Ahmad_dani_22862302319/05c8b1d71a8e1046dfa1a7b90197ce75.pdf', 'pdf'),
(341, 168, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Ahmad_dani_22862302319/d01444847b3ea99a5136b101d1397ba4.pdf', 'pdf'),
(342, 168, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Ahmad_dani_22862302319/f549b4e9a9d44064f468b6b1028a5e96.pdf', 'pdf'),
(348, 171, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Mohammad_Iqbal_Ansori_211984/264455f698653207bf09533af9e5d1d6.jpeg', 'jpeg'),
(349, 171, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Mohammad_Iqbal_Ansori_211984/c463447b5f9c1e65737a3a75161691d5.jpeg', 'jpeg'),
(350, 171, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Mohammad_Iqbal_Ansori_211984/9ccab927cb13af78e5b9ace32b771ad0.jpeg', 'jpeg'),
(351, 171, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Mohammad_Iqbal_Ansori_211984/ed1c78c71210157f167d1f9bad932321.jpeg', 'jpeg'),
(352, 172, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/MUKHLISIN_191325/657ae640cd5f5b5c33e78f78414807dd.jpg', 'jpg'),
(353, 172, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/MUKHLISIN_191325/2133537184171d6bc60c308cfbf3233f.jpg', 'jpg'),
(354, 172, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/MUKHLISIN_191325/7715d5da4ac377f827fcacd478843ecb.jpg', 'jpg'),
(355, 172, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/MUKHLISIN_191325/5abaf8f7c12210ed9ddc626a866f1e7d.jpg', 'jpg'),
(356, 173, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_pra_penelitian_skripsi/Kurnia_Rizki_Amanda_211916/b7ebab5826e9f7569770cc504dfaa0f9.jpg', 'jpg'),
(357, 173, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_pra_penelitian_skripsi/Kurnia_Rizki_Amanda_211916/be4b6867230c346e346a12cc679c7471.jpg', 'jpg'),
(358, 174, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Rois_Amrullah_191206/3acbc3dd667912bc91c7006957becc09.jpg', 'jpg'),
(359, 174, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Rois_Amrullah_191206/1bd9011f7e70922ae7d76781799c584a.jpg', 'jpg'),
(360, 174, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Rois_Amrullah_191206/bebf0a5ec7b1fa04a05d240d2e2dd2e2.jpg', 'jpg'),
(361, 174, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Rois_Amrullah_191206/fcd1bd475908b149de7919d767c567b7.jpg', 'jpg'),
(362, 176, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/M_Fariq_Pandika_22862312301/75b8416af250a3b5c69c8b6d0f4a47a9.jpg', 'jpg'),
(363, 176, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/M_Fariq_Pandika_22862312301/8784d6bcd047d320b8154c49d8f082ef.jpg', 'jpg'),
(364, 176, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/M_Fariq_Pandika_22862312301/adfddc740701f576c5d8148035cd41a5.jpg', 'jpg'),
(365, 177, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Yuda_Peratama_Putra_211799/39d26240f90535dd9f209840ea752e2f.jpg', 'jpg'),
(366, 177, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Yuda_Peratama_Putra_211799/5687d94556362ac69e3c64755b049b37.jpg', 'jpg'),
(367, 177, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Yuda_Peratama_Putra_211799/533b911f7e83786756a4c148fa62f9d8.jpg', 'jpg'),
(368, 177, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Yuda_Peratama_Putra_211799/712a5fb9dc9ab4842efad75bf736cf5d.jpg', 'jpg'),
(371, 180, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Ilham_22622022340/8c84676e8177c20f6ecf0aecdc9a9d49.jpg', 'jpg'),
(372, 180, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Ilham_22622022340/437e3b360d75e953dbc3dd2ed0f1cece.jpg', 'jpg'),
(373, 180, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Ilham_22622022340/e377a541bf43ebf9393036ecefa3e2a6.jpg', 'jpg'),
(376, 182, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Balqis_Syasya_Nabilah_211803/4ec8c16168ec7f5383c91a427ee03c02.jpeg', 'jpeg'),
(377, 182, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Balqis_Syasya_Nabilah_211803/5e01c8bb9d87ae53450555d662079e15.jpeg', 'jpeg'),
(378, 182, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Balqis_Syasya_Nabilah_211803/7921c71ddf8bc22019c308e8a5f64790.jpeg', 'jpeg'),
(379, 183, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Nadia_Ulfa_2362022616/7f8afba20a222011ba8815c4058ac2c8.jpg', 'jpg'),
(380, 183, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Nadia_Ulfa_2362022616/55e1ebe3d399e1addb8c3a132ebcee2c.jpg', 'jpg'),
(381, 183, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Nadia_Ulfa_2362022616/29f751f5859b940fef3fe16640fb35af.jpg', 'jpg'),
(390, 187, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Tasya_Putri_Jatia_Ningsih_211857/d1ced5e8b9a1161990aa6076ab08e493.jpeg', 'jpeg'),
(391, 187, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Tasya_Putri_Jatia_Ningsih_211857/cf02d036703fb87e203c07668559f274.jpeg', 'jpeg'),
(392, 187, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Tasya_Putri_Jatia_Ningsih_211857/c8a7b92ee26cea031bd587166f1f67da.jpeg', 'jpeg'),
(393, 187, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Tasya_Putri_Jatia_Ningsih_211857/766e8e2a2c35c8cb3b117b387ccdce3e.jpeg', 'jpeg'),
(396, 189, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Maharannie_audy_saputri_211837/be44d870408cc407dabb85b55988580c.jpeg', 'jpeg'),
(397, 189, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Maharannie_audy_saputri_211837/25d0fe341b25b151107ae9b6fc3421a3.jpeg', 'jpeg'),
(398, 189, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Maharannie_audy_saputri_211837/370fd43dba502f457261e34a37c4e0a2.jpeg', 'jpeg'),
(399, 189, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Maharannie_audy_saputri_211837/674c0db74ad27598a7b70db510de4d44.jpeg', 'jpeg'),
(400, 190, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Kurnia_Rizki_Amanda_211916/8ceb7862848397e5c0d0a6a53dd81483.jpg', 'jpg'),
(401, 190, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Kurnia_Rizki_Amanda_211916/2854512732ec345ba2eaca5fc80c0093.jpg', 'jpg'),
(402, 190, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Kurnia_Rizki_Amanda_211916/05d75ff40250530911b3adc2a10e48db.jpg', 'jpg'),
(403, 190, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Kurnia_Rizki_Amanda_211916/a4d291d8f0b5251f372a0cdffcabb3a4.jpg', 'jpg'),
(407, 192, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Viona_Putri_Ariyanti_211866/785870a282dee52df5873c84eb09b27e.jpg', 'jpg'),
(408, 192, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Viona_Putri_Ariyanti_211866/80f84c591b7488d072a86b31b3f7568d.jpg', 'jpg'),
(409, 192, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Viona_Putri_Ariyanti_211866/a2d4906b4596507aaf3a2428e956dcb3.jpg', 'jpg'),
(410, 192, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Viona_Putri_Ariyanti_211866/cc18aa7d9d25a7d1e465eecbb6b8cf6b.jpg', 'jpg'),
(411, 193, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Fuji_Fauziyah_Alisyah_Putri_22862312291/d2a894367c5a3f7924dadddb09091e37.jpg', 'jpg'),
(412, 193, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Fuji_Fauziyah_Alisyah_Putri_22862312291/d1d8e6bfabfc8934ed3871221211bd12.pdf', 'pdf'),
(413, 193, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Fuji_Fauziyah_Alisyah_Putri_22862312291/87e52e5ae21b9a342bd10608c81e9c4d.pdf', 'pdf'),
(414, 194, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Nopa_Rahmadani_22862312295/52c34e654224ce97100dbd9a765686e1.jpeg', 'jpeg'),
(415, 194, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Nopa_Rahmadani_22862312295/d7bf82fa4faa03de8cb0daf1890234b8.pdf', 'pdf'),
(416, 194, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Nopa_Rahmadani_22862312295/98e20529915540ae1e751be232af8989.pdf', 'pdf'),
(417, 195, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Brian_Alfiano_22862312154/82886738a0ebc39f9b29b039cca46046.pdf', 'pdf'),
(418, 195, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Brian_Alfiano_22862312154/7a820be8f1ffa4cd8bf41862aaebb82e.pdf', 'pdf'),
(419, 195, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Brian_Alfiano_22862312154/c9fda293a7a19d96729939106e568187.pdf', 'pdf'),
(425, 198, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Kurnia_Rizki_Amanda_211916/ae18a0c746b5744b73618d7c96f07156.jpg', 'jpg'),
(426, 198, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Kurnia_Rizki_Amanda_211916/1a1e57e3f1edc0503746d24c727a5567.jpg', 'jpg'),
(427, 198, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Kurnia_Rizki_Amanda_211916/52cfa7e2c24cef8b8e8e71c341169e85.jpg', 'jpg'),
(428, 198, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Kurnia_Rizki_Amanda_211916/619d479a8c0a2f6adbeebbc3879d7782.jpg', 'jpg'),
(429, 199, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Indri_Sopiyani_22762312376/5832fb2c55ada1958081a2c82ef671a3.jpg', 'jpg'),
(430, 199, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Indri_Sopiyani_22762312376/e1957e243ff47cbfddcc7c4810dfa407.jpg', 'jpg'),
(431, 199, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Indri_Sopiyani_22762312376/d7d99b3a9591da1be984e2affd998039.jpg', 'jpg'),
(432, 200, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Nurul_Aini_Asmi_211995/c18404b513178e86ac5302e90819cb75.pdf', 'pdf'),
(433, 200, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Nurul_Aini_Asmi_211995/db8d956c13c9f25f7aa1f9fc823a8bcb.pdf', 'pdf'),
(434, 200, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Nurul_Aini_Asmi_211995/b335256396a20c056b8a0f757b3963f4.pdf', 'pdf'),
(435, 200, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Nurul_Aini_Asmi_211995/ed0a29bec4f285f134643b561da80529.pdf', 'pdf'),
(436, 201, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Suci_Sauma_Ramadhani_22862302186/4f1714276690a2f6dd9aad9997de7e2e.jpg', 'jpg'),
(437, 201, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Suci_Sauma_Ramadhani_22862302186/1a731a328bf58148d86f6ddf4f256f48.pdf', 'pdf'),
(438, 201, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Suci_Sauma_Ramadhani_22862302186/fc2fcd0a8969e13617a1db3b7e3d2f76.pdf', 'pdf'),
(445, 205, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Syahfiqi_defa_ramadhany_211751/30db8bdbd23c9d0c5929dceced34d4b6.jpg', 'jpg'),
(446, 205, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Syahfiqi_defa_ramadhany_211751/3c08a8432c1ede11ae0ad2930c72d7bf.jpg', 'jpg'),
(447, 205, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Syahfiqi_defa_ramadhany_211751/b658b56e73eacdf7ed3c8cbe1c1d796c.jpg', 'jpg'),
(448, 205, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Syahfiqi_defa_ramadhany_211751/1945f547014d2787ba429e53fdd7224d.jpg', 'jpg'),
(449, 206, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Syarifah_Nuraini_25882043923/57991b4fe45917f700305117b09b9354.pdf', 'pdf'),
(450, 206, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Syarifah_Nuraini_25882043923/656a106242464ae52c28cce304057bf0.pdf', 'pdf'),
(451, 206, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Syarifah_Nuraini_25882043923/69eb2154b11d01eff1fb41eb8a732af3.pdf', 'pdf'),
(452, 207, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Melia_Rosita_Dewi_25882043834/f7570ba503d8e06e0a169f53e3789f75.jpg', 'jpg'),
(453, 207, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Melia_Rosita_Dewi_25882043834/8786e8b24f2c34a7a337e58f84d6a845.jpg', 'jpg'),
(454, 207, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Melia_Rosita_Dewi_25882043834/8d430acfec4d28f1eb8f37df91a1754b.jpg', 'jpg'),
(455, 208, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Melia_Rosita_Dewi_25882043834/d934d5775c44efa19ab1c011aa0c90ce.jpg', 'jpg'),
(456, 208, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Melia_Rosita_Dewi_25882043834/5faf8a40cac247e83dce8097e3e64c32.jpg', 'jpg'),
(457, 208, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Melia_Rosita_Dewi_25882043834/fd41c061d1793e96f2f46995235c41af.jpg', 'jpg'),
(458, 209, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Melia_Rosita_Dewi_25882043834/3c54b889aadda38ef24d473f5277f6fa.jpg', 'jpg'),
(459, 209, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Melia_Rosita_Dewi_25882043834/1fb761144b4e1e1d0373bd32da693d27.jpg', 'jpg'),
(460, 209, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Melia_Rosita_Dewi_25882043834/7a1e43dc62628bc65827bff8d99d981a.jpg', 'jpg'),
(463, 211, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Sakinah_212030/d8f06ff93e6fb3d36e1a60a20bf48eb2.jpeg', 'jpeg'),
(464, 211, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Sakinah_212030/cd969ad3d022f9b3aa9490005e1ffd90.jpeg', 'jpeg'),
(465, 211, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Sakinah_212030/3596d87d54463ececb1fc7e0da2416b7.jpeg', 'jpeg'),
(466, 211, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Sakinah_212030/8b81be14aae557bdfa0bb5a9eeb1415d.jpeg', 'jpeg'),
(467, 212, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Fatma_Herniati_211991/fb2ba58b41b98fd5f7d4a682421ffaa6.pdf', 'pdf'),
(468, 212, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Fatma_Herniati_211991/91a0c7d57cb7c71eb3cb99f949737ae4.pdf', 'pdf'),
(469, 212, 'SK Penetapan Pembimbing Skripsi', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Fatma_Herniati_211991/d985760bad29212a62dbed5ca4841837.jpg', 'jpg'),
(470, 212, 'Bukti Surat Pendukung', 'uploads/berkas/surat_permohonan_izin_penelitian_skripsi/Fatma_Herniati_211991/cd9d0e1618f32b803a50145b663926b6.pdf', 'pdf'),
(472, 214, 'Bukti Pembayaran UKT', 'uploads/berkas/surat_aktif_kuliah/Dinna_Aulia_Ulmaula_24882043368/6d3931e5128fce039a3eff431837649d.jpg', 'jpg'),
(473, 214, 'Kartu Rencana Studi (KRS)', 'uploads/berkas/surat_aktif_kuliah/Dinna_Aulia_Ulmaula_24882043368/7b38c7e5278852c2648b00550f4abc83.jpg', 'jpg'),
(474, 214, 'Bukti Surat Pendukung', 'uploads/berkas/surat_aktif_kuliah/Dinna_Aulia_Ulmaula_24882043368/18f4c7b43364e73fd3cd09c8edb59516.jpg', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id` int(11) NOT NULL,
  `kode_resi` varchar(255) NOT NULL,
  `jenis_surat_id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `nama_mhs` varchar(200) NOT NULL,
  `nim_mhs` varchar(50) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jalan` varchar(255) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `semester` int(11) NOT NULL,
  `keperluan_surat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tahun_akademik_awal` varchar(50) NOT NULL,
  `tahun_akademik_akhir` varchar(50) NOT NULL,
  `status` enum('menunggu verifikasi','diproses','menunggu tanda tangan','selesai','ditolak') NOT NULL,
  `file_surat_pdf` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `keterangan_admin` text NOT NULL,
  `nomor_surat` varchar(128) NOT NULL,
  `tampilkan_ttd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengajuan_surat`
--

INSERT INTO `pengajuan_surat` (`id`, `kode_resi`, `jenis_surat_id`, `prodi_id`, `nama_mhs`, `nim_mhs`, `tempat_lahir`, `tanggal_lahir`, `jalan`, `kelurahan`, `kecamatan`, `kota`, `semester`, `keperluan_surat`, `no_hp`, `email`, `tahun_akademik_awal`, `tahun_akademik_akhir`, `status`, `file_surat_pdf`, `created_at`, `keterangan_admin`, `nomor_surat`, `tampilkan_ttd`) VALUES
(76, 'AK-20250910045126', 5, 9, 'Siti Fatimah', '25742343701', 'Tanjungpinang', '2007-04-06', 'Perum. Griya Hangtuah Permai', 'Pinang Kencana', 'Tanjungpinang Timur', 'Tanjungpinang', 1, 'melengkapi pemberkasan taspen', '082283738701', 'stfatim64@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Siti_Fatimah_surat_aktif_kuliah_25742343701/surat_final_76_1757485404.pdf', '2025-09-10 04:51:26', '', 'B- 3171/Sti.20/1.1/HM.00/09/2025', 1),
(78, 'AK-20250910121018', 5, 3, 'Muhammad Rakha', '25612053889', 'Tanjugpinang', '2003-05-29', 'JL.KIJANG LAMA', 'Melayu Kota Piring', 'Tanjungpinang Timur', 'Kota Tanjung Pinang', 1, 'bantuan dari pos indonesia', '082285617439', 'muhammadraka2334@gmail.com', '2025', '2029', 'selesai', 'uploads/berkas/ttdcap/Muhammad_Rakha_surat_aktif_kuliah_25612053889/surat_final_78_1757551907.pdf', '2025-09-10 12:10:18', '', 'B-3179/Sti.20/1.1/HM.00/9/2025', 1),
(82, 'AK-20250912050045', 5, 11, 'Farhan Hidayat Putra Ramon', '24762313157', 'Tanjung Uban', '2004-02-27', 'Lobammas Asri Block i no 6', 'Teluk Sasah', 'Seri Kuala Lobam', 'Bintan', 3, 'Melengkapi berkas Beasiswa', '081364467592', 'putrafarhan483@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Farhan_Hidayat_Putra_Ramon_surat_aktif_kuliah_24762313157/Farhan_Hidayat_Putra_Ramon_surat_aktif_kuliah_24762313157.pdf', '2025-09-12 05:00:45', '', 'B-3200/Sti.20/1.1/HM.00/9/2025', 1),
(83, 'AK-20250912123701', 5, 2, 'Zahid Aditia Gusdi', '24882033269', 'Batam', '2005-07-24', 'perum griya mawaddah 8 blok F 14', 'Toapaya Selatan', 'Toapaya', 'Bintan', 3, 'Untuk melengkapi berkas beasiswa BI', '082172160235', 'gusdiaditya24@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Zahid_Aditia_Gusdi_surat_aktif_kuliah_24882033269/Zahid_Aditia_Gusdi_surat_aktif_kuliah_24882033269.pdf', '2025-09-12 12:37:01', '', 'B- 3201 /Sti.20/1.1/HM.00/9/2025', 1),
(84, 'AK-20250912125028', 5, 2, 'Andika Karya Saputra', '24882033395', 'Garut', '2004-06-13', 'KP.Bukit Asri No.24', 'Batu IX', 'Tanjung Pinang Timur', 'Tanjung Pinang Timur', 3, 'Untuk melengkapi berkas beasiswa BI', '0812-8029-1506', 'andikasaputra130604@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Andika_Karya_Saputra_surat_aktif_kuliah_24882033395/Andika_Karya_Saputra_surat_aktif_kuliah_24882033395.pdf', '2025-09-12 12:50:28', '', 'B- 3202/Sti.20/1.1/HM.00/9/2025', 1),
(86, 'AK-20250913074039', 5, 2, 'Wulan Zapriani', '24882033392', 'Teluk sasah', '2005-04-02', 'Lobam mas asri blok H.08', 'Teluk sasah', 'Sri Kuala lobam', 'Bintan', 3, 'Melengkapi berkas persyaratan beasiswa genBI ', '083136580420', 'wzapriani@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Wulan_Zapriani_surat_aktif_kuliah_24882033392/Wulan_Zapriani_surat_aktif_kuliah_24882033392.pdf', '2025-09-13 07:40:39', '', 'B- 3203/Sti.20/1.1/HM.00/9/2025', 1),
(88, 'AK-20250913083835', 5, 2, 'Alviona Hutrichia', '24882033271', 'Tanjungpinang', '2005-08-17', 'Jl. Satria Kampung Karang Rejo', 'Pinang Kencana', 'Tanjungpinang Timur', 'Tanjungpinang', 3, 'Beasiswa genBi', '082142229480', 'hutrichiaalviona@gma.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Alviona_Hutrichia_surat_aktif_kuliah_24882033271/Alviona_Hutrichia_surat_aktif_kuliah_24882033271.pdf', '2025-09-13 08:38:35', '', 'B- 3204/Sti.20/1.1/HM.00/9/2025', 1),
(89, 'AK-20250915030916', 5, 7, 'Eddies Riswanda', '24882043256', 'TEREMPA', '2004-11-17', 'Jl.tanjung tengah', 'Tarempa', 'Siantan', 'Anambas', 3, 'Melengkapi beasiswa', '085355288560', 'eddiesrizwanda17@gmail.com', '2024', '2025', 'ditolak', '', '2025-09-15 03:09:16', '', '', 0),
(90, 'AK-20250915032633', 5, 11, 'Marsila', '22762312110', 'Sokoi Timur', '2004-01-16', 'Jl. Kebun Pinang', 'Tanjungbatu Kota', 'Kundur', 'Karimun', 7, 'Melengkapi berkas beasiswa Bank Indonesia', '083184780672', 'marsilasila99@gmail.com', '2025', '2026', 'ditolak', '', '2025-09-15 03:26:33', '', '', 0),
(93, 'AK-20250915053339', 5, 7, 'Addina Silmi Khairun nisa', '24882043259', 'Tanjung Pinang', '2004-02-19', 'jln.Pendidikan', 'Numbing', 'Bintan Pesisir', 'Bintan', 3, 'Berkas Beasisiwa', '081574765440', 'addinaskn@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Addina_Silmi_Khairun_nisa_surat_aktif_kuliah_24882043259/Addina_Silmi_Khairun_nisa_surat_aktif_kuliah_24882043259.pdf', '2025-09-15 05:33:39', '', 'B- 3205/Sti.20/1.1/HM.00/9/2025', 1),
(94, 'AK-20250915060913', 5, 5, 'MUHAMMAD WISNU FITRIALDI', '25862303905', 'BATAM,KOTA BATAM', '2003-09-19', 'Jl. Parit Seratus', 'Sungai Sebesi', 'Kundur', 'Karimun', 8, 'Surat ini akan saya pergunakan untuk keperluan sebagai pelajaran tunjangan ASN dan BPJS kesehatan', '0895622863108', 'wwmhdwisnuf@gmail.com', '2025', '2028', 'selesai', 'uploads/berkas/ttdcap/MUHAMMAD_WISNU_FITRIALDI_surat_aktif_kuliah_25862303905/MUHAMMAD_WISNU_FITRIALDI_surat_aktif_kuliah_25862303905.pdf', '2025-09-15 06:09:13', '', 'B- 3207/Sti.20/1.1/HM.00/9/2025', 1),
(97, 'AK-20250915083032', 5, 6, 'Nurul Asy Syifa', '25702333736', 'Tanjungpinang', '2007-06-07', 'Jl. Bumi indah', 'Toapaya Asri', 'Toapaya', 'Bintan', 1, 'Memperbarui kartu keluarga', '083865369541', 'lifatialif@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Nurul_Asy_Syifa_surat_aktif_kuliah_25702333736/Nurul_Asy_Syifa_surat_aktif_kuliah_25702333736.pdf', '2025-09-15 08:30:32', '', 'B- 3211/Sti.20/1.1/HM.00/9/2025', 1),
(99, 'AK-20250915084753', 5, 3, 'Abid Damar Az-zuhri', '24612053013', 'Tanjungpinang', '2006-03-12', 'Jl. Garuda', 'Toapaya Asri', 'Toapaya', 'Bintan', 3, 'salah satu syarat untuk mendaftar beasiswa dan keperluan dinas orangtua', '083809534278', 'abidazzuhri@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Abid_Damar_Az-zuhri_surat_aktif_kuliah_24612053013/Abid_Damar_Az-zuhri_surat_aktif_kuliah_24612053013.pdf', '2025-09-15 08:47:53', '', 'B- 3212/Sti.20/1.1/HM.00/9/2025', 1),
(102, 'AK-20250915090815', 5, 6, 'Siti Amelia', '25702333882', 'Kijang', '2007-05-02', 'JL.NUSANTARA.KM 21', 'Gunung lengkuas', 'Bintan Timur', 'Kab. Bintan', 1, 'Untuk membuat SKTM ', '082173532633', 'sitiamelia1520@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Siti_Amelia_surat_aktif_kuliah_25702333882/Siti_Amelia_surat_aktif_kuliah_25702333882.pdf', '2025-09-15 09:08:15', '', 'B- 3213/Sti.20/1.1/HM.00/9/2025', 1),
(103, 'AK-20250915131046', 5, 1, 'Heri juliawan saputra', '22862302303', 'Sungkai', '2004-07-27', 'Ganet', 'Pinang kencana', 'Tanjungpinang timur', 'Kota Tanjungpinang', 7, 'Verifikasi status kemahasiswaan', '081237398529', 'herijuliawansaputra27@gmail.com', '2025', '2026', 'ditolak', '', '2025-09-15 13:10:46', '', '', 0),
(108, 'AK-20250916070406', 5, 10, 'Maya Duwi Ayunda', '2474230315', 'Kundur Barat Karimun', '2004-08-17', 'Dusun IV Dabit Sidomulyo', 'Sawang selatan', 'Kundur Barat', 'Karimun', 3, 'Melengkapi berkas beasiswa Bank Indonesia ', '085830381493', 'Mayaduiayunda@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Maya_Duwi_Ayunda_surat_aktif_kuliah_2474230315/Maya_Duwi_Ayunda_surat_aktif_kuliah_2474230315.pdf', '2025-09-16 07:04:06', '', 'B- 3221/Sti.20/1.1/HM.00/9/2025', 1),
(111, 'AK-20250916071346', 5, 10, 'Dina Afriladewi', '24742303144', 'Tanjung Balai Karimun', '2006-04-20', 'Gg. Pucang, Pinang Kencana 3&amp;4, Tanjung Pinang', 'Pinang Kencana', 'Tanjung Pinang Timur', 'Tanjungpinang', 3, 'Melengkapi berkas beasiswa ', '081374467072', 'dekda0120@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Dina_Afriladewi_surat_aktif_kuliah_24742303144/Dina_Afriladewi_surat_aktif_kuliah_24742303144.pdf', '2025-09-16 07:13:46', '', 'B- 3222/Sti.20/1.1/HM.00/9/2025', 1),
(113, 'AK-20250916162520', 5, 1, 'Fatimatuzzahra', '24862303052', 'Tanjungpinang', '2006-10-15', 'Jln. Cendrawasih Kp.Wonoyoso ll Gg.Merak No.3', 'Batu lX', 'Tanjungpinang Timur', 'Tanjungpinang', 3, 'Untuk melengkapi berkas beasiswa', '081214180412', 'tuzzahrafatima183@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Fatimatuzzahra_surat_aktif_kuliah_24862303052/Fatimatuzzahra_surat_aktif_kuliah_24862303052.pdf', '2025-09-16 16:25:20', '', 'B- 3223/Sti.20/1.1/HM.00/9/2025', 1),
(118, 'AK-20250917033406', 5, 10, 'Farhan Mahardika Putra', '24742302951', 'Terempa', '2006-08-17', 'Jl. Tongkol RT 003 RW 005', 'Tarempa', 'Siantan', 'Kabupaten Kepulauan Anambas', 3, 'Melengkapi berkas beasiswa Bank Indonesia', '082260423854', 'dikapaan17@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Farhan_Mahardika_Putra_surat_aktif_kuliah_24742302951/Farhan_Mahardika_Putra_surat_aktif_kuliah_24742302951.pdf', '2025-09-17 03:34:06', '', 'B- 3224/Sti.20/1.1/HM.00/9/2025', 1),
(119, 'AK-20250917041439', 5, 1, 'Nadia Syafitri', '24862303243', 'Pekanbaru', '2005-11-03', 'Perum. Kijang Kencana 4 Blok H No 124', 'Pinang Kencana', 'Tanjung Pinang Timur', 'Tanjung Pinang', 3, 'Pengajuan Syarat Beasiswa Gen.BI', '082170876989', 'nadiasyafitri311@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Nadia_Syafitri_surat_aktif_kuliah_24862303243/Nadia_Syafitri_surat_aktif_kuliah_24862303243.pdf', '2025-09-17 04:14:39', '', 'B- 3225/Sti.20/1.1/HM.00/9/2025', 1),
(124, 'AK-20250917090045', 5, 6, 'Rizka Awaliyah putri', '25702333738', 'Batubi jaya', '2006-03-29', 'DESA AIR PAYANG', 'AIR PAYANG', 'Kec. Pulau laut', 'Ranai', 1, 'Kartu tanda aktif mahasiswa', '082288644704', 'riskariska1904@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Rizka_Awaliyah_putri_surat_aktif_kuliah_25702333738/Rizka_Awaliyah_putri_surat_aktif_kuliah_25702333738.pdf', '2025-09-17 09:00:45', '', 'B- 3230/Sti.20/1.1/HM.00/9/2025', 1),
(125, 'AK-20250918061415', 5, 1, 'Salsabila Azhzahra', '24862303048', 'Tanjungpinang', '2006-09-20', 'Jl. Kota piring', 'Melayu Kota Piring', 'Tanjungpinang Timur', 'Tanjungpinang', 3, 'Melengkapi berkas beasiswa ', '085767472415', 'salsabilaazhz20@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Salsabila_Azhzahra_surat_aktif_kuliah_24862303048/Salsabila_Azhzahra_surat_aktif_kuliah_24862303048.pdf', '2025-09-18 06:14:15', '', 'B- 3232/Sti.20/1.1/HM.00/9/2025', 1),
(126, 'AK-20250918072951', 5, 7, 'Revalina Azmely', '25882043838', 'Tanjungpinang', '2006-08-03', 'Perumahan bumi intan sari jalan Gatot Subroto km.6 blok B no.15', 'Kampung bulang', 'Tanjungpinang timur', 'Kota Tanjungpinang', 1, 'Surat mahasiswa aktif ', '083897605325', 'razmely@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Revalina_Azmely_surat_aktif_kuliah_25882043838/Revalina_Azmely_surat_aktif_kuliah_25882043838.pdf', '2025-09-18 07:29:51', '', 'B- 3233/Sti.20/1.1/HM.00/9/2025', 1),
(127, 'AK-20250918105543', 5, 11, 'Adriandi Mukti', '211740', 'Tanjungpinang', '2002-12-08', 'Gg. Harapan 1, RT.001/RW.006', 'Kp. Bugis', 'Tanjungpinang Kota', 'Tanjungpinang', 9, 'Pengurusan BPJS Kesehatan', '082122243241', 'adri.mukti98@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Adriandi_Mukti_surat_aktif_kuliah_211740/Adriandi_Mukti_surat_aktif_kuliah_211740.pdf', '2025-09-18 10:55:43', '', 'B- 3234/Sti.20/1.1/HM.00/9/2025', 1),
(128, 'AK-20250918114959', 5, 7, 'Nurdayanti', '24882043087', 'Tanjungpinang', '2004-08-07', 'Jl.Rawasari', 'Kampung bulang', 'Tanjungpinang timur', 'Tanjungpinang', 3, 'Melengkapi berkas beasiswa ', '083185755431', 'nurdayanti222@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Nurdayanti_surat_aktif_kuliah_24882043087/Nurdayanti_surat_aktif_kuliah_24882043087.pdf', '2025-09-18 11:49:59', '', 'B- 3235/Sti.20/1.1/HM.00/9/2025', 1),
(130, 'AK-20250919065436', 5, 10, 'Muhammad Nur Hasan', '24742302961', 'Batam', '2006-02-23', 'Jl. Hang Lekir, Gg Mawar 1, Blok G No.3', 'Batu 9', 'Tanjung Pinang Timur', 'Tanjung Pinang', 3, 'Melengkapi berkas Beasiswa', '081267510154', 'muhammadnh123@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Muhammad_Nur_Hasan_surat_aktif_kuliah_24742302961/Muhammad_Nur_Hasan_surat_aktif_kuliah_24742302961.pdf', '2025-09-19 06:54:36', '', 'B- 3243/Sti.20/1.1/HM.00/9/2025', 1),
(133, 'AK-20250919074158', 5, 7, 'Leoni Oktapini', '22882042209', 'Linau', '2003-11-16', 'Dusun I Linau', 'Linau', 'Lingga Utara', 'Lingga', 7, 'beasiswa BI', '081534892801', 'leoreserveren@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Leoni_Oktapini_surat_aktif_kuliah_22882042209/Leoni_Oktapini_surat_aktif_kuliah_22882042209.pdf', '2025-09-19 07:41:58', '', 'B- 3244/Sti.20/1.1/HM.00/9/2025', 1),
(138, 'AK-20250919080234', 5, 7, 'Amirah', '22882042462', 'Tanjungpinang', '2004-02-25', 'Perm bumi indah blok f no 14', 'air raja', 'Tanjungpinang Timur', 'Tanjungpinang', 7, 'Melengkapi berkas beasiswa Bank Indonesia ', '083152482517', 'oyenyen256@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Amirah_surat_aktif_kuliah_22882042462/Amirah_surat_aktif_kuliah_22882042462.pdf', '2025-09-19 08:02:34', '', 'B- 3245/Sti.20/1.1/HM.00/9/2025', 1),
(139, 'AK-20250919080838', 5, 2, 'Alfi nadiah rahmi', '22882032335', 'Padang', '2025-09-27', 'Perumahan air raja km 15', 'Pinang kencana', 'Tanjung pinang timur', 'Tanjung pinang', 7, 'Tunjangan PNS orangtua', '082169252502', 'alf.nadiaa27@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Alfi_nadiah_rahmi_surat_aktif_kuliah_22882032335/Alfi_nadiah_rahmi_surat_aktif_kuliah_22882032335.pdf', '2025-09-19 08:08:38', '', 'B- 3246/Sti.20/1.1/HM.00/9/2025', 1),
(140, 'AK-20250919082655', 5, 8, 'Putri Nuriantika', '24622023280', 'Bintan', '2003-02-09', 'Jl.Lintas Barat,Bintan Bekapur', 'Bintan Buyu', 'Teluk Bintan', 'Bintan', 3, 'Melengkapi berkas beasiswa Bank Indonesia', '085834047290', 'nuriantika92@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Putri_Nuriantika_surat_aktif_kuliah_24622023280/Putri_Nuriantika_surat_aktif_kuliah_24622023280.pdf', '2025-09-19 08:26:55', '', 'B- 3247/Sti.20/1.1/HM.00/9/2025', 1),
(141, 'AK-20250919082833', 5, 8, 'Zalzabilla Aprilia', '24622023281', 'Sedanau', '2006-04-28', 'Jln. Nusantara 1', 'Batu IX', 'tanjung pinang timur', 'tanjung pinang', 3, 'Melengkapi berkas Beasiswa  bank indonesia', '087720944348', 'erwansyaherwan011@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Zalzabilla_Aprilia_surat_aktif_kuliah_24622023281/Zalzabilla_Aprilia_surat_aktif_kuliah_24622023281.pdf', '2025-09-19 08:28:33', '', 'B- 3248/Sti.20/1.1/HM.00/9/2025', 1),
(142, 'AK-20250919093347', 5, 6, 'Fikria aisyah', '25702333499', 'Batam', '2024-08-01', 'jl hangkesturi', 'batu besar', 'Nongsa', 'Batam', 1, 'melengkapi berkas beasiswa', '081993497994', 'fikriahaisyah18@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Fikria_aisyah_surat_aktif_kuliah_25702333499/Fikria_aisyah_surat_aktif_kuliah_25702333499.pdf', '2025-09-19 09:33:47', '', 'B-3251/Sti.20/1.1/HM.00/9/2025', 1),
(145, 'IPS-20250920142631', 9, 1, 'Shella Afriauni Widya', '211967', 'Tanjungpinang', '2003-06-10', 'Perum. Griya Hang Tuah Permai Blok H2 No 1', 'Pinang Kencana', 'Tanjungpinang Timur', 'Kota Tanjungpinang', 9, '', '087762791518', '211967@student.stainkepri.ac.id', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Shella_Afriauni_Widya_surat_permohonan_izin_penelitian_skripsi_211967/surat_final_145_1758515798.pdf', '2025-09-20 14:26:31', '', '3252', 1),
(148, 'AK-20250921041930', 5, 2, 'Fernando sastra sunyoto', '25882033671', 'landasan ulin', '2006-10-27', 'JL. NURI INDAH KM. 13 TANJUNGPINANG', 'PINANG KENCANA', 'TANJUNGPINANG TIMUR', 'TANJUNGPINANG', 1, 'melengkapi berkas beasiswa', '081434014594', 'nandsteam48@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Fernando_sastra_sunyoto_surat_aktif_kuliah_25882033671/Fernando_sastra_sunyoto_surat_aktif_kuliah_25882033671.pdf', '2025-09-21 04:19:30', '', 'B-3250/Sti.20/1.1/HM.00/9/2025', 1),
(150, 'AK-20250921094653', 5, 2, 'Anggun Salsabila', '25882033667', 'Kijang', '2007-05-29', 'Kp. Kolam Jl. Sei enam', 'Kijang Kota', 'Bintan Timur', 'Bintan', 1, 'Melengkapi berkas beasiswa KIP', '083151760181', 'anggunsalsabila0529@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Anggun_Salsabila_surat_aktif_kuliah_25882033667/Anggun_Salsabila_surat_aktif_kuliah_25882033667.pdf', '2025-09-21 09:46:53', '', 'B-3249/Sti.20/1.1/HM.00/9/2025', 1),
(152, 'AK-20250922070304', 5, 1, 'Bambang Supriyadi', '24862303046', 'Kijang', '2005-05-06', 'KP. BARU KEKE  RT/RW  002/011  Kel/Desa  KIJANG KOTA  Kecamatan BINTAN TIMUR', 'Kijang Kota', 'Bintan Timur', 'Bintan', 3, 'Melengkapi Berkas Beasiswa', '089652468437', 'bambangsupriyadi1221@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Bambang_Supriyadi_surat_aktif_kuliah_24862303046/surat_final_152_1758598137.pdf', '2025-09-22 07:03:04', '', '3277', 1),
(153, 'PPN-20250922090416', 8, 9, 'Thendy Razaldy', '211907', 'Sungai Besar', '2002-04-16', 'Jl. Ganet', 'Pinang Kencana', 'Tanjungpinang Timur', 'Tanjungpinang', 9, '', '0823-8687-9947', 'yokbisayokberdoadulu@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Thendy_Razaldy_surat_permohonan_pra_penelitian_skripsi_211907/surat_final_153_1758588906.pdf', '2025-09-22 09:04:16', '', '3257', 1),
(157, 'AK-20250922154630', 5, 8, 'Reysa Ulfa Aurum', '24622023112', 'Tarempa', '2006-09-22', 'Jln pemuda no 41', 'Tarempa', 'Siantan', 'Kepulauan Anambas', 3, 'Melengkapai berkas beasiswa', '082171607970', 'reysaulfaa@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Reysa_Ulfa_Aurum_surat_aktif_kuliah_24622023112/surat_final_157_1758595015.pdf', '2025-09-22 15:46:30', '', '3276', 1),
(158, 'IPS-20250923062736', 9, 9, 'Thendy Razaldy', '211907', 'Sungai Besar kabupaten lingga', '2002-04-16', 'Jl. Ganet', 'Pinang Kencana', 'Tanjungpinang Timur', 'Tanjungpinang', 9, '', '0823-8687-9947', 'yokbisayokberdoadulu@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Thendy_Razaldy_surat_permohonan_izin_penelitian_skripsi_211907/surat_final_158_1758673129.pdf', '2025-09-23 06:27:36', '', 'B-3282/Sti.20/1.1/HM.00/09/2025', 1),
(159, 'IPS-20250923064730', 9, 3, 'Muhammad izam hadhriansah', '212017', 'Batam', '2002-09-08', 'Jl Ir Sutami GG akasia 2 no 15', 'Bukit Bestari', 'Tanjung Pinang timur', 'Kota Tanjungpinang', 9, '', '085376280877', 'izamm283@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Muhammad_izam_hadhriansah_surat_permohonan_izin_penelitian_skripsi_212017/surat_final_159_1758673232.pdf', '2025-09-23 06:47:30', '', 'B-3283/Sti.20/1.1/HM.00/09/2025', 1),
(162, 'IPS-20250924025537', 9, 11, 'Fattahul Rahman', '211834', 'Tanjungpinang', '2001-08-16', 'Jl. Sultan Sulaiman', 'Kampung Bulang', 'Tanjungpinang Timur', 'Kota Tanjungpinang', 9, '', '081374912078', 'fattahulrahman16@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Fattahul_Rahman_surat_permohonan_izin_penelitian_skripsi_211834/surat_final_162_1758685554.pdf', '2025-09-24 02:55:37', '', 'B-3284/Sti.20/1.1/HM.00/09/2025', 1),
(164, 'AK-20250924033128', 5, 10, 'Muhammad Nur Zikri', '212010', 'TanjungPinang', '2002-10-08', 'JL H. Ahmad Bukit Balau', 'Berakit', 'Teluk Sebong', 'Bintan', 9, 'Untuk slip gaji orang tua (ibu)', '082228569245', 'muhammadnurzikri4@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Muhammad_Nur_Zikri_surat_aktif_kuliah_212010/surat_final_164_1758764093.pdf', '2025-09-24 10:31:28', '', 'B-3297/Sti.20/1.1/HM.00/09/2025', 1),
(165, 'IPS-20250924054404', 9, 9, 'AIDIL NASRA', '211714', 'Parit, Karimun', '2002-08-13', 'Jl jatayu', 'Batu IX', 'Tanjungpinang Timur', 'Kota Tanjungpinang', 9, '', '085376272418', 'aidilnasra@gmaigmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/AIDIL_NASRA_surat_permohonan_izin_penelitian_skripsi_211714/surat_final_165_1758695687.pdf', '2025-09-24 05:44:04', '', 'B-3285/Sti.20/1.1/HM.00/09/2025', 1),
(166, 'PPN-20250924081600', 8, 1, 'Annaafi Sekar Yasmin', '211874', 'Batam', '2002-07-20', 'Perum. Masyeba Indah Blok D No.7', 'Bukit Tempayan', 'Batuaji', 'Kota Batam', 8, '', '085271182947', 'xekaryasmin40@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Annaafi_Sekar_Yasmin_surat_permohonan_pra_penelitian_skripsi_211874/surat_final_166_1758703649.pdf', '2025-09-24 08:16:00', '', 'B-3286/Sti.20/1.1/HM.00/09/2025', 1),
(168, 'AK-20250926023609', 5, 1, 'Ahmad dani', '22862302319', 'batam', '2004-10-20', 'perumahan lembah asri', 'batu 9', 'tanjung pinang timur', 'tanjung pinang', 7, 'untuk melengkapi data BKPAD', '081371517849', 'ahmaddani041020@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Ahmad_dani_surat_aktif_kuliah_22862302319/surat_final_168_1758858937.pdf', '2025-09-26 09:36:09', '', 'B-3301/Sti.20/1.1/HM.00/09/2025', 1),
(171, 'IPS-20250929064457', 9, 1, 'Mohammad Iqbal Ansori', '211984', 'Tanjungpinang', '2003-03-27', 'Jl.Ganet Perum Bintan Permai Blok B. No. 1', 'Pinang Kencana', 'Tanjungpinang Timur', 'Tanjungpinang', 9, '', '081374479272', 'iqbalansori2003@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Mohammad_Iqbal_Ansori_surat_permohonan_izin_penelitian_skripsi_211984/surat_final_171_1759280584.pdf', '2025-09-29 06:44:57', '', 'B-3342/Sti.20/1.1/HM.00/10/2025', 1),
(172, 'IPS-20250930030641', 9, 10, 'MUKHLISIN', '191325', 'KIJANG', '2000-08-08', 'Jl.KORINDO KP.JAWA, RT.002/RW.007, SEI.LEKOP', 'SEI.LEKOP', 'BINTAN TIMUR', 'BINTAN', 13, '', '087797704839', 'mukhlisin.asus11@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/MUKHLISIN_surat_permohonan_izin_penelitian_skripsi_191325/surat_final_172_1759288919.pdf', '2025-09-30 03:06:41', '', 'B-3343/Sti.20/1.1/HM.00/10/2025', 1),
(173, 'PPN-20251001021744', 8, 10, 'Kurnia Rizki Amanda', '211916', 'Kijang', '2001-09-27', 'Toapaya asri', 'Toapaya asri', 'Toapaya', 'Bintan', 9, '', '081376160172', 'nia654961@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Kurnia_Rizki_Amanda_surat_permohonan_pra_penelitian_skripsi_211916/surat_final_173_1759290325.pdf', '2025-10-01 02:17:44', '', 'B-3348/Sti.20/1.1/HM.00/10/2025', 1),
(174, 'IPS-20251001022724', 9, 5, 'Rois Amrullah', '191206', 'Muaradua', '2001-05-05', 'Jl. Rambutan kilometer 17', 'Toapaya selatan', 'Toapaya', 'Bintan', 13, '', '082289684427', 'yuukihime191206@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Rois_Amrullah_surat_permohonan_izin_penelitian_skripsi_191206/surat_final_174_1759290542.pdf', '2025-10-01 02:27:24', '', 'B-3347/Sti.20/1.1/HM.00/10/2025', 1),
(176, 'AK-20251002071848', 5, 5, 'M.Fariq Pandika', '22862312301', 'Tanjungpinang', '2004-07-03', 'KOMP. BUKIT GALANG PERMAI BLOK J NO. 12A', 'Air Raja', 'Tanjungpinang timur', 'Tanjungpinang', 7, 'BPJS kesehatan ', '081275070961', 'fariqpandika60@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/M_Fariq_Pandika_surat_aktif_kuliah_22862312301/surat_final_176_1759797399.pdf', '2025-10-02 14:18:48', '', 'B-3367/Sti.20/1.1/HM.00/10/2025', 1),
(177, 'IPS-20251003035052', 9, 1, 'Yuda Peratama Putra', '211799', 'Dabo Singkep', '2002-11-26', 'Jl. Sedamai RT 01 RW 01', 'Desa Sedamai', 'Singkep Pesisir', 'Lingga', 9, '', '083891135220', 'yudaperatamaputra26@gmail.com', '2021', '2025', 'selesai', 'uploads/berkas/ttdcap/Yuda_Peratama_Putra_surat_permohonan_izin_penelitian_skripsi_211799/surat_final_177_1759474408.pdf', '2025-10-03 03:50:52', '', 'B-3351/Sti.20/1.1/HM.00/10/2025', 1),
(180, 'AK-20251007041256', 5, 8, 'Ilham', '22622022340', 'Bokor', '2002-09-25', 'Toapaya', 'Toapaya', 'Toapaya', 'Kabupaten bintan', 7, 'Melengkapi berkas bantuan biasiswa tidak mampu', '0857-6557-3754', 'ilhambareb87@gmail.com', '2025', '2026', 'menunggu verifikasi', '', '2025-10-07 11:12:56', '', '', 0),
(182, 'AK-20251007080225', 5, 1, 'Balqis Syasya Nabilah', '211803', 'SUNGAI UNGAR UTARA', '2002-10-25', 'PARIT SIPING RT 003 RW 005', 'SUNGAI UNGAR UTARA', 'KUNDUR UTARA', 'KARIMUN', 8, 'Untuk Persyaratan Kepengurusan BPJS', '082180770234', 'balqissyasyanabilah@gmail.com', '2025', '2026', 'menunggu verifikasi', '', '2025-10-07 15:02:25', '', '', 0),
(183, 'AK-20251007080438', 5, 8, 'Nadia Ulfa', '2362022616', 'Kijang', '2004-12-12', 'Kp.lembah sari', 'Toapaya Asri', 'Toapaya', 'Bintan', 5, 'Melengkapi Laporan Taspen Orangtua', '083157572295', 'ulfaul404@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Nadia_Ulfa_surat_aktif_kuliah_2362022616/surat_final_183_1760323484.pdf', '2025-10-07 15:04:38', '', 'B-3394/Sti.20/1.1/HM.00/10/2025', 1),
(187, 'IPS-20251007213628', 9, 5, 'Tasya Putri Jatia Ningsih', '211857', 'Tamjungpinang', '2003-03-17', 'Kp. Lembah Sari km.26', 'Toapaya Asri', 'Toapaya', 'Bintan', 9, '', '083151144368', 'tasyaputri170303@gmail.com', '2020', '2025', 'selesai', 'uploads/berkas/ttdcap/Tasya_Putri_Jatia_Ningsih_surat_permohonan_izin_penelitian_skripsi_211857/surat_final_187_1759910742.pdf', '2025-10-07 21:36:28', '', 'B-3373/Sti.20/1.1/HM.00/10/2025', 1),
(189, 'IPS-20251008063459', 9, 6, 'Maharannie audy saputri', '211837', 'Tambelan', '2003-05-28', 'Teluk sekuni', 'Kelurahan teluk sekuni', 'Kecamatan tambelan', 'Kabupaten bintan', 9, '', '082350716249', 'maharannieaudysaputri2@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Maharannie_audy_saputri_surat_permohonan_izin_penelitian_skripsi_211837/surat_final_189_1759910888.pdf', '2025-10-08 06:34:59', '', 'B-3374/Sti.20/1.1/HM.00/10/2025', 1),
(190, 'IPS-20251008234425', 9, 10, 'Kurnia Rizki Amanda', '211916', 'Kijang', '2001-09-27', 'Toapaya asri', 'Toapaya', 'Toapaya asri', 'Bintan', 9, '', '081376160172', 'nia654961@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Kurnia_Rizki_Amanda_surat_permohonan_izin_penelitian_skripsi_211916/surat_final_190_1759978079.pdf', '2025-10-08 23:44:25', '', 'B-3375/Sti.20/1.1/HM.00/10/2025', 1),
(192, 'IPS-20251009084710', 9, 5, 'Viona Putri Ariyanti', '211866', 'Batam', '2002-07-31', 'Perum. Prumnas Bumi Air Raja Blok C no 127', 'Pinang kencana', 'Tanjungpinang Timur', 'Tanjungpinang', 9, '', '081536606002', 'vionaariyanti9@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Viona_Putri_Ariyanti_surat_permohonan_izin_penelitian_skripsi_211866/surat_final_192_1760000177.pdf', '2025-10-09 08:47:10', '', 'B-3385/Sti.20/1.1/HM.00/10/2025', 1),
(193, 'AK-20251009114526', 5, 5, 'Fuji Fauziyah Alisyah Putri', '22862312291', 'Tanjungpinang', '2003-02-22', 'Kp. Ceruk Ijuk-Rt 006/Rw 002', 'Toapaya Asri', 'Toapaya', 'Bintan', 7, 'Melengkapi berkas beasiswa', '083892352893', 'Fauziyahfuji0602@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Fuji_Fauziyah_Alisyah_Putri_surat_aktif_kuliah_22862312291/surat_final_193_1760323502.pdf', '2025-10-09 18:45:26', '', 'B-3395/Sti.20/1.1/HM.00/10/2025', 1),
(194, 'AK-20251009114823', 5, 5, 'Nopa Rahmadani', '22862312295', 'Sedanau', '2004-03-12', 'Jl.Panglima Hujan', 'Sedanau', 'Bunguran Barat', 'Natuna', 7, 'Melengkapi berkas beasiswa', '082283141239', 'noparhmadniidnii@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Nopa_Rahmadani_surat_aktif_kuliah_22862312295/surat_final_194_1760323457.pdf', '2025-10-09 18:48:23', '', 'B-3396/Sti.20/1.1/HM.00/10/2025', 1),
(195, 'AK-20251010025525', 5, 5, 'Brian Alfiano', '22862312154', 'Teluk Bunga Ros', '2003-02-10', 'Jl. Ceruk Ijuk KM 19. Kelurahan Toapaya Asri', 'Toapaya asri', 'Toapaya', 'Bintan', 7, 'melengkapi berkas beasiswa ', '081371617478', 'alfianoiyan3@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Brian_Alfiano_surat_aktif_kuliah_22862312154/surat_final_195_1760323446.pdf', '2025-10-10 09:55:25', '', 'B-3397/Sti.20/1.1/HM.00/10/2025', 1),
(198, 'IPS-20251013002417', 9, 10, 'Kurnia Rizki Amanda', '211916', 'Kijang', '2001-09-27', 'Toapaya asri', 'Toapaya', 'Toapaya asri', 'Bintan', 9, '', '081376160172', 'nia654961@gmail.com', '2024', '2025', 'selesai', 'uploads/berkas/ttdcap/Kurnia_Rizki_Amanda_surat_permohonan_izin_penelitian_skripsi_211916/surat_final_198_1760316588.pdf', '2025-10-13 00:24:17', '', 'B-3375/Sti.20/1.1/HM.00/10/2025', 1),
(199, 'AK-20251013015222', 5, 11, 'Indri Sopiyani', '22762312376', 'Kundur Karimun', '2003-04-30', 'Jl. Desa Ngal', 'Desa Ngal', 'Ungar', 'Karimun', 7, 'Melengkapi berkas Beasiswa Muhammadiyah Scholership berkolaborasi dengan baznaz', '085264628910', 'soviyaniindri15@gmail.com', '2022', '2026', 'selesai', 'uploads/berkas/ttdcap/Indri_Sopiyani_surat_aktif_kuliah_22762312376/surat_final_199_1760323363.pdf', '2025-10-13 08:52:22', '', 'B-3398/Sti.20/1.1/HM.00/10/2025', 1),
(200, 'IPS-20251013024200', 9, 4, 'Nurul Aini Asmi', '211995', 'Batam', '2003-06-15', 'Jl. Daeng Kamboja KM.14 Arah Uban', 'Air Raja', 'Tanjungpinang Timur', 'Tanjungpinang', 9, '', '085730061681', 'asminurul0615@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Nurul_Aini_Asmi_surat_permohonan_izin_penelitian_skripsi_211995/surat_final_200_1760337298.pdf', '2025-10-13 02:42:00', '', 'B-3399/Sti.20/1.1/HM.00/10/2025', 1),
(201, 'AK-20251013051451', 5, 1, 'Suci Sauma Ramadhani', '22862302186', 'Tanjungpinang', '2003-11-20', 'Jl. Kampung Srimulyo No. 22 RT 004 RW 002', 'Bukit Cermin', 'Tanjungpinang Barat', 'Tanjungpinang', 7, 'Melengkapi berkas beasiswa', '081218441341', 'sucisaumaramadhani@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Suci_Sauma_Ramadhani_surat_aktif_kuliah_22862302186/surat_final_201_1760426721.pdf', '2025-10-13 12:14:51', '', 'B-3409/Sti.20/1.1/HM.00/10/2025', 1),
(205, 'IPS-20251013054052', 9, 3, 'Syahfiqi defa ramadhany', '211751', 'Karimun', '2003-10-31', 'Jalan ganet perumahan citra pelita 7', 'Pinang kencana', 'Tanjung pinang timur', 'Tanjung pinang', 9, '', '089601325940', 'Syafiqdefar@gmail.com', '2021', '2025', 'selesai', 'uploads/berkas/ttdcap/Syahfiqi_defa_ramadhany_surat_permohonan_izin_penelitian_skripsi_211751/surat_final_205_1760337199.pdf', '2025-10-13 05:40:52', '', 'B-3398/Sti.20/1.1/HM.00/10/2025', 1),
(206, 'AK-20251014064128', 5, 7, 'Syarifah Nuraini', '25882043923', 'Tanjung Batu Kundur', '2004-02-17', 'Jl. Paya Togok', 'Tanjung Batu Kota', 'Kundur', 'Karimun', 1, 'Melengkapi berkas beasiswa', '081276597114', 'nurainisyarifah354@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Syarifah_Nuraini_surat_aktif_kuliah_25882043923/surat_final_206_1760426711.pdf', '2025-10-14 13:41:28', '', 'B-3410/Sti.20/1.1/HM.00/10/2025', 1),
(207, 'AK-20251014073012', 5, 7, 'Melia Rosita Dewi', '25882043834', 'Tanjung Pinang', '2006-05-17', 'Batu 8 atas, Jalan Salam, kampung kolam', 'Sei jang', 'Bukit Bestari', 'Tanjungpinang', 1, 'Melengkapi berkas beasiswa ', '085376276477', 'meliarositad24@gmail.com', '2025', '2026', 'menunggu verifikasi', '', '2025-10-14 14:30:12', '', '', 0),
(208, 'AK-20251014073237', 5, 7, 'Melia Rosita Dewi', '25882043834', 'Tanjung Pinang', '2006-05-17', 'Batu 8 atas, Jalan Salam, kampung kolam', 'Sei jang', 'Bukit Bestari', 'Tanjungpinang', 1, 'Melengkapi berkas beasiswa ', '085376276477', 'meliarositad24@gmail.com', '2025', '2026', 'menunggu verifikasi', '', '2025-10-14 14:32:37', '', '', 0),
(209, 'AK-20251014073303', 5, 7, 'Melia Rosita Dewi', '25882043834', 'Tanjung Pinang', '2006-05-17', 'Batu 8 atas, Jalan Salam, kampung kolam', 'Sei jang', 'Bukit Bestari', 'Tanjungpinang', 1, 'Melengkapi berkas beasiswa ', '085376276477', 'meliarositad24@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Melia_Rosita_Dewi_surat_aktif_kuliah_25882043834/surat_final_209_1760494469.pdf', '2025-10-14 14:33:03', '', 'B-3422/Sti.20/1.1/HM.00/10/2025', 1),
(211, 'IPS-20251014091043', 9, 4, 'Sakinah', '212030', 'Penyengat', '2002-02-23', 'jl.bakak', 'Penyengat', 'Tanjungpinang Kota', 'Tanjungpinang', 9, '', '083125527272', 'nasakinah25@gmail.com', '2021', '2025', 'selesai', 'uploads/berkas/ttdcap/Sakinah_surat_permohonan_izin_penelitian_skripsi_212030/surat_final_211_1760487888.pdf', '2025-10-14 09:10:43', '', 'B-3411/Sti.20/1.1/HM.00/10/2025', 1),
(212, 'IPS-20251014104952', 9, 7, 'Fatma Herniati', '211991', 'Dongkala', '2002-07-28', 'Jl. Tanjung Momong', 'Desa Tarempa Timur', 'Siantan', 'Kepulauan Anambas', 9, '', '081310410469', 'fatmaherniati72@gmail.com', '2024', '2025', 'diproses', '', '2025-10-14 10:49:52', '', 'B-3415/Sti.20/1.1/HM.00/10/2025', 1),
(214, 'AK-20251015012804', 5, 7, 'Dinna Aulia Ulmaula', '24882043368', 'Tanjungpinang', '2004-10-15', 'JL. Kampung Wonosari KM.7 NO. 24', 'Melayu Kota Piring', 'Tanjung Pinang Timur', 'Tanjung Pinang', 3, 'Melengkapi Persyaratan Beasiswa Tahfidz', '087833832355', 'auliadinna336@gmail.com', '2025', '2026', 'selesai', 'uploads/berkas/ttdcap/Dinna_Aulia_Ulmaula_surat_aktif_kuliah_24882043368/surat_final_214_1760494479.pdf', '2025-10-15 08:28:04', '', 'B-3423/Sti.20/1.1/HM.00/10/2025', 1);

-- --------------------------------------------------------

--
-- Table structure for table `survey_kepuasan`
--

CREATE TABLE `survey_kepuasan` (
  `id` int(11) NOT NULL,
  `pengajuan_id` int(11) NOT NULL,
  `kualitas` tinyint(4) NOT NULL,
  `kecepatan` tinyint(4) NOT NULL,
  `kemudahan` tinyint(4) NOT NULL,
  `kejelasan` tinyint(4) NOT NULL,
  `keandalan` tinyint(4) NOT NULL,
  `kepuasan` tinyint(4) NOT NULL,
  `saran` text NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `survey_kepuasan`
--

INSERT INTO `survey_kepuasan` (`id`, `pengajuan_id`, `kualitas`, `kecepatan`, `kemudahan`, `kejelasan`, `keandalan`, `kepuasan`, `saran`, `created_at`) VALUES
(20, 76, 5, 5, 5, 5, 5, 5, 'sangat puas', '2025-09-10 07:59:24'),
(23, 78, 4, 5, 4, 4, 4, 4, 'Tidak ada', '2025-09-11 03:55:25'),
(30, 102, 5, 5, 5, 5, 5, 5, 'Pelayanan sangat baik tidak ada masukan dari saya', '2025-09-16 03:48:14'),
(31, 86, 4, 3, 5, 5, 4, 4, '', '2025-09-16 04:15:03'),
(32, 82, 5, 5, 5, 4, 5, 5, '', '2025-09-16 05:07:13'),
(33, 119, 5, 5, 5, 5, 5, 5, 'Sangat memuaskan sekali,dan mempermudah mahasiswa', '2025-09-17 07:22:40'),
(34, 88, 5, 5, 5, 5, 5, 5, '', '2025-09-19 02:57:15'),
(35, 84, 5, 5, 5, 5, 5, 5, '', '2025-09-19 03:32:12'),
(36, 94, 5, 4, 3, 4, 4, 4, 'Sangat puas dan ramah sekali pelayanan akademik nya', '2025-09-19 06:59:12'),
(37, 140, 5, 5, 5, 5, 5, 5, '', '2025-09-19 10:29:40'),
(38, 140, 5, 5, 5, 5, 5, 5, '', '2025-09-22 05:01:47'),
(39, 152, 5, 5, 5, 5, 5, 5, '', '2025-09-23 03:34:24'),
(40, 94, 4, 4, 4, 4, 4, 4, 'Sangat bagus sekali ', '2025-09-23 07:15:54'),
(41, 153, 5, 4, 4, 4, 4, 4, 'Cukup baik ', '2025-09-23 07:44:57'),
(43, 162, 5, 5, 5, 5, 5, 5, 'mantap ', '2025-09-24 04:32:12'),
(45, 164, 4, 4, 4, 4, 4, 4, 'Mantap', '2025-09-25 03:57:22'),
(46, 165, 4, 4, 4, 3, 4, 4, '', '2025-09-26 02:35:07'),
(47, 177, 4, 4, 4, 4, 4, 4, '', '2025-10-04 04:51:11'),
(48, 177, 4, 4, 4, 4, 4, 4, '', '2025-10-07 00:39:01'),
(49, 206, 5, 5, 5, 5, 5, 5, '', '2025-10-15 02:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`, `role_id`, `is_active`) VALUES
(1, 'titis', 'Titis Yunita', '', '$2y$10$RpO6zG7T73nsdAfnGrd9neU5XG2zjPu9aIs1EZJF5dmXWry7iVY/C', 1, 1),
(2, 'makrup', 'Makrup', '', '$2y$10$RpO6zG7T73nsdAfnGrd9neU5XG2zjPu9aIs1EZJF5dmXWry7iVY/C', 1, 1),
(3, 'wisdar', 'Wisdar Hanum', '', '$2y$10$RpO6zG7T73nsdAfnGrd9neU5XG2zjPu9aIs1EZJF5dmXWry7iVY/C', 1, 1),
(4, 'wulan', 'wulan', '', '$2y$10$hTFvMWrVlNbAP.O8uT7LZ.aWBWmoAcTyPSrtqZjH3vxYm7cSlQUt.', 2, 1),
(5, 'ary', 'ary', '', '$2y$10$hTFvMWrVlNbAP.O8uT7LZ.aWBWmoAcTyPSrtqZjH3vxYm7cSlQUt.', 2, 1),
(7, 'dvi', 'dvi afriansyah', '', '$2y$10$hTFvMWrVlNbAP.O8uT7LZ.aWBWmoAcTyPSrtqZjH3vxYm7cSlQUt.', 5, 1),
(9, 'aris', 'aris bintania', '', '$2y$10$hTFvMWrVlNbAP.O8uT7LZ.aWBWmoAcTyPSrtqZjH3vxYm7cSlQUt.', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(5, 1, 2),
(9, 1, 9),
(10, 1, 10),
(11, 1, 8),
(12, 1, 11),
(13, 2, 2),
(14, 2, 8),
(15, 2, 10),
(17, 5, 12),
(19, 6, 12),
(20, 6, 10),
(21, 1, 13),
(22, 2, 13),
(23, 5, 13),
(24, 5, 10),
(25, 6, 13),
(26, 7, 13),
(27, 7, 12),
(28, 7, 10),
(29, 2, 12),
(30, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
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
(10, 'Arsip '),
(12, 'Laporan'),
(13, 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Superadmin'),
(2, 'admin'),
(5, 'kasubbag_akademik'),
(7, 'pimpinan\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
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
(15, 8, 'Berita & Pengumuman', 'master/berita', 'fa-solid fa-newspaper', 1),
(16, 2, 'Survey Kepuasan', 'survey', 'fa-solid fa-square-poll-vertical', 1),
(17, 10, 'Arsip Surat', 'arsip/index', 'fa-solid fa-box-archive', 1),
(18, 12, 'Laporan', 'laporan/laporan_surat_mahasiswa', 'fa-solid fa-box-archive', 1),
(19, 13, 'Ubah Password', 'pengguna/ubah_password', 'fa-solid fa-user-tie', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `detail_pengajuan_surat_pra_penelitian`
--
ALTER TABLE `detail_pengajuan_surat_pra_penelitian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_status_surat`
--
ALTER TABLE `log_status_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=541;

--
-- AUTO_INCREMENT for table `master_jenis_surat`
--
ALTER TABLE `master_jenis_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `master_prodi`
--
ALTER TABLE `master_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengajuan_berkas`
--
ALTER TABLE `pengajuan_berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=475;

--
-- AUTO_INCREMENT for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `survey_kepuasan`
--
ALTER TABLE `survey_kepuasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
