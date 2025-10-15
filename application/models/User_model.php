
<?php
class User_model extends CI_Model {
    public function getCountMenungguVerifikasi(){
        $this->db->where('status', 'menunggu verifikasi');
        return $this->db->count_all_results('pengajuan_surat');
    }

    public function getCountDiproses(){
        $this->db->where('status', 'diproses');
        return $this->db->count_all_results('pengajuan_surat');
    }

     public function getCountDitolak(){
        $this->db->where('status', 'ditolak');
        return $this->db->count_all_results('pengajuan_surat');
    }

     public function getCountTotalSurat(){
        return $this->db->count_all_results('pengajuan_surat');
    }

    public function getPengajuanBaru(){
        $this->db->select('ps.id, ps.nama_mhs, ps.nim_mhs, ps.created_at, ps.status, mjs.jenis_surat, mp.nama_prodi');
        $this->db->from('pengajuan_surat ps');
        $this->db->join('master_jenis_surat mjs', 'ps.jenis_surat_id = mjs.id');
        $this->db->join('master_prodi mp', 'ps.prodi_id = mp.id');
        $this->db->where('ps.status', 'menunggu verifikasi');
        $this->db->order_by('ps.created_at', 'DESC');
        return $this->db->get()->result_array();
    }


}
