   
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_mahasiswa extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Surat_mahasiswa_model');
    }
    
        // Simpan opsi tampilkan tanda tangan
    public function set_tampilkan_ttd($id) {
        $ttd = $this->input->post('tampilkan_ttd');
        $ttd = ($ttd == '1') ? 1 : 0;
        $this->db->where('id', $id);
        $this->db->update('pengajuan_surat', [
            'tampilkan_ttd' => $ttd
        ]);
        $this->session->set_flashdata('sukses', 'Opsi tampilkan tanda tangan berhasil disimpan.');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function index()
    {
        $data['title'] = 'Surat Mahasiswa';

        //mengambil data dari session 
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();


        $data['pengajuan_surat'] = $this->Surat_mahasiswa_model->getAllPengajuan();
        $data['jenissurat'] = $this->db->get('master_jenis_surat')->result_array();
        
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('surat_mahasiswa/index',$data);
        $this->load->view('templates/admin_footer',$data);
    }

    public function detail($id){
        //mengambil data dari session 
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();
        
        $data['title'] = 'Detail Surat';
        $data['surat'] = $this->Surat_mahasiswa_model->getDetailSuratById($id);
        $data['dokumen'] = $this->Surat_mahasiswa_model->getDetailDokumenById($id);
        

        // Ambil log status surat berdasarkan pengajuan_id
        $data['log_status'] = $this->db->order_by('timestamp','ASC')
            ->get_where('log_status_surat', ['pengajuan_id' => $id])->result_array();

        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('surat_mahasiswa/detail',$data);
        $this->load->view('templates/admin_footer',$data);
    }

        public function setujui($id) {
        // Update status di tabel pengajuan_surat
        $this->db->where('id', $id);
        $this->db->update('pengajuan_surat', [
            'status' => 'diproses'
        ]);

        // Tambahkan log status baru di log_status_surat
        $this->db->insert('log_status_surat', [
            'pengajuan_id' => $id,
            'status' => 'diproses',
            'timestamp' => (new DateTime('now', new DateTimeZone('Asia/Jakarta')))->format('Y-m-d H:i:s'),
            'keterangan' => 'Pengajuan disetujui dan sedang diproses admin.'
        ]);

        $this->session->set_flashdata('sukses', 'Status pengajuan berhasil diperbarui menjadi DIPROSES.');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function tolak($id) {
        $catatan = $this->input->post('keterangan_admin');
        if (!$catatan || trim($catatan) == '') {
            $this->session->set_flashdata('error', '<strong>Catatan Diperlukan</strong><br>Mohon berikan alasan penolakan.');
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }
        // Update status di tabel pengajuan_surat
        $this->db->where('id', $id);
        $this->db->update('pengajuan_surat', [
            'status' => 'ditolak'
        ]);

        // Tambahkan log status baru di log_status_surat
        $this->db->insert('log_status_surat', [
            'pengajuan_id' => $id,
            'status' => 'ditolak',
            'timestamp' => (new DateTime('now', new DateTimeZone('Asia/Jakarta')))->format('Y-m-d H:i:s'),
            'keterangan' => $catatan
        ]);

        $this->session->set_flashdata('sukses', 'Status pengajuan berhasil diperbarui menjadi DITOLAK.');
        redirect($_SERVER['HTTP_REFERER']);
    }

        public function cetak_surat($id) {
        // Ambil data surat
        $surat = $this->Surat_mahasiswa_model->getDetailSuratById($id);
        if (!$surat || $surat['status'] !== 'diproses') {
            show_error('Surat tidak ditemukan atau belum diproses.');
        }
        // Nomor surat sudah diformat di database, tampilkan apa adanya
        if (empty($surat['nomor_surat'])) {
            $spasi_html = str_repeat('&nbsp;', 10);
            $bulan = date('m');
            $tahun = date('Y');
            $surat['nomor_surat'] = 'B-' . $spasi_html . '/Sti.20/1.1/HM.00/' . $bulan . '/' . $tahun;
        }

        // Pilih template sesuai jenis surat
        $jenis_id = isset($surat['jenis_surat_id']) ? $surat['jenis_surat_id'] : null;
        $template_view = 'surat_mahasiswa/template_surat_default';
        if ($jenis_id == 5) {
            $template_view = 'surat_mahasiswa/template_surat_aktif';
        }  elseif ($jenis_id == 8) {
            $template_view = 'surat_mahasiswa/template_surat_pra_penelitian';
        }elseif ($jenis_id == 9) {
            $template_view = 'surat_mahasiswa/template_surat_izin_penelitian_skripsi';
        }

        // Load library PDF (contoh: mPDF)
        $this->load->library('M_pdf');
        $mpdf = $this->m_pdf->load();

        // Cek apakah tanda tangan perlu ditempel
        $tampilkan_ttd = isset($surat['tampilkan_ttd']) ? $surat['tampilkan_ttd'] : 0;

        // Generate HTML
        $html = $this->load->view($template_view, ['surat' => $surat, 'tampilkan_ttd' => $tampilkan_ttd], true);

        // Nama file
        $nama_mahasiswa = preg_replace('/[^a-zA-Z0-9_\- ]/', '', $surat['nama_mhs']);
        $jenis_surat = preg_replace('/[^a-zA-Z0-9_\- ]/', '', $surat['jenis_surat']);
        $filename = $nama_mahasiswa . '-' . $jenis_surat . '.pdf';

        // Simpan ke server
        $save_path = FCPATH . 'uploads/berkas/final/' . $filename;
        ob_clean();
        $mpdf->WriteHTML($html);
        $mpdf->Output($save_path, \Mpdf\Output\Destination::FILE);

        // Tampilkan ke browser
        $mpdf->Output($filename, \Mpdf\Output\Destination::INLINE);

    }

        // Simpan nomor surat
    public function simpan_nomor_surat($id) {
        $nomor = $this->input->post('nomor_surat');
        if (!$nomor || trim($nomor) == '') {
            $this->session->set_flashdata('error', 'Nomor surat tidak boleh kosong.');
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }
        $bulan = date('m');
        $tahun = date('Y');
        $nomor_surat_full = 'B-' . $nomor . '/Sti.20/1.1/HM.00/' . $bulan . '/' . $tahun;
        $this->db->where('id', $id);
        $this->db->update('pengajuan_surat', [
            'nomor_surat' => $nomor_surat_full
        ]);
        $this->session->set_flashdata('sukses', 'Nomor surat berhasil disimpan.');
        redirect($_SERVER['HTTP_REFERER']);
    }

        // Set status menjadi 'menunggu tanda tangan'
    public function menunggu_ttd($id) {
        $this->db->where('id', $id);
        $this->db->update('pengajuan_surat', [
            'status' => 'menunggu tanda tangan'
        ]);
        $this->db->insert('log_status_surat', [
            'pengajuan_id' => $id,
            'status' => 'menunggu tanda tangan',
            'timestamp' => (new DateTime('now', new DateTimeZone('Asia/Jakarta')))->format('Y-m-d H:i:s'),
            'keterangan' => 'Surat menunggu tanda tangan pimpinan.'
        ]);
        $this->session->set_flashdata('sukses', 'Status pengajuan diperbarui menjadi MENUNGGU TANDA TANGAN.');
        redirect($_SERVER['HTTP_REFERER']);
    }

    // Set status menjadi 'selesai'
    public function selesai($id) {
        $this->db->where('id', $id);
        $this->db->update('pengajuan_surat', [
            'status' => 'selesai'
        ]);
        $this->db->insert('log_status_surat', [
            'pengajuan_id' => $id,
            'status' => 'selesai',
            'timestamp' => (new DateTime('now', new DateTimeZone('Asia/Jakarta')))->format('Y-m-d H:i:s'),
            'keterangan' => 'Surat telah selesai diproses dan ditandatangani.'
        ]);
        $this->session->set_flashdata('sukses', 'Status pengajuan diperbarui menjadi SELESAI.');
        redirect($_SERVER['HTTP_REFERER']);
    }
   
        // Upload surat final bertanda tangan dan update status selesai
    public function upload_surat_final($id) {
    if (empty($_FILES['surat_final']['name'])) {
        $this->session->set_flashdata('error', 'File surat final wajib diupload.');
        redirect($_SERVER['HTTP_REFERER']);
        return;
    }

    // Validasi MIME type
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $_FILES['surat_final']['tmp_name']);
    if ($mime !== 'application/pdf') {
        $this->session->set_flashdata('error', 'File harus berupa PDF yang valid.');
        redirect($_SERVER['HTTP_REFERER']);
        return;
    }


    // Ambil data surat untuk nama folder
    $surat = $this->Surat_mahasiswa_model->getDetailSuratById($id);
    $nama_mhs = isset($surat['nama_mhs']) ? preg_replace('/[^A-Za-z0-9_\-]/', '_', $surat['nama_mhs']) : 'mahasiswa';
    $nim_mhs = isset($surat['nim_mhs']) ? preg_replace('/[^A-Za-z0-9]/', '', $surat['nim_mhs']) : 'nim';
    $nama_surat = isset($surat['jenis_surat']) ? preg_replace('/[^A-Za-z0-9_\-]/', '_', strtolower($surat['jenis_surat'])) : 'surat';
    $folder_final = $nama_mhs . '_' . $nama_surat . '_' . $nim_mhs;
    $upload_dir = './uploads/berkas/ttdcap/' . $folder_final;
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Sanitasi nama file
    $_FILES['surat_final']['name'] = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', $_FILES['surat_final']['name']);

    $config['upload_path'] = $upload_dir;
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 5120; // 5MB
    $config['file_name'] = 'surat_final_' . $id . '_' . time();

    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('surat_final')) {
        log_message('error', 'Upload gagal: ' . $this->upload->display_errors());
        $this->session->set_flashdata('error', $this->upload->display_errors());
        redirect($_SERVER['HTTP_REFERER']);
        return;
    }

    $data = $this->upload->data();
    $file_path = 'uploads/berkas/ttdcap/' . $folder_final . '/' . $data['file_name'];

    $this->db->where('id', $id);
    $this->db->update('pengajuan_surat', [
        'file_surat_pdf' => $file_path,
        'status' => 'selesai'
    ]);

    $this->db->insert('log_status_surat', [
        'pengajuan_id' => $id,
        'status' => 'selesai',
        'timestamp' => (new DateTime('now', new DateTimeZone('Asia/Jakarta')))->format('Y-m-d H:i:s'),
        'keterangan' => 'Surat final telah diupload dan selesai.'
    ]);

    $this->session->set_flashdata('sukses', 'Surat final berhasil diupload dan status pengajuan selesai.');
    redirect($_SERVER['HTTP_REFERER']);
}

    // Generate dan simpan surat final bertanda tangan secara otomatis
    public function generate_surat_final($id) {
        // Ambil data surat
        $surat = $this->Surat_mahasiswa_model->getDetailSuratById($id);
        if (!$surat) {
            show_error('Surat tidak ditemukan.');
        }

        // Pilih template sesuai jenis surat
        $jenis_id = isset($surat['jenis_surat_id']) ? $surat['jenis_surat_id'] : null;
        $template_view = 'surat_mahasiswa/template_surat_default';
        if ($jenis_id == 5) {
            $template_view = 'surat_mahasiswa/template_surat_aktif';
        } elseif ($jenis_id == 8) {
            $template_view = 'surat_mahasiswa/template_surat_pra_penelitian';
        }elseif ($jenis_id == 9) {
            $template_view = 'surat_mahasiswa/template_surat_izin_penelitian_skripsi';
        } 

        // Load library PDF (contoh: mPDF)
        $this->load->library('M_pdf');
        $mpdf = $this->m_pdf->load();

    // Cek apakah tanda tangan perlu ditempel
    $tampilkan_ttd = isset($surat['tampilkan_ttd']) ? $surat['tampilkan_ttd'] : 0;

    // Buat HTML surat sesuai template
    $html = $this->load->view($template_view, ['surat' => $surat, 'tampilkan_ttd' => $tampilkan_ttd], true);

        // Siapkan nama file: NamaMahasiswa-JenisSurat.pdf
        $nama_mahasiswa = isset($surat['nama_mhs']) ? preg_replace('/[^a-zA-Z0-9_\- ]/', '', $surat['nama_mhs']) : 'Surat';
        $jenis_surat = isset($surat['jenis_surat']) ? preg_replace('/[^a-zA-Z0-9_\- ]/', '', $surat['jenis_surat']) : 'Surat';
        $filename = $nama_mahasiswa . '-' . $jenis_surat . '-' . date('YmdHis') . '.pdf';
        $save_path = FCPATH . 'uploads/berkas/final/' . $filename;


        // Pastikan folder ada
        if (!is_dir(FCPATH . 'uploads/berkas/final/')) {
            mkdir(FCPATH . 'uploads/berkas/final/', 0777, true);
        }

        // Simpan file ke disk
        $mpdf->WriteHTML($html);
        $mpdf->Output($save_path, \Mpdf\Output\Destination::FILE);

        // Simpan path file ke pengajuan_surat dan update status
        $file_db_path = 'uploads/berkas/final/' . $filename;
        $this->db->where('id', $id);
        $this->db->update('pengajuan_surat', [
            'file_surat_pdf' => $file_db_path,
            'status' => 'selesai'
        ]);

        // Log status selesai
        $this->db->insert('log_status_surat', [
            'pengajuan_id' => $id,
            'status' => 'selesai',
            'timestamp' => (new DateTime('now', new DateTimeZone('Asia/Jakarta')))->format('Y-m-d H:i:s'),
            'keterangan' => 'Surat final otomatis digenerate dan selesai.'
        ]);

        $this->session->set_flashdata('sukses', 'Surat final berhasil digenerate dan status pengajuan selesai.');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function edit($id) {
        $data['title'] = 'Edit Surat Mahasiswa';
        $data['user'] = $this->db->get_where('users',['username' => $this->session->userdata('username')])->row_array();
        $data['surat'] = $this->Surat_mahasiswa_model->getDetailSuratById($id);
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('surat_mahasiswa/edit',$data);
        $this->load->view('templates/admin_footer',$data);
    }

    public function update($id) {
        $data = [
            'nama_mhs' => $this->input->post('nama_mhs'),
            'nim_mhs' => $this->input->post('nim_mhs'),
            'nama_prodi' => $this->input->post('nama_prodi'),
            'jenis_surat' => $this->input->post('jenis_surat'),
            'status' => $this->input->post('status')
        ];
        $this->db->where('id', $id);
        $this->db->update('pengajuan_surat', $data);
        $this->session->set_flashdata('sukses', 'Data surat mahasiswa berhasil diupdate.');
        redirect('surat_mahasiswa');
    }
    
 // Simpan data Kepada untuk pra penelitian dan izin penelitian skripsi
    public function simpan_kepada($id) {
        $kepada = $this->input->post('kepada');
        if (!$kepada || trim($kepada) == '') {
            $this->session->set_flashdata('error', 'Field Kepada wajib diisi.');
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }
        $surat = $this->Surat_mahasiswa_model->getDetailSuratById($id);
        if (!$surat) {
            $this->session->set_flashdata('error', 'Data surat tidak ditemukan.');
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }
        $jenis = strtolower($surat['jenis_surat']);
        if ($jenis === 'pra penelitian' || $jenis === 'surat permohonan pra penelitian skripsi') {
            // Simpan ke detail_pengajuan_surat_pra_penelitian
            $this->db->where('pengajuan_id', $id);
            $this->db->update('detail_pengajuan_surat_pra_penelitian', [ 'kepada' => $kepada ]);
        } elseif ($jenis === 'izin penelitian' || $jenis === 'surat permohonan izin penelitian skripsi') {
            // Simpan ke detail_pengajuan_surat_izin_penelitian_skripsi
            $this->db->where('pengajuan_id', $id);
            $this->db->update('detail_pengajuan_surat_izin_penelitian_skripsi', [ 'kepada' => $kepada ]);
        } else {
            $this->session->set_flashdata('error', 'Jenis surat tidak sesuai.');
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }
        $this->session->set_flashdata('sukses', 'Data Kepada berhasil disimpan.');
        redirect($_SERVER['HTTP_REFERER']);
    }

     // Hapus pengajuan surat beserta file-file terkait
    public function hapus($id) {
        $surat = $this->Surat_mahasiswa_model->getDetailSuratById($id);
        if (!$surat) {
            $this->session->set_flashdata('error', 'Data surat tidak ditemukan.');
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }

        // Hapus file surat PDF final jika ada
        if (!empty($surat['file_surat_pdf'])) {
            $file_path = FCPATH . $surat['file_surat_pdf'];
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }

        // Hapus file dokumen pendukung
        $dokumen = $this->Surat_mahasiswa_model->getDetailDokumenById($id);
        foreach ($dokumen as $doc) {
            $doc_path = FCPATH . $doc['path_file'];
            if (file_exists($doc_path)) {
                unlink($doc_path);
            }
        }

        // Hapus data di tabel detail pra penelitian dan izin penelitian skripsi
        $this->db->where('pengajuan_id', $id);
        $this->db->delete('detail_pengajuan_surat_pra_penelitian');
        $this->db->where('pengajuan_id', $id);
        $this->db->delete('detail_pengajuan_surat_izin_penelitian_skripsi');

        // Hapus data dokumen
        $this->db->where('pengajuan_id', $id);
        $this->db->delete('pengajuan_berkas');

        // Hapus log status
        $this->db->where('pengajuan_id', $id);
        $this->db->delete('log_status_surat');

        // Hapus data utama pengajuan surat
        $this->db->where('id', $id);
        $this->db->delete('pengajuan_surat');

        $this->session->set_flashdata('sukses', 'Data pengajuan surat dan semua file terkait berhasil dihapus.');
        redirect('surat_mahasiswa');
    }
   

    
}
