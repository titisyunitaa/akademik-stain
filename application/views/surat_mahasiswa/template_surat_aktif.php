<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Surat Keterangan Aktif Kuliah</title>
    <style>
        body {  
          font-family: 'Times New Roman', Times, serif;
          margin: 40px;
          font-size: 16px;
          line-height: 1.6; 
        }
        .header { text-align: center; }
        .header img { width: 80px; }
        .judul { font-size: 14pt; font-weight: bold; text-decoration: underline; }
        .nomor { margin-bottom: 20px; }
        .isi { margin-top: 20px; }
        .signature-block {
    float: right;
    width: 250px;
    text-align: left; /* ✅ teks rata kiri */
    margin-top: 40px;
  }
  .signature-block p {
    margin: 4px 0;
  }
    
    </style>
</head>
<body>
    <div class="header" style="width:100%; margin-bottom:0;">
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
    </div>
    <hr style="border: 1.5px solid #000; margin-top:4px; margin-bottom:12px;">
    <div class="judul" style="text-align:center;">SURAT KETERANGAN AKTIF KULIAH</div>
  <div class="nomor" style="text-align:center;">Nomor : <?= isset($surat['nomor_surat']) && $surat['nomor_surat'] !== '' ? htmlspecialchars($surat['nomor_surat']) : '......' ?></div>
  <div class="isi">
        <p>Ketua Sekolah Tinggi Agama Islam Negeri (STAIN) Sultan Abdurrahman Kepulauan Riau<br>
        dengan ini menerangkan bahwa:</p>
        <table style="margin-left;">
            <tr><td>Nama</td><td>:</td><td><?= $surat['nama_mhs'] ?></td></tr>
            <tr><td>Tempat/Tanggal lahir</td><td>:</td><td><?= $surat['tempat_lahir'] ?> / <?= formatTanggalIndonesia($surat['tanggal_lahir']) ?></td></tr>
            <tr><td>Nim</td><td>:</td><td><?= $surat['nim_mhs'] ?></td></tr>
            <tr><td>Semester</td><td>:</td><td><?= formatSemesterIndonesia($surat['semester']) ?></td></tr>
            <tr><td>Program Studi</td><td>:</td><td><?= $surat['nama_prodi'] ?></td></tr>
            <tr><td>Alamat</td><td>:</td><td><?= $surat['jalan'] ?>, <?= $surat['kelurahan'] ?>, <?= $surat['kecamatan'] ?>, <?= $surat['kota'] ?></td></tr>
        </table>
        <p>Dengan ini menyatakan bahwa nama tersebut diatas Adalah Benar Mahasiswa Aktif Sekolah Tinggi Agama Islam Negeri Sultan Abdurrahman Kepulauan Riau dan dinyatakan aktif pada <?= formatSemesterIndonesia($surat['semester']) ?> semester terakhir.</p>
        <p>Demikianlah Surat Keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
    </div>
    <div class="signature-block">
  <p>Bintan, <?= formatTanggalIndonesia(date('Y-m-d')) ?></p>
  <p>Wakil Ketua I</p>
  <?php if (!empty($tampilkan_ttd)): ?>
    <?php 
      $ttd_path = str_replace('\\', '/', FCPATH . 'assets/img/ttd_pimpinan.png');
      if (file_exists($ttd_path)) {
        echo '<img src="' . $ttd_path . '" style="height:100px;">';
      } else {
        echo '<span style="color:red;">[File tanda tangan tidak ditemukan: ' . $ttd_path . ']</span>';
      }
    ?>
  <?php else: ?>
    <br><br><br><br>
  <?php endif; ?>
  <p><strong>Aris Bintania, M.Ag.</strong></p>
  <p>NIP. 19850723 200003 1 001</p>
</div>
</body>
</html>
