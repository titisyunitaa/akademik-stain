<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['jenissurat'] = $this->db->get('master_jenis_surat')->result_array();

		$this->load->view('templates/navbar');
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer');
	}

	
	

	
	

    
}
