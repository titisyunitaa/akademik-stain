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

    public function jenissurat(){
        $data['title'] = 'Jenis Surat';
        $data['user'] = $this->db->get_where('users',['username' => $this->session->userdata('username')])->row_array();
        $data['jenissurat'] = $this->db->get('master_jenis_surat')->result_array();

        $this->form_validation->set_rules('jenis_surat','Jenis Surat','required');
        $this->form_validation->set_rules('deskripsi','Deskripsi Surat','required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/admin_header',$data);
            $this->load->view('templates/admin_topbar',$data);
            $this->load->view('templates/admin_sidebar',$data);
            $this->load->view('superadmin/jenissurat',$data);
            $this->load->view('templates/admin_footer',$data);
        }else{
            // Proses upload file
            $file_name = null;
            if (!empty($_FILES['format_surat']['name'])) {
                $config['upload_path'] = './uploads/format_surat/';
                $config['allowed_types'] = 'doc|docx';
                $config['max_size'] = 2048; // 2MB
                $config['file_name'] = time() . '_' . $_FILES['format_surat']['name'];
                if (!is_dir($config['upload_path'])) {
                    mkdir($config['upload_path'], 0777, true);
                }
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('format_surat')) {
                    $upload_data = $this->upload->data();
                    $file_name = $upload_data['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$error.'</div>');
                    redirect('superadmin/jenissurat');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silakan upload file format surat (.doc/.docx)</div>');
                redirect('superadmin/jenissurat');
            }

            // Simpan ke database
            $data_insert = [
                'jenis_surat' => $this->input->post('jenis_surat', true),
                'deskripsi' => $this->input->post('deskripsi', true),
                'format_surat' => $file_name
            ];
            $this->db->insert('master_jenis_surat', $data_insert);
            $this->session->set_flashdata('message','<div class = "alert alert-success" role="alert"> Jenis Surat Baru Berhasil Ditambahkan! </div>');
            redirect('superadmin/jenissurat');
        }
    }

    public function deleteJenisSurat($id){
        //Ambil nama file sebelum hapus
        $jenis = $this->db->get_where('master_jenis_surat', ['id' => $id])->row_array();
        if ($jenis && !empty($jenis['format_surat'])) {
            $file_path = FCPATH . 'uploads/format_surat/' . $jenis['format_surat'];
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
        $this->Superadmin_model->deleteJenisSurat($id);
        $this->session->set_flashdata('message','<div class = "alert alert-success" role="alert"> Jenis Surat Berhasil dihapus! </div>');
        redirect('superadmin/jenissurat');
    }

        public function editJenisSurat($id){
        $data['title'] = 'Edit Jenis Surat';
        $data['user'] = $this->db->get_where('users',['username' => $this->session->userdata('username')])->row_array();
        $data['jenissurat'] = $this->db->get('master_jenis_surat')->result_array();
        $data['edit'] = $this->db->get_where('master_jenis_surat', ['id' => $id])->row_array();

        $this->form_validation->set_rules('jenis_surat','Jenis Surat','required');
        $this->form_validation->set_rules('deskripsi','Deskripsi Surat','required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/admin_header',$data);
            $this->load->view('templates/admin_topbar',$data);
            $this->load->view('templates/admin_sidebar',$data);
            $this->load->view('superadmin/edit_jenissurat',$data);
            $this->load->view('templates/admin_footer',$data);
        }else{
            // Proses upload file jika ada file baru
            $file_name = $data['edit']['format_surat'];
            if (!empty($_FILES['format_surat']['name'])) {
                $config['upload_path'] = './uploads/format_surat/';
                $config['allowed_types'] = 'doc|docx';
                $config['max_size'] = 2048; // 2MB
                $config['file_name'] = time() . '_' . $_FILES['format_surat']['name'];
                if (!is_dir($config['upload_path'])) {
                    mkdir($config['upload_path'], 0777, true);
                }
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('format_surat')) {
                    // Hapus file lama jika ada
                    if (!empty($file_name)) {
                        $old_path = FCPATH . 'uploads/format_surat/' . $file_name;
                        if (file_exists($old_path)) {
                            unlink($old_path);
                        }
                    }
                    $upload_data = $this->upload->data();
                    $file_name = $upload_data['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$error.'</div>');
                    redirect('superadmin/editJenisSurat/'.$id);
                }
            }

            // Update ke database
            $data_update = [
                'jenis_surat' => $this->input->post('jenis_surat', true),
                'deskripsi' => $this->input->post('deskripsi', true),
                'format_surat' => $file_name
            ];
            $this->db->where('id', $id);
            $this->db->update('master_jenis_surat', $data_update);
            $this->session->set_flashdata('message','<div class = "alert alert-success" role="alert"> Jenis Surat Berhasil Diedit! </div>');
            redirect('superadmin/jenissurat');
        }
    }

}