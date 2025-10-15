<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Pengguna_model');
		is_logged_in();
	}

	public function ubah_password() {
		$data['title'] = 'Ubah Password';
		$data['user'] = $this->db->get_where('users',['username' => $this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('password_lama', 'Password Lama', 'required');
		$this->form_validation->set_rules('password_baru', 'Password Baru', 'required|min_length[6]');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password_baru]');

		if ($this->form_validation->run() == FALSE) {
			// Debug: tampilkan error validasi langsung jika ada
			if (validation_errors()) {
				echo '<div style="padding:20px;background:#fff;color:#c00;font-weight:bold;">VALIDATION ERROR:<br>';
				echo validation_errors();
				echo '</div>';
			}
			$this->load->view('templates/admin_header',$data);
			$this->load->view('templates/admin_topbar',$data);
			$this->load->view('templates/admin_sidebar',$data);
			$this->load->view('pengguna/ubah_password',$data);
			$this->load->view('templates/admin_footer',$data);
		} else {
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password_baru');
			$username = $this->session->userdata('username');
			$user = $this->db->get_where('users', ['username' => $username])->row_array();
			if (!password_verify($password_lama, $user['password'])) {
				$this->session->set_flashdata('error', 'Password lama salah!');
				redirect('pengguna/ubah_password');
			} else {
				$this->Pengguna_model->ubahPassword($username, $password_baru);
				$this->session->set_flashdata('message', 'Password berhasil diubah!');
				$this->session->mark_as_flash('message');
				redirect('pengguna/ubah_password');
			}
		}
	}
}
