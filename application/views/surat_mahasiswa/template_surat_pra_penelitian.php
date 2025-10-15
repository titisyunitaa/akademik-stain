<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Surat Permohonan Pra Penelitian</title>
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      margin: 40px;
      font-size: 14px;
      line-height: 1.6;
    }
    .info-table, .student-table {
      width: 100%;
      border-collapse: collapse;
    }
    .info-table td, .student-table td {
      vertical-align: top;
    }
    .info-table td:first-child, .student-table td:first-child {
      width: 120px;
    }
    .footer {
      margin-top: 40px;
    }
   .signature-block {
    float: right;
    width: 250px;
    text-align: left; /* ✅ teks rata kiri */
    margin-top: 40px;
  }
  .signature-block p {
    margin: 4px 0;
  }
  .tembusan {
    position: absolute;
    bottom: 30px;
    left: 50px; /* bisa disesuaikan */
    font-size: 10px; /* atau gunakan 10px untuk lebih kecil */
    font-family: Arial, sans-serif;
  }
  </style>
</head>
<body>
  <div class="header">
     <table style="width:100%; border:none;">
        <tr>
          <td style="width:100px; vertical-align:top; text-align:left;">
            <img src="<?= FCPATH . 'assets/img/logo_stain_bw.png' ?>" alt="Logo" style="width:95px;">
          </td>
          <td style="vertical-align:top; text-align:center;">
            <div style="font-size:16pt; font-weight:bold; line-height:1.2;">KEMENTERIAN AGAMA REPUBLIK INDONESIA</div>
            <div style="font-size:15pt; font-weight:bold; line-height:1.2;">SEKOLAH TINGGI AGAMA ISLAM NEGERI</div>
            <div style="font-size:15pt; font-weight:bold; line-height:1.2;">SULTAN ABDURRAHMAN KEPULAUAN RIAU</div>
            <div style="font-size:10pt; margin-top:2px; line-height:1.2;">Kampus : Jl. Lintas Barat KM. 19 CerukjukKelurahanToapayaAsri - Bintan</div>
            <div style="font-size:10pt; line-height:1.2;">Telp. 0771-4442607 Fax. 0771-4442610</div>
            <div style="font-size:10pt; line-height:1.2;">Website : www.stainkepri.ac.id Email : stainkepri@kemenag.go.id</div>
          </td>
        </tr>
      </table>
    <hr>
  </div>

    <div style="text-align: right;">
        <?php
        $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
        $formatter->setPattern('dd MMMM yyyy');
        echo "Bintan,&nbsp;" . $formatter->format(new DateTime());
        ?>    
    </div>
    <table class="info-table">
        <tr><td>Nomor</td><td>: <?php echo $surat['nomor_surat']?></td></tr>
        <tr><td>Sifat</td><td>: Biasa</td></tr>
        <tr><td>Lampiran</td><td>: -</td></tr>
        <tr><td>Hal</td><td>: Mohon Izin Pra Penelitian</td></tr>
    </table>


    <p>Kepada Yth.<br>
    <?php
      // Tampilkan data 'kepada' dari database jika ada
      if (!empty($surat['kepada'])) {
        echo  htmlspecialchars($surat['kepada']) . " ".htmlspecialchars($surat['tempat_penelitian_pra']);
      }
      
      
    ?>
    <br>
    di <br>
    Tempat</p>

    <p style = "font-style: italic; margin-bottom:0;">Assalamu’alaikum wr. wb.</p>
    <p style="margin-top:0;">Dengan hormat, kami sampaikan bahwa mahasiswa STAIN Sultan Abdurrahman Kepulauan Riau berikut ini:</p>

    <table class="student-table" style="margin-left: 40px;">
    <tr>
        <td style="width: 140px;">Nama</td>
        <td>: <?php echo $surat['nama_mhs']?></td>
    </tr>
    <tr>
        <td>NIM</td>
        <td>: <?php echo $surat['nim_mhs']?></td>
    </tr>
    <tr>
        <td>Semester</td>
        <td>: <?php echo $surat['semester']?></td>
    </tr>
    <tr>
        <td>Program Studi</td>
        <td>: <?php echo $surat['nama_prodi']?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <?php echo $surat['jalan'], ' ', $surat['kelurahan'], ' ', $surat['kecamatan'], ' ', $surat['kota']?></td>
    </tr>
    </table>

  <p style ="text-align: justify;">Nama tersebut diatas bermaksud mengadakan penelitian  di <?php echo $surat['tempat_penelitian_pra']?>, dengan judul penelitian <b><i><?php echo $surat['judul_proposal']?></i></b>. 
  Sehubungan itu kiranya <?php echo $surat['tempat_penelitian_pra']?> berkenan memberikan izin penelitian kepada yang bersangkutan, sebagai Syarat penyelesaian Proposal Skripsi</p>
    <p>Demikian surat ini kami sampaikan. Atas perhatian dan kerja samanya diucapkan terima kasih.</p>

    <div class="signature-block">
        <p>a.n. Ketua,</p>
        <p>Wakil Ketua I</p>
        <?php if (!empty($tampilkan_ttd)): ?>
          <?php $ttd_path = FCPATH . 'assets/img/ttd_pimpinan.png'; ?>
          <?php if (file_exists($ttd_path)): ?>
            <img src="<?= $ttd_path ?>" style="height:100px;">
          <?php else: ?>
            <span style="color:red;">[File tanda tangan tidak ditemukan: <?= $ttd_path ?>]</span>
          <?php endif; ?>
        <?php else: ?>
          <br><br><br><br>
        <?php endif; ?>
        <p><strong>Aris Bintania, M.Ag.</strong></p>
        <p>NIP. 19850723 200003 1 001</p>
    </div>

    <div class="tembusan">
        Tembusan Yth: 
        <br>Ketua STAIN Sultan Abdurrahman Kepri
    </div>

</body>
</html>
