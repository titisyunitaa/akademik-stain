    
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        is_logged_in();
    }

    public function index(){

        $data['title'] = 'Dashboard';

        //mengambil data dari session 
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();
        
        $data['menunggu_verifikasi'] = $this->User_model->getCountMenungguVerifikasi();
        $data['diproses'] = $this->User_model->getCountDiproses();
        $data['ditolak'] = $this->User_model->getCountDitolak();
        $data['total'] = $this->User_model->getCountTotalSurat();
        $data['pengajuan_baru'] = $this->User_model->getPengajuanBaru();


        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('user/index',$data);
        $this->load->view('templates/admin_footer',$data);

    }

   
}