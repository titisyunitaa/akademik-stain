<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unduhan extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navbar');
		$this->load->view('unduhan/index');
		$this->load->view('templates/footer');
	}

    
	
	

    
}
