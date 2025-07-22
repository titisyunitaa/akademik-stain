<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller 
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Superadmin_model');
        is_logged_in();
    }
    
    public function index(){

        $data['title'] = 'Dashboard';

        //mengambil data dari session 
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();
        
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('superadmin/index',$data);
        $this->load->view('templates/admin_footer',$data);

    }

    public function role(){

        $data['title'] = 'Role';

        //mengambil data dari session 
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();
        
        $this->form_validation->set_rules('role','Role','required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/admin_header',$data);
            $this->load->view('templates/admin_topbar',$data);
            $this->load->view('templates/admin_sidebar',$data);
            $this->load->view('superadmin/role',$data);
            $this->load->view('templates/admin_footer',$data);
        }else{
            $this->Superadmin_model->tambahRole();
            $this->session->set_flashdata('message','<div class = "alert
            alert-success" role="alert"> Sub Menu Baru Berhasil Ditambahkan! </div>');
            redirect('superadmin/role');
        }
        

    }

    public function roleAccess($role_id){

        $data['title'] = 'Role Akses';

        //mengambil data dari session 
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();

        $data['role'] = $this->db->get_where('user_role',['id' => $role_id])->row_array();
        
        //tidak menampilkan menu superadmin
        $this->db->where('id !=',1);
        $data['menu'] = $this->db->get('user_menu')->result_array();
        

        if($this->form_validation->run()==false){
            $this->load->view('templates/admin_header',$data);
            $this->load->view('templates/admin_topbar',$data);
            $this->load->view('templates/admin_sidebar',$data);
            $this->load->view('superadmin/role-access',$data);
            $this->load->view('templates/admin_footer',$data);
        }else{
            // $this->Superadmin_model->tambahRole();
            $this->session->set_flashdata('message','<div class = "alert
            alert-success" role="alert"> Sub Menu Baru Berhasil Ditambahkan! </div>');
            redirect('superadmin/role');
        }
        

    }

    public function changeaccess(){
        $menuId = $this->input->post('menuId');
        $roleId = $this->input->post('roleId');

        $data = [
            'role_id' => $roleId,
            'menu_id' => $menuId
        ];

        $result = $this->db->get_where('user_access_menu',$data);

        if($result->num_rows() < 1){
            $this->db->insert('user_access_menu',$data);
        }else{
            $this->db->delete('user_access_menu',$data);
        }

        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Akses Berubah</div>');
    }

}