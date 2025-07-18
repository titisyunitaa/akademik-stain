<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navbar');
		$this->load->view('tracking_surat/index');
		$this->load->view('templates/footer');
	}

    
	
	

    
}
