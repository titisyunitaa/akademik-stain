<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

    public function __construct(){
        parent::__construct();
        is_logged_in();
    }

    public function index(){

        $data['title'] = 'Profile Saya';

        //mengambil data dari session 
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();
        
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('user/index',$data);
        $this->load->view('templates/admin_footer',$data);



    }
}