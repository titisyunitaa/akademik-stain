<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller 
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        is_logged_in();
    }

    public function index(){

        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();
        
        $data['title'] = 'Portal Layanan Akademik Mahasiswa';
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('templates/admin_footer',$data);
    }

    public function daftar_wisuda(){
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();
        
        $data['title'] = 'Pendaftaran Wisuda';
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('mahasiswa/daftar_wisuda',$data);
        $this->load->view('templates/admin_footer',$data);
    }
}