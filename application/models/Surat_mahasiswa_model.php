
<?php
class Surat_mahasiswa_model extends CI_Model {


    

    public function getAllPengajuan(){
       
        $query = "SELECT `pengajuan_surat`.*,`pengajuan_surat`.`id` AS `id_pengajuan`, 
                        `pengajuan_surat`.`nama_mhs`, `pengajuan_surat`.`nim_mhs`, 
                        `pengajuan_surat`.`created_at`, `pengajuan_surat`.`status`, 
                        `master_jenis_surat`.`jenis_surat`, `master_prodi`.`nama_prodi` 
                        FROM `pengajuan_surat` 
                        JOIN `master_jenis_surat` ON `pengajuan_surat`.`jenis_surat_id` = `master_jenis_surat`.`id`
                        JOIN `master_prodi` ON `pengajuan_surat`.`prodi_id` = `master_prodi`.`id` 
                        ORDER BY `pengajuan_surat`.`created_at` DESC;
        ";

        return $this->db->query($query)->result_array();
    }

    public function getDetailSuratById($id){
    $this->db->select('pengajuan_surat.*, master_jenis_surat.jenis_surat, master_prodi.nama_prodi, 
    dpspp.judul_proposal, dpspp.tempat_penelitian as tempat_penelitian_pra, dpspp.kepada as kepada_pra, dpsis.judul_skripsi, dpsis.tempat_penelitian as tempat_penelitian_izin, dpsis.kepada as kepada_izin');
        $this->db->from('pengajuan_surat');
        $this->db->join('master_jenis_surat', 'pengajuan_surat.jenis_surat_id = master_jenis_surat.id');
        $this->db->join('master_prodi', 'pengajuan_surat.prodi_id = master_prodi.id');
        // LEFT JOIN agar field tetap null jika bukan pra penelitian
        $this->db->join('detail_pengajuan_surat_pra_penelitian dpspp', 'pengajuan_surat.id = dpspp.pengajuan_id', 'left');
        $this->db->join('detail_pengajuan_surat_izin_penelitian_skripsi dpsis', 'pengajuan_surat.id = dpsis.pengajuan_id', 'left');
        $this->db->where('pengajuan_surat.id', $id);
        $row = $this->db->get()->row_array();
        // Gabungkan field kepada ke $row['kepada'] sesuai jenis surat
        if (isset($row['jenis_surat'])) {
            $jenis = strtolower($row['jenis_surat']);
            if ($jenis === 'pra penelitian' || $jenis === 'surat permohonan pra penelitian skripsi') {
                $row['kepada'] = $row['kepada_pra'];
            } elseif ($jenis === 'izin penelitian' || $jenis === 'surat permohonan izin penelitian skripsi') {
                $row['kepada'] = $row['kepada_izin'];
            }
        }
        return $row;
    }

    public function getDetailDokumenById($id){
        $this->db->select('nama_file, jenis_file, path_file');
        $this->db->from('pengajuan_berkas');
        $this->db->where('pengajuan_id', $id);
        $query = $this->db->get();

        // Kembalikan array dokumen atau array kosong jika tidak ada
        return $query->result_array();
    }

     public function simpan($data) {
        return $this->db->insert('pengajuan_aktif_kuliah', $data);
    }

        // Ambil data surat mahasiswa berdasarkan filter periode
        public function getLaporanSuratMahasiswa($periode = null, $tahun = null, $bulan = null, $minggu = null, $semester = null) {
        $this->db->select('pengajuan_surat.*, master_jenis_surat.jenis_surat, master_prodi.nama_prodi');
        $this->db->from('pengajuan_surat');
        $this->db->join('master_jenis_surat', 'pengajuan_surat.jenis_surat_id = master_jenis_surat.id');
        $this->db->join('master_prodi', 'pengajuan_surat.prodi_id = master_prodi.id');
        $this->db->where('pengajuan_surat.status', 'selesai');

        if ($periode === 'minggu' && $tahun && $bulan && $minggu) {
            // Filter per minggu
            $start = date('Y-m-d', strtotime($tahun.'-'.$bulan.'-01 +'.($minggu-1).' week'));
            $end = date('Y-m-d', strtotime($start.' +6 days'));
            $this->db->where('DATE(pengajuan_surat.created_at) >=', $start);
            $this->db->where('DATE(pengajuan_surat.created_at) <=', $end);
        } elseif ($periode === 'bulan' && $tahun && $bulan) {
            // Filter per bulan
            $this->db->where('YEAR(pengajuan_surat.created_at)', $tahun);
            $this->db->where('MONTH(pengajuan_surat.created_at)', $bulan);
        } elseif ($periode === 'semester' && $tahun && $semester) {
            // Filter per semester
            if ($semester == 1) {
                $this->db->where('MONTH(pengajuan_surat.created_at) >=', 1);
                $this->db->where('MONTH(pengajuan_surat.created_at) <=', 6);
            } else {
                $this->db->where('MONTH(pengajuan_surat.created_at) >=', 7);
                $this->db->where('MONTH(pengajuan_surat.created_at) <=', 12);
            }
            $this->db->where('YEAR(pengajuan_surat.created_at)', $tahun);
        } elseif ($periode === 'tahun' && $tahun) {
            // Filter per tahun
            $this->db->where('YEAR(pengajuan_surat.created_at)', $tahun);
        }

        $this->db->order_by('pengajuan_surat.created_at', 'DESC');
        return $this->db->get()->result_array();
    }
}
