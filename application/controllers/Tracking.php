<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/navbar');
        $this->load->view('tracking_surat/index');
    }

    public function tracking_surat($kode_resi)
{
    // Ambil data surat dengan join ke jenis surat
    // Ambil data surat berdasarkan kode_resi
    $this->db->select('pengajuan_surat.*, master_jenis_surat.jenis_surat');
    $this->db->from('pengajuan_surat');
    $this->db->join('master_jenis_surat', 'pengajuan_surat.jenis_surat_id = master_jenis_surat.id');
    $this->db->where('pengajuan_surat.kode_resi', $kode_resi);
    $pengajuan = $this->db->get()->row();

    if (!$pengajuan) {
        echo json_encode(['status' => 'not_found']);
        return;
    }

    // Ambil log status surat
    $timeline = $this->db->order_by('timestamp','ASC')
        ->get_where('log_status_surat', ['pengajuan_id' => $pengajuan->id])->result();

    // Siapkan link download jika status selesai dan file ada
    $download_url = null;
    if ($pengajuan->status === 'selesai' && !empty($pengajuan->file_surat_pdf)) {
        $download_url = base_url($pengajuan->file_surat_pdf);
    }

    echo json_encode([
        'status' => 'success',
        'surat' => [
            'pengajuan_id' => $pengajuan->id,
            'nama_surat' => $pengajuan->jenis_surat,
            'nama_mahasiswa' => $pengajuan->nama_mhs,
            'nim' => $pengajuan->nim_mhs,
            'kode_resi' => $pengajuan->kode_resi,
            'status' => $pengajuan->status,
            'download_url' => $download_url
        ],
        'timeline' => $timeline
    ]);
}


public function cari_resi() {
    if ($this->input->method() === 'post') {
        $this->load->model('Tracking_model');
        $data = $this->Tracking_model->get_resi(
            $this->input->post('nama_mhs'),
            $this->input->post('nim_mhs')
        );
        echo json_encode($data);
        exit; // Penting agar tidak render view setelah echo JSON
    }
    // Jika GET, tampilkan form
    $this->load->view('templates/navbar');
    $this->load->view('tracking_surat/form_cari_resi');
}
    
    

    

    
}
