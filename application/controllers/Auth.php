<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index(){

		if($this->session->userdata('username')){
			redirect('user');
		}

		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()==false){
			$data['judul'] = 'Halaman Login';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
		}else{
			//validasi sukses
			$this->_login();
		}
		
	}
    
    private function _login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		//select * user where username = $username
		$user = $this->db->get_where('users',['username' => $username])->row_array();
		// var_dump($user);
		// die();

		//jika usernya ada
		if($user){
			//usernya ada dan aktif
			if($user['is_active']==1){
				//cek password
				if(password_verify($password,$user['password'])){
					$data=[
						'username' => $user['username'],
						'role_id' =>$user['role_id']
					];

					//menyimpan data ke dalam session
					$this->session->set_userdata($data);
					if($user['role_id'] == 1){
						redirect('user/index');
					}elseif($user['role_id'] == 2){
						redirect('user/index');
					}elseif($user['role_id'] == 5){
						redirect('laporan/laporan_surat_mahasiswa');
					}elseif($user['role_id'] == 7){
						redirect('laporan/laporan_surat_mahasiswa');
					}elseif($user['role_id'] == 8){
						redirect('mahasiswa/index');
					}

					var_dump($this->session->userdata()); die;
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
							Password Anda Salah
							</div>');
						redirect('auth');
				}

			}else{
				//usernya tidak aktif atau is_activenya 0
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
							username ini belum diaktivasi!
							</div>');
			redirect('auth');
			}
		}else{
			//tidak ada user dg username itu
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
							username Tidak Terdaftar!
							</div>');
			redirect('auth');
		}
	}

    public function logout(){

		//membersihkan session
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
							Kamu berhasil Logout!
							</div>');
		redirect('auth');
	}

	public function blocked(){
		$this->load->view('errors/html/error_404');
	}



	

    
}
