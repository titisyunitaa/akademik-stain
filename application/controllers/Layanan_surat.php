<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_surat extends CI_Controller {

	public function suratAktifKuliah()
	{
		$this->load->view('templates/navbar');
		$this->load->view('layanan_surat/suratAktif');
		$this->load->view('templates/footer');
	}
	

	public function ajukanSuratAktifKuliah()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_mhs', 'Nama', 'required');
		$this->form_validation->set_rules('nim_mhs', 'NIM', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('prodi', 'Prodi', 'required');
		$this->form_validation->set_rules('jalan', 'Jalan', 'required');
		$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		$this->form_validation->set_rules('kota', 'Kota', 'required');
		$this->form_validation->set_rules('semester', 'Semester', 'required');
		$this->form_validation->set_rules('no_hp', 'No.HP', 'required');
		$this->form_validation->set_rules('tahun_akademik_awal', 'Tahun Akademik Awal', 'required');
		$this->form_validation->set_rules('tahun_akademik_akhir', 'Tahun Akademik Akhir', 'required');
		$this->form_validation->set_rules('keperluan_surat', 'Keperluan Surat', 'required');

		

		if ($this->form_validation->run() == FALSE) {
			$this->suratAktifKuliah();
		} else {
			$upload_path = './uploads/surat_aktif_kuliah/';
			$allowed_types = 'jpg|jpeg|png|pdf';
			$max_size = 2048;
			$this->load->library('upload');

			if (!is_dir($upload_path)) {
				mkdir($upload_path, 0777, true);
			}

			$files = ['ukt', 'krs', 'bukti_surat'];
			$uploaded = [];
			$error_upload = '';
			foreach ($files as $file) {
				$config = [
					'upload_path' => $upload_path,
					'allowed_types' => $allowed_types,
					'max_size' => $max_size,
					'encrypt_name' => TRUE
				];
				$this->upload->initialize($config);
				if (!$this->upload->do_upload($file)) {
					$error_upload = $this->upload->display_errors();
					break;
				} else {
					$uploaded[$file] = $this->upload->data('file_name');
				}
			}

			if ($error_upload) {
				$data['error'] = $error_upload;
				$this->load->view('templates/navbar');
				$this->load->view('layanan_surat/surat-aktif-kuliah', $data);
				$this->load->view('templates/footer');
			} else {
				// Generate kode resi unik (misal: AKT-YYYYMMDDHHIISS-RAND4)
				$kode_resi = 'AKT-' . date('YmdHis') . '-' . strtoupper(substr(md5(uniqid(rand(), true)), 0, 4));
				$data = [
					'nama_mhs' => $this->input->post('nama_mhs', true),
					'nim_mhs' => $this->input->post('nim_mhs', true),
					'tempat_lahir' => $this->input->post('tempat_lahir', true),
					'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
					'prodi' => $this->input->post('prodi', true),
					'jalan' => $this->input->post('jalan', true),
					'kelurahan' => $this->input->post('kelurahan', true),
					'kecamatan' => $this->input->post('kecamatan', true),
					'kota' => $this->input->post('kota', true),
					'semester' => $this->input->post('semester', true),
					'no_hp' => $this->input->post('no_hp', true),
					'tahun_akademik_awal' => $this->input->post('tahun_akademik_awal', true),
					'tahun_akademik_akhir' => $this->input->post('tahun_akademik_akhir', true),
					'keperluan_surat' => $this->input->post('keperluan_surat', true),
					'bukti_ukt' => $uploaded['ukt'],
					'bukti_krs' => $uploaded['krs'],
					'bukti_form_ak' => $uploaded['bukti_surat'],
					'kode_resi' => $kode_resi,
					'tanggal_pengajuan' => date('Y-m-d H:i:s'),
				];
				$this->db->insert('pengajuan_aktif_kuliah', $data);

				$this->session->set_flashdata('message', '<div class="alert alert-success">Pengajuan surat aktif kuliah berhasil dikirim!<br>Kode Resi Anda: <strong>' . $kode_resi . '</strong></div>');
				redirect('layanan_surat/suratAktifKuliah');
			}
		}
	}

	public function index()
	{
		$this->load->view('templates/navbar');
		$this->load->view('layanan_surat/index');
		$this->load->view('templates/footer');
	}

	
}
