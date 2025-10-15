<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

		// Halaman laporan surat mahasiswa untuk pimpinan
		public function laporan_surat_mahasiswa() {
			$this->load->model('Surat_mahasiswa_model');
			$data['title'] = 'Laporan Surat Mahasiswa';
			$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

			// Ambil filter dari GET
			$periode = $this->input->get('periode');
			$tahun = $this->input->get('tahun');
			$bulan = $this->input->get('bulan');
			$minggu = $this->input->get('minggu');
			$semester = $this->input->get('semester');

			$data['periode'] = $periode;
			$data['tahun'] = $tahun;
			$data['bulan'] = $bulan;
			$data['minggu'] = $minggu;
			$data['semester'] = $semester;

			$data['surat_mahasiswa'] = $this->Surat_mahasiswa_model->getLaporanSuratMahasiswa($periode, $tahun, $bulan, $minggu, $semester);

			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_topbar', $data);
			$this->load->view('templates/admin_sidebar', $data);
			$this->load->view('laporan/laporan_surat_mahasiswa', $data);
			$this->load->view('templates/admin_footer', $data);
		}
}