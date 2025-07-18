<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navbar');
		$this->load->view('berita/index');
		$this->load->view('templates/footer');
	}

    public function detailberita()
	{
		$this->load->view('templates/navbar');
		$this->load->view('berita/detailberita');
		$this->load->view('templates/footer');
	}

	

	

    
}
