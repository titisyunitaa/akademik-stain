<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Surat Penetapan Dosen Pembimbing Skripsi</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 10pt; }
        .header { text-align: center; }
        .judul { font-size: 13pt; }
        /* .nomor { margin-bottom: 20px; } */
        .isi { margin-top: 20px; }
        .ttd { margin-top: 60px; text-align: right; }
        table { border-collapse: collapse; }
        .table-dosbing, .table-dosbing th, .table-dosbing td { border: 1px solid #000; padding: 4px 8px; }
        .tembusan { font-size: 10pt; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <img src="<?= FCPATH . 'assets/img/logo_stain_bw.png' ?>" alt="Logo" style="width:50px; margin-bottom:8px;">
        <div style="font-size:12pt;  line-height:1.2;">KEPUTUSAN KETUA STAIN SULTAN ABDURRAHMAN KEPULAUAN RIAU</div>
        <div style="font-size:11pt; margin-top:2px;">NOMOR : <?php echo $surat['nomor_surat'] ?></div>
        <div style="font-size:12pt; margin-top:10px;">TENTANG</div>
        <div style="font-size:12pt; ">PENETAPAN DOSEN PEMBIMBING SKRIPSI</div>
        <div style="font-size:12pt; ">DENGAN RAHMAT TUHAN YANG MAHA ESA</div>
        <div style="font-size:12pt; ">KETUA STAIN SULTAN ABDURRAHMAN KEPULAUAN RIAU</div>
    </div>
    <div class="isi">
        <table style="width:100%; border:none; margin-top:10px;">
            <tr>
                <td style="vertical-align:top; width:90px;">Menimbang</td>
                <td style="vertical-align:top; width:10px;">:</td>
                <td><?= isset($surat['menimbang']) ? $surat['menimbang'] : 'Bahwa untuk memperlancar Mahasiswa Program Studi Pendidikan Agama Islam STAIN Sultan Abdurrahman Kepulauan Riau membuat dan menyelesaikan skripsi/Tugas Akhir, maka perlu ditetapkan Dosen-dosen Program Studi Pendidikan Agama Islam STAIN Sultan Abdurrahman Kepulauan Riau untuk menjadi Pembimbing.' ?></td>
            </tr>
            <tr>
                <td style="vertical-align:top;">Mengingat</td>
                <td style="vertical-align:top;">:</td>
                <td>
                    <ol style="margin:0; padding-left:18px;">
                        <li>Undang – undang No.20 Tahun 2003 tentang Sistem Pendidikan Nasional;</li>
                        <li>Undang – undang No.12 Tahun 2012 tentang Pendidikan Tinggi;</li>
                        <li>Peraturan Pemerintah No. 4 Tahun 2014 tentang Penyelenggaraan Pendidikan Tinggi dan Pengelolaan Perguruan Tinggi;</li>
                        <li>Peraturan Menteri Keuangan Republik Indonesia Nomor 178/PMK.05/2018 Tentang Perubahan atas Peraturan Menteri Keuangan Nomor 190/PMK.05/2012 Tentang Tata Cara Pembayaran dalam Rangka Pelaksanaan Anggaran Pendapatan dan Belanja Negara;</li>
                        <li>Peraturan Menteri Agama Republik Indonesia No. 9 Tahun 2017 tentang Pendirian Sekolah Tinggi Agama Islam Negeri Sultan Abdurrahman Kepulauan Riau;</li>
                        <li>Peraturan Menteri Agama Republik Indonesia No. 10 Tahun 2017 tentang Organisasi dan Tata Kerja Sekolah Tinggi Agama Islam Negeri Sultan Abdurrahman Kepulauan Riau;</li>
                        <li>Peraturan Menteri Agama Republik Indonesia Nomor 30 Tahun 2019 tentang Statuta STAIN Sultan Abdurrahman Kepulauan Riau;</li>
                        <li>Keputusan Menteri Agama Republik Indonesia Nomor : B.II/3/5299 Tahun 2018 Tentang Ketua Sekolah Tinggi Agama Islam Negeri Sultan Abdurrahman Kepulauan Riau.</li>
                    </ol>
                </td>
            </tr>
        </table>
        <div style="margin-top:18px; font-weight:bold; text-align:center;">MEMUTUSKAN</div>
        <table style="width:100%; border:none; margin-top:10px;">
            <tr>
                <td style="vertical-align:top; width:90px;">Menetapkan</td>
                <td style="vertical-align:top; width:10px;">:</td>
                <td>KEPUTUSAN KETUA STAIN SULTAN ABDURRAHMAN KEPULAUAN RIAU TENTANG PENETAPAN DOSEN PEMBIMBING SKRIPSI</td>
            </tr>
            <tr>
                <td style="vertical-align:top; width:90px;">PERTAMA</td>
                <td style="vertical-align:top; width:10px;">:</td>
                <td>Mengangkat dan menetapkan dosen pembimbing Skripsi/Tugas Akhir, sebagai berikut :</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                   <table class="table-dosbing" style="margin-top:8px; margin-bottom:10px; width:100%;">
                        <tr><th style="width:40px;">NO</th><th>Nama</th><th>NIDN</th><th>Jabatan/Pangkat</th><th>Keterangan</th></tr>
                        <?php if(isset($surat['dosbing']) && is_array($surat['dosbing'])): ?>
                            <?php foreach($surat['dosbing'] as $i => $d): ?>
                                <tr>
                                    <td><?= $i+1 ?></td>
                                    <td><?= $d['nama'] ?></td>
                                    <td><?= $d['nidn'] ?></td>
                                    <td><?= $d['jabatan'] ?></td>
                                    <td><?= $d['keterangan'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td>1</td><td>Zulhamdan, M.Pd.I</td><td>2002058903</td><td>Penata III/c Lektor</td><td>Pembimbing I</td></tr>
                            <tr><td>2</td><td>Saepuddin, M.Ag</td><td>2115097401</td><td>X/Asisten Ahli</td><td>Pembimbing II</td></tr>
                        <?php endif; ?>
                    </table>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    Dalam penyusunan Skripsi/Tugas Akhir bagi mahasiswa :
                     <table style="margin-left:30px; margin-top:5px;">
                        <tr><td>Nama</td><td>:</td><td><?= $surat['nama_mhs'] ?? 'Sella Afriani Widya' ?></td></tr>
                        <tr><td>NIM</td><td>:</td><td><?= $surat['nim_mhs'] ?? '211967' ?></td></tr>
                        <tr><td>Prodi</td><td>:</td><td><?= $surat['prodi'] ?? 'Pendidikan Agama Islam' ?></td></tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top; width:90px;">KEDUA</td>
                <td style="vertical-align:top; width:10px;">:</td>
                <td>
                     <table style="margin-left:30px; margin-top:5px;">
                        <tr><td>Judul Skripsi</td><td>:</td><td><?= $surat['judul_skripsi'] ?? 'Efektivitas Kegiatan Muhadharah Di TPQ Al - Hidayah Hang Tua Terhadap Pembentukan Karakter Siswa Di Masyarakat' ?></td></tr>
                    </table>
                </td>
                
            </tr>
            <tr>
                <td style="vertical-align:top; width:90px;">KETIGA</td>
                <td style="vertical-align:top; width:10px;">:</td>
                <td>
                    Keputusan ini berlaku sejak tanggal ditetapkan
                
            </tr>
        </table>
        
        <div class="ttd">
                Ditetapkan di : Bintan<br>
                Pada Tanggal : <?= $surat['tanggal'] ?? 'Juli 2025' ?><br>
                Ketua<br>
                <?php if (!empty($tampilkan_ttd)): ?>
                    <img src="<?= FCPATH . 'assets/img/ttd_pimpinan.png' ?>" style="height:60px;">
                <?php else: ?>
                    <br><br>
                <?php endif; ?>
                <b><?= $surat['nama_ketua'] ?? 'Dr. H. Muhammad Faisal, M.Ag' ?></b><br>
        </div>
    <div class="tembusan">
        <b>Tembusan ini disampaikan kepada :</b><br>
        1. Wakil Ketua I<br>
        2. Kabag AUAK<br>
        3. Kasubag Layanan Akademik<br>
        4. Ketua Prodi<br>
        5. Kepala TIPD<br>
        6. Dosen Pembimbing Mahasiswa Yang bersangkutan<br>
        7. Mahasiswa Yang bersangkutan<br>
    </div>
</body>
</html>
