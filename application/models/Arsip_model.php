<?php
class Arsip_model extends CI_Model {
	public function getSuratSelesai() {
	$this->db->select('ps.id, ps.nama_mhs, ps.nomor_surat, ps.nim_mhs, ps.created_at, ps.status, mjs.jenis_surat, mp.nama_prodi, ps.file_surat_pdf');
		$this->db->from('pengajuan_surat ps');
		$this->db->join('master_jenis_surat mjs', 'ps.jenis_surat_id = mjs.id');
		$this->db->join('master_prodi mp', 'ps.prodi_id = mp.id');
		$this->db->where('ps.status', 'selesai');
		$this->db->order_by('ps.created_at', 'DESC');
		return $this->db->get()->result_array();
	}
	public function getDokumenSelesaiByPengajuan($pengajuan_id) {
		$this->db->select('file_surat_pdf');
		$this->db->from('pengajuan_surat');
		$this->db->where('id', $pengajuan_id);
		$result = $this->db->get()->row_array();
		// Kembalikan array dengan nama dan path file jika ada
		if ($result && !empty($result['file_surat_pdf'])) {
			return [
				[
					'nama_file' => basename($result['file_surat_pdf']),
					'path_file' => $result['file_surat_pdf']
				]
			];
		} else {
			return [];
		}
	}
}
// ...existing code...