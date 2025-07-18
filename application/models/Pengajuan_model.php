<?php
class Pengajuan_model extends CI_Model {

    //aktif kuliah
    public function simpan($data) {
        return $this->db->insert('pengajuan_aktif_kuliah', $data);
    }
}
