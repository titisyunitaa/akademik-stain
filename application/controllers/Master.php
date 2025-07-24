<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function dokumen()
	{
		$data['title'] = 'Dokumen';

        //mengambil data dari session 
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();

        $data['dokumen'] = $this->db->get('dokumen')->result_array();
        
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('master/dokumen',$data);
        $this->load->view('templates/admin_footer',$data);
	}

    

	

	

    
}
