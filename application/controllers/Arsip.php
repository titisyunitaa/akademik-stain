<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Arsip_model');
	}

	public function index() {
		$data['title'] = 'Arsip Surat Selesai';
		$data['user'] = $this->db->get_where('users',['username' => $this->session->userdata('username')])->row_array();
		$data['arsip_selesai'] = $this->Arsip_model->getSuratSelesai();
		$this->load->view('templates/admin_header',$data);
		$this->load->view('templates/admin_topbar',$data);
		$this->load->view('templates/admin_sidebar',$data);
		$this->load->view('arsip/index',$data);
		$this->load->view('templates/admin_footer',$data);
	}

	

    
	

	

    
}
