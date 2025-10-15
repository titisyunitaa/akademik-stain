<?php
class Unduhan_model extends CI_Model {
    public function getTotalDokumen() {
        return $this->db->count_all('dokumen'); // hitung semua baris di tabel dokumen
    }
}
