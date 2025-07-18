<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navbar');
		$this->load->view('survey/index');
		$this->load->view('templates/footer');
	}

    
	
	

    
}
