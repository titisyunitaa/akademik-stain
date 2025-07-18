<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_surat extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->view('templates/navbar');
	// 	$this->load->view('layanan_surat/index');
	// 	$this->load->view('templates/footer');
	// }

    public function suratAktifKuliah()
	{
		$this->load->view('templates/navbar');
		$this->load->view('layanan_surat/surat-aktif-kuliah');
		$this->load->view('templates/footer');
	}
	
	public function index()
	{
		$this->load->view('templates/navbar');
		$this->load->view('layanan_surat/index');
		$this->load->view('templates/footer');
	}

    
}
