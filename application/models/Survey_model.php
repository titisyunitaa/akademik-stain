<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_model extends CI_Model {
    public function insert($data) {
        return $this->db->insert('survey_kepuasan', $data);
    }

   

     public function getAllSurveys(){
       
         $this->db->select('
                            s.id AS survey_id,
                            s.created_at,
                            CONCAT(s.kualitas, "/5") AS nilai_kualitas,
                            CONCAT(s.kecepatan, "/5") AS nilai_kecepatan,
                            CONCAT(s.kemudahan, "/5") AS nilai_kemudahan,
                            CONCAT(s.kejelasan, "/5") AS nilai_kejelasan,
                            CONCAT(s.keandalan, "/5") AS nilai_keandalan,
                            CONCAT(s.kepuasan, "/5") AS nilai_kepuasan,
                            s.saran,
                            p.nama_mhs,
                            p.nim_mhs,
                            p.nomor_surat,
                            mp.nama_prodi,
                            mjs.jenis_surat
                        ');
    $this->db->from('survey_kepuasan s');
    $this->db->join('pengajuan_surat p', 's.pengajuan_id = p.id');
    $this->db->join('master_prodi mp', 'p.prodi_id = mp.id');
    $this->db->join('master_jenis_surat mjs', 'p.jenis_surat_id = mjs.id');
    $this->db->order_by('s.created_at', 'DESC');

    return $this->db->get()->result_array();
    }

    /**
     * Ambil distribusi nilai untuk setiap kategori survey
     * Output: [ 'kualitas' => [jumlah_1, jumlah_2, ..., jumlah_5], ... ]
     */
    public function getDistribusiChart() {
        $kategori = ['kualitas', 'kecepatan', 'kemudahan', 'kejelasan', 'keandalan', 'kepuasan'];
        $result = [];
        foreach ($kategori as $kat) {
            $data = [];
            for ($i = 1; $i <= 5; $i++) {
                $this->db->where($kat, $i);
                $data[$i] = $this->db->count_all_results('survey_kepuasan');
            }
            $result[$kat] = $data;
        }
        return $result;
    }
}
