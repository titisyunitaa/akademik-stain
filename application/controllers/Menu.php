<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Menu_model');

        is_logged_in();
    }
    
    public function index()
	{
		$data['title'] = 'Menu Management';

        //mengambil data dari session 
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();
        
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->form_validation->set_rules('menu','Menu', 'required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/admin_header',$data);
            $this->load->view('templates/admin_topbar',$data);
            $this->load->view('templates/admin_sidebar',$data);
            $this->load->view('menu/index',$data);
            $this->load->view('templates/admin_footer',$data);
        }else{
            $this->db->insert('user_menu',[
                'menu' => $this->input->post('menu')
            ]);
            $this->session->set_flashdata('message','<div class = "alert
            alert-success" role="alert"> Menu Baru Berhasil Ditambahkan! </div>');
            redirect('menu');
        }
	}
	
    public function delete($id){
        $this->Menu_model->deleteMenu($id);

        $this->session->set_flashdata('message','<div class = "alert
        alert-success" role="alert"> Menu Berhasil dihapus! </div>');
        redirect('menu');
    }

    public function edit($id){
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if($this->form_validation->run() == false){
            redirect('menu');
        }else{
            $data = [
                'menu' => $this->input->post('menu')
            ];

            $this->Menu_model->editMenu($id,$data);

            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
                            Data Menu Berhasil Diubah!
                            </div>');
            redirect('menu');
        }
    }

    public function submenu(){
        $data['title'] = 'Sub Menu Management';

        //mengambil data dari session 
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();
        
        $data['submenu'] = $this->Menu_model->getAllSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu_id','Menu', 'required');
        $this->form_validation->set_rules('title','Judul', 'required');
        $this->form_validation->set_rules('url','URL', 'required');
        $this->form_validation->set_rules('icon','Icon', 'required');
        $this->form_validation->set_rules('is_active','Aktif', 'required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/admin_header',$data);
            $this->load->view('templates/admin_topbar',$data);
            $this->load->view('templates/admin_sidebar',$data);
            $this->load->view('menu/submenu',$data);
            $this->load->view('templates/admin_footer',$data);
        }else{

            $this->Menu_model->tambahSubMenu();
            $this->session->set_flashdata('message','<div class = "alert
            alert-success" role="alert"> Sub Menu Baru Berhasil Ditambahkan! </div>');
            redirect('menu/submenu');
        }
    }

    public function deleteSubMenu($id){
        $this->Menu_model->deleteSubMenu($id);

        $this->session->set_flashdata('message','<div class = "alert
        alert-success" role="alert"> Menu Berhasil dihapus! </div>');
        redirect('menu/submenu');
    }

    public function ubahSubmenu($id){

        $this->form_validation->set_rules('menu_id','Menu', 'required');
        $this->form_validation->set_rules('title','Judul', 'required');
        $this->form_validation->set_rules('url','URL', 'required');
        $this->form_validation->set_rules('icon','Icon', 'required');
        $this->form_validation->set_rules('is_active','Aktif', 'required');

        if($this->form_validation->run() == false){
            redirect('menu/submenu');
        }else{

            $this->Menu_model->updateSubMenu($id);

            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
                            Data Sub Menu Berhasil Diubah!
                            </div>');
            redirect('menu/submenu');
        }
    }
    
}
