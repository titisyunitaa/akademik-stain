<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unduhan extends CI_Controller {

	public function index()
	{
		$this->load->model('Unduhan_model');
		$data['totalDokumen'] = $this->Unduhan_model->getTotalDokumen();

		// Ambil semua dokumen
		$all = $this->db->get('dokumen')->result_array();
		// Kelompokkan dokumen per kategori
		$dokumen = [];
		foreach($all as $d) {
			$dokumen[$d['kategori']][] = $d;
		}
		$data['dokumen'] = $dokumen;



		// Hitung total download
		$data['totalDownload'] = $this->db->select_sum('download_count')->get('dokumen')->row()->download_count ?? 0;

		$this->load->view('templates/navbar');
		$this->load->view('unduhan/index', $data);
		$this->load->view('templates/footer');
	}

	
	
	

	
}
