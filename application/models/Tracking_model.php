<?php
class Tracking_model extends CI_Model {

    public function get_pengajuan_by_resi($resi) {
        return $this->db->get_where('pengajuan_surat', ['resi' => $resi])->row();
    }

    public function get_timeline_by_pengajuan($pengajuan_id) {
        return $this->db
            ->order_by('timestamp', 'ASC')
            ->get_where('log_status_surat', ['pengajuan_id' => $pengajuan_id])
            ->result();
    }

  public function get_resi($nama, $nim) {
    $this->db->select('pengajuan_surat.kode_resi, master_jenis_surat.jenis_surat, pengajuan_surat.created_at, pengajuan_surat.status');
    $this->db->from('pengajuan_surat');
    $this->db->join('master_jenis_surat', 'pengajuan_surat.jenis_surat_id = master_jenis_surat.id');
    $this->db->where('pengajuan_surat.nama_mhs', $nama);
    $this->db->where('pengajuan_surat.nim_mhs', $nim);
    $this->db->order_by('pengajuan_surat.created_at', 'DESC');
    return $this->db->get()->result_array();
}
}

