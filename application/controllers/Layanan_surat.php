
	
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_surat extends CI_Controller {


	public function index()
	{
		$data['jenissurat'] = $this->db->get('master_jenis_surat')->result_array();

		$this->load->view('templates/navbar');
		$this->load->view('layanan_surat/index',$data);
		$this->load->view('templates/footer');
	}

	public function detail($jenis_id)
	{
		$data['jenissurat'] = $this->db->get_where('master_jenis_surat', [
								'id' => $jenis_id
								])->row_array();
		$data['prodi'] = $this->db->get('master_prodi')->result_array();
		
		
		 // Load view berdasarkan jenis surat
		if ($jenis_id == 5) {
			$this->load->view('templates/navbar');
			$this->load->view('layanan_surat/surat-aktif-kuliah', $data);
			$this->load->view('templates/footer');
		}  elseif ($jenis_id == 8) {
			$this->load->view('templates/navbar');
			$this->load->view('layanan_surat/surat_pra_penelitian', $data);
			$this->load->view('templates/footer');
		}elseif ($jenis_id == 9) {
			$this->load->view('templates/navbar');
			$this->load->view('layanan_surat/surat_izin_penelitian_skripsi', $data);
			$this->load->view('templates/footer');
		}
	}
	
	public function suratAktifKuliah()
	{
		$data['prodi'] = $this->db->get('master_prodi')->result_array();
		$data['jenissurat'] = $this->db->get('master_jenis_surat')->result_array();

		$this->load->view('templates/navbar');
		$this->load->view('layanan_surat/suratAktif',$data);
		$this->load->view('templates/footer');
	}

	public function store_pengajuan(){

	// 🌐 Validasi Input
		$this->form_validation->set_rules('nama_mhs', 'Nama Mahasiswa', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('nim_mhs', 'NIM Mahasiswa', 'required|numeric');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('jalan', 'Alamat Jalan', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('kota', 'Kota', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('prodi_id', 'Program Studi', 'required|numeric');
		$this->form_validation->set_rules('semester', 'Semester', 'required|numeric');
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|htmlspecialchars');
		$this->form_validation->set_rules('semester', 'Semester', 'required|numeric');
		$this->form_validation->set_rules('keperluan_surat', 'Keperluan Surat', 'required|htmlspecialchars');
		$this->form_validation->set_rules('tahun_akademik_awal', 'Tahun Awal', 'required|numeric');
		$this->form_validation->set_rules('tahun_akademik_akhir', 'Tahun Akhir', 'required|numeric');

	$jenis_id =  $this->input->post('jenis_surat_id');
	if ($this->form_validation->run() == FALSE) {
		$this->session->set_flashdata('error', validation_errors());
		// Simpan inputan ke session agar tidak hilang
		$this->session->set_flashdata('old_input', $this->input->post());
		redirect('layanan_surat/detail/' . $jenis_id);
		return;
	}
	// 🔖 Simpan Data Pengajuan Surat
	// Tentukan prefix kode resi berdasarkan jenis surat
	$jenis_id = $this->input->post('jenis_surat_id');

	// Mulai transaksi DB
    $this->db->trans_begin();

	$prefix_resi = '';
	if ($jenis_id == 5) {
		$prefix_resi = 'AK'; // Aktif Kuliah
	} elseif ($jenis_id == 6) {
		$prefix_resi = 'CK'; // Cuti Kuliah
	} else {
		$prefix_resi = 'SR'; // Default/Surat lain
	}
	$kode_resi = $prefix_resi . '-' . date('YmdHis');
	$data_pengajuan = [
		'kode_resi' => $kode_resi,
		'jenis_surat_id' => $jenis_id,
		'prodi_id' => $this->input->post('prodi_id'),
		'nama_mhs' => $this->input->post('nama_mhs'),
		'nim_mhs' => $this->input->post('nim_mhs'),
		'tempat_lahir' => $this->input->post('tempat_lahir'),
		'tanggal_lahir' => $this->input->post('tanggal_lahir'),
		'jalan' => $this->input->post('jalan'),
		'kelurahan' => $this->input->post('kelurahan'),
		'kecamatan' => $this->input->post('kecamatan'),
		'kota' => $this->input->post('kota'),
		'semester' => $this->input->post('semester'),
		'keperluan_surat' => $this->input->post('keperluan_surat'),
		'no_hp' => $this->input->post('no_hp'),
		'email' => $this->input->post('email'),
		'tahun_akademik_awal' => $this->input->post('tahun_akademik_awal'),
		'tahun_akademik_akhir' => $this->input->post('tahun_akademik_akhir'),
		'status' => 'menunggu verifikasi',
	'created_at' => (new DateTime('now', new DateTimeZone('Asia/Jakarta')))->format('Y-m-d H:i:s'),
	];


	$this->db->insert('pengajuan_surat', $data_pengajuan);
	$pengajuan_id = $this->db->insert_id();

	// 📝 Simpan log status pengajuan surat
	$this->db->insert('log_status_surat', [
		'pengajuan_id' => $pengajuan_id,
		'status' => 'menunggu verifikasi',
		'timestamp' => (new DateTime('now', new DateTimeZone('Asia/Jakarta')))->format('Y-m-d H:i:s'),
		'keterangan' => 'Pengajuan surat masuk dan menunggu verifikasi admin'
	]);

	// 📁 Upload Dokumen Persyaratan
    $allowed_ext = ['pdf', 'jpg', 'jpeg', 'png'];
    $max_size = 2 * 1024 * 1024;

	// Buat folder berdasarkan jenis surat dan nama+nim
	$nama_mhs = preg_replace('/[^A-Za-z0-9_\-]/', '_', $this->input->post('nama_mhs'));
	$nim_mhs = preg_replace('/[^A-Za-z0-9]/', '', $this->input->post('nim_mhs'));
	// Ambil nama surat dari master_jenis_surat
	$jenis_surat_row = $this->db->get_where('master_jenis_surat', ['id' => $jenis_id])->row_array();
	$nama_surat = isset($jenis_surat_row['jenis_surat']) ? preg_replace('/[^A-Za-z0-9_\-]/', '_', strtolower($jenis_surat_row['jenis_surat'])) : 'surat';
	$folder_upload = './uploads/berkas/' . $nama_surat . '/' . $nama_mhs . '_' . $nim_mhs;
	if (!is_dir($folder_upload)) {
		mkdir($folder_upload, 0755, true);
	}

	// Validasi: semua dokumen wajib diupload
	$dokumen_names = isset($_FILES['dokumen']['name']) ? $_FILES['dokumen']['name'] : [];
	$dokumen_required = isset($_POST['nama_dokumen']) ? $_POST['nama_dokumen'] : [];
	$dokumen_kurang = false;
	if (is_array($dokumen_names) && is_array($dokumen_required)) {
		foreach ($dokumen_required as $i => $label) {
			if (!isset($dokumen_names[$i]) || empty($dokumen_names[$i])) {
				$dokumen_kurang = true;
				break;
			}
		}
	}
	if ($dokumen_kurang) {
		$this->session->set_flashdata('error', 'Lengkapi berkas persyaratan yang wajib diupload!');
		$this->session->set_flashdata('old_input', $this->input->post());
		redirect('layanan_surat/detail/' . $jenis_id);
		return;
	}

	if (!empty($_FILES['dokumen']['name']) && is_array($_FILES['dokumen']['name'])) {
		foreach ($_FILES['dokumen']['name'] as $key => $file_name) {
			if (empty($file_name) || $_FILES['dokumen']['error'][$key] == 4) {
				continue;
			}

			$jenis_file = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
			$size = $_FILES['dokumen']['size'][$key];
			$nama_label = preg_replace('/[^A-Za-z0-9_\-() ]/', '_', $_POST['nama_dokumen'][$key]);

			if (!in_array($jenis_file, $allowed_ext) || $size > $max_size) {
				$this->session->set_flashdata('error', "File '$file_name' tidak valid atau melebihi batas ukuran.");
				redirect('layanan_surat/detail/' . $jenis_id);
				return;
			}

			$config = [
				'upload_path' => $folder_upload,
				'allowed_types' => implode('|', $allowed_ext),
				'encrypt_name' => TRUE,
				'max_size' => $max_size
			];

			$this->load->library('upload', $config);

			$_FILES['file_temp'] = [
				'name' => $_FILES['dokumen']['name'][$key],
				'type' => $_FILES['dokumen']['type'][$key],
				'tmp_name' => $_FILES['dokumen']['tmp_name'][$key],
				'error' => $_FILES['dokumen']['error'][$key],
				'size' => $_FILES['dokumen']['size'][$key]
			];

			if ($this->upload->do_upload('file_temp')) {
				$uploaded = $this->upload->data();
				$path_file = 'uploads/berkas/' . $nama_surat . '/' . $nama_mhs . '_' . $nim_mhs . '/' . $uploaded['file_name'];

				$this->db->insert('pengajuan_berkas', [
                    'pengajuan_id' => $pengajuan_id,
                    'nama_file' => $nama_label,
                    'path_file' => $path_file,
                    'jenis_file' => $jenis_file
                ]);
            } else {
                $error = $this->upload->display_errors('', '');
                $this->session->set_flashdata('error', "Gagal upload file '$file_name': $error");
                redirect('layanan_surat/detail/' . $jenis_id);
                return;
            }
        }
    }

    // Commit transaksi kalau semua sukses
    if ($this->db->trans_status() === FALSE) {
        $this->db->trans_rollback();
        $this->session->set_flashdata('error', 'Terjadi kesalahan, pengajuan dibatalkan.');
        redirect('layanan_surat/detail/' . $jenis_id);
    } else {
		$this->db->trans_commit();
		// Kirim WhatsApp ke admin via Fonnte jika surat aktif kuliah
		if ($jenis_id == 5) {
			$admin_wa = '6281217602226'; // Ganti dengan nomor admin
			$nama = $this->input->post('nama_mhs');
			$nim = $this->input->post('nim_mhs');
			$pesan = "Ada pengajuan surat aktif kuliah baru dari $nama ($nim). Silakan cek aplikasi SIPENA STAIN KEPRI.";
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => 'https://api.fonnte.com/send',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS => http_build_query([
					'target' => $admin_wa,
					'message' => $pesan,
				]),
				CURLOPT_HTTPHEADER => array(
					'Authorization: AQwMuBduYAVKPG4KQi9d', // Ganti dengan token Fonnte Anda
				),
			));
			$response = curl_exec($curl);
			// Log response Fonnte ke file untuk debug
			file_put_contents(APPPATH.'logs/fonnte_wa_log.txt', date('Y-m-d H:i:s')."\n".$response."\n\n", FILE_APPEND);
			curl_close($curl);
		}
		$this->session->set_flashdata('sukses', "Pengajuan berhasil! Kode Resi Anda: <strong>{$kode_resi}</strong>");
		redirect('layanan_surat/hasil_pengajuan');
    }

	}

	public function hasil_pengajuan(){
		$this->load->view('templates/navbar');
		$this->load->view('layanan_surat/hasil_pengajuan');
		$this->load->view('templates/footer');
	}


	public function simpan_pengajuan_surat_pra_penelitian() {
		// Validasi: semua dokumen wajib diupload
		$dokumen_names = isset($_FILES['dokumen']['name']) ? $_FILES['dokumen']['name'] : [];
		$dokumen_required = isset($_POST['nama_dokumen']) ? $_POST['nama_dokumen'] : [];
		$dokumen_kurang = false;
		if (is_array($dokumen_names) && is_array($dokumen_required)) {
			foreach ($dokumen_required as $i => $label) {
				if (!isset($dokumen_names[$i]) || empty($dokumen_names[$i])) {
					$dokumen_kurang = true;
					break;
				}
			}
		}
		if ($dokumen_kurang) {
			$this->session->set_flashdata('error', 'Lengkapi berkas persyaratan yang wajib diupload!');
			redirect('layanan_surat/detail/' . $jenis_id);
			return;
		}
		// Validasi input
		$this->form_validation->set_rules('nama_mhs', 'Nama Mahasiswa', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('nim_mhs', 'NIM Mahasiswa', 'required|numeric');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('jalan', 'Alamat Jalan', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('kota', 'Kota', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('prodi_id', 'Program Studi', 'required|numeric');
		$this->form_validation->set_rules('semester', 'Semester', 'required|numeric');
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|htmlspecialchars');
		$this->form_validation->set_rules('tahun_akademik_awal', 'Tahun Akademik Awal', 'required|numeric');
		$this->form_validation->set_rules('tahun_akademik_akhir', 'Tahun Akademik Akhir', 'required|numeric');
		$this->form_validation->set_rules('judul_proposal', 'Judul Proposal', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('tempat_penelitian', 'Tempat Penelitian', 'required|trim|htmlspecialchars');

		$jenis_id = $this->input->post('jenis_surat_id');
		// Mulai transaksi DB
    	$this->db->trans_begin();
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			$this->session->set_flashdata('old_input', $this->input->post());
			redirect('layanan_surat/detail/' . $jenis_id);
			return;
		}

		// Simpan ke pengajuan_surat
		$prefix_resi = 'PPN'; // Pra Penelitian
		$kode_resi = $prefix_resi . '-' . date('YmdHis');
		$data_pengajuan = [
			'kode_resi' => $kode_resi,
			'jenis_surat_id' => $jenis_id,
			'prodi_id' => $this->input->post('prodi_id'),
			'nama_mhs' => $this->input->post('nama_mhs'),
			'nim_mhs' => $this->input->post('nim_mhs'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jalan' => $this->input->post('jalan'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kota' => $this->input->post('kota'),
			'semester' => $this->input->post('semester'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email'),
			'tahun_akademik_awal' => $this->input->post('tahun_akademik_awal'),
			'tahun_akademik_akhir' => $this->input->post('tahun_akademik_akhir'),
			'status' => 'menunggu verifikasi',
			'created_at' => date('Y-m-d H:i:s'),
		];
		$this->db->insert('pengajuan_surat', $data_pengajuan);
		$pengajuan_id = $this->db->insert_id();

		// Simpan judul proposal dan tempat penelitian ke detail_pengajuan_surat_pra_penelitian
		$this->db->insert('detail_pengajuan_surat_pra_penelitian', [
			'pengajuan_id' => $pengajuan_id,
			'judul_proposal' => $this->input->post('judul_proposal'),
			'tempat_penelitian' => $this->input->post('tempat_penelitian')
		]);

		// Simpan log status
		$this->db->insert('log_status_surat', [
			'pengajuan_id' => $pengajuan_id,
			'status' => 'menunggu verifikasi',
			'timestamp' => (new DateTime('now', new DateTimeZone('Asia/Jakarta')))->format('Y-m-d H:i:s'),
			'keterangan' => 'Pengajuan surat pra penelitian masuk dan menunggu verifikasi admin'
		]);

		// Upload berkas ke pengajuan_berkas
		$allowed_ext = ['pdf', 'jpg', 'jpeg', 'png'];
		$max_size = 2 * 1024 * 1024;
		$nama_mhs = preg_replace('/[^A-Za-z0-9_\-]/', '_', $this->input->post('nama_mhs'));
		$nim_mhs = preg_replace('/[^A-Za-z0-9]/', '', $this->input->post('nim_mhs'));
		$jenis_surat_row = $this->db->get_where('master_jenis_surat', ['id' => $jenis_id])->row_array();
		$nama_surat = isset($jenis_surat_row['jenis_surat']) ? preg_replace('/[^A-Za-z0-9_\-]/', '_', strtolower($jenis_surat_row['jenis_surat'])) : 'surat';
		$folder_upload = './uploads/berkas/' . $nama_surat . '/' . $nama_mhs . '_' . $nim_mhs;
		if (!is_dir($folder_upload)) mkdir($folder_upload, 0755, true);
		if (!empty($_FILES['dokumen']['name']) && is_array($_FILES['dokumen']['name'])) {
			foreach ($_FILES['dokumen']['name'] as $key => $file_name) {
				if (empty($file_name) || $_FILES['dokumen']['error'][$key] == 4) continue;
				$jenis_file = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
				$size = $_FILES['dokumen']['size'][$key];
				$nama_label = $_POST['nama_dokumen'][$key];
				if (!in_array($jenis_file, $allowed_ext) || $size > $max_size) {
					$this->session->set_flashdata('error', "File '$file_name' tidak valid atau melebihi batas ukuran.");
					redirect('layanan_surat/detail/' . $jenis_id);
					return;
				}
				$config['upload_path'] = $folder_upload;
				$config['allowed_types'] = implode('|', $allowed_ext);
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				$_FILES['file_temp'] = [
					'name' => $_FILES['dokumen']['name'][$key],
					'type' => $_FILES['dokumen']['type'][$key],
					'tmp_name' => $_FILES['dokumen']['tmp_name'][$key],
					'error' => $_FILES['dokumen']['error'][$key],
					'size' => $_FILES['dokumen']['size'][$key]
				];
				if ($this->upload->do_upload('file_temp')) {
					$uploaded = $this->upload->data();
					$path_file = 'uploads/berkas/' . $nama_surat . '/' . $nama_mhs . '_' . $nim_mhs . '/' . $uploaded['file_name'];
					$berkas = [
						'pengajuan_id' => $pengajuan_id,
						'nama_file' => $nama_label,
						'path_file' => $path_file,
						'jenis_file' => $jenis_file
					];
					$this->db->insert('pengajuan_berkas', $berkas);
				} else {
					$error = $this->upload->display_errors('', '');
					$this->session->set_flashdata('error', "Gagal upload file '$file_name': $error");
					redirect('layanan_surat/detail/' . $jenis_id);
					return;
				}
			}
		}

		// Commit transaksi kalau semua sukses
    if ($this->db->trans_status() === FALSE) {
        $this->db->trans_rollback();
        $this->session->set_flashdata('error', 'Terjadi kesalahan, pengajuan dibatalkan.');
        redirect('layanan_surat/detail/' . $jenis_id);
    } else {
		$this->db->trans_commit();
		// Kirim WhatsApp ke admin untuk surat pra penelitian skripsi
		$admin_wa = '6281536821587'; // Ganti dengan nomor admin
		$nama = $this->input->post('nama_mhs');
		$nim = $this->input->post('nim_mhs');
		$judul = $this->input->post('judul_proposal');
		$pesan = "Ada pengajuan surat pra penelitian skripsi baru dari $nama ($nim)\nJudul: $judul. Silakan cek aplikasi SIPENA STAIN KEPRI.";
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://api.fonnte.com/send',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => http_build_query([
				'target' => $admin_wa,
				'message' => $pesan,
			]),
			CURLOPT_HTTPHEADER => array(
				'Authorization: AQwMuBduYAVKPG4KQi9d', // Ganti dengan token Fonnte Anda
			),
		));
		$response = curl_exec($curl);
		file_put_contents(APPPATH.'logs/fonnte_wa_log.txt', date('Y-m-d H:i:s')."\n".$response."\n\n", FILE_APPEND);
		curl_close($curl);
		$this->session->set_flashdata('sukses', "Pengajuan berhasil! Kode Resi Anda: <strong>{$kode_resi}</strong>");
		redirect('layanan_surat/hasil_pengajuan');
    }
	}

	public function simpan_pengajuan_surat_izin_penelitian_skripsi() {
		// Validasi: semua dokumen wajib diupload
		$dokumen_names = isset($_FILES['dokumen']['name']) ? $_FILES['dokumen']['name'] : [];
		$dokumen_required = isset($_POST['nama_dokumen']) ? $_POST['nama_dokumen'] : [];
		$dokumen_kurang = false;
		if (is_array($dokumen_names) && is_array($dokumen_required)) {
			foreach ($dokumen_required as $i => $label) {
				if (!isset($dokumen_names[$i]) || empty($dokumen_names[$i])) {
					$dokumen_kurang = true;
					break;
				}
			}
		}
		if ($dokumen_kurang) {
			$this->session->set_flashdata('error', 'Lengkapi berkas persyaratan yang wajib diupload!');
			$this->session->set_flashdata('old_input', $this->input->post());
			redirect('layanan_surat/detail/' . $jenis_id);
			return;
		}
		// Validasi input
		$this->form_validation->set_rules('nama_mhs', 'Nama Mahasiswa', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('nim_mhs', 'NIM Mahasiswa', 'required|numeric');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('jalan', 'Alamat Jalan', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('kota', 'Kota', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('prodi_id', 'Program Studi', 'required|numeric');
		$this->form_validation->set_rules('semester', 'Semester', 'required|numeric');
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|htmlspecialchars');
		$this->form_validation->set_rules('tahun_akademik_awal', 'Tahun Akademik Awal', 'required|numeric');
		$this->form_validation->set_rules('tahun_akademik_akhir', 'Tahun Akademik Akhir', 'required|numeric');
		$this->form_validation->set_rules('judul_skripsi', 'Judul Skripsi', 'required|trim|htmlspecialchars');
		$this->form_validation->set_rules('tempat_penelitian', 'Tempat Penelitian', 'required|trim|htmlspecialchars');

		$jenis_id = $this->input->post('jenis_surat_id');
		// Mulai transaksi DB
    	$this->db->trans_begin();
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			$this->session->set_flashdata('old_input', $this->input->post());
			redirect('layanan_surat/detail/' . $jenis_id);
			return;
		}

		// Simpan ke pengajuan_surat
		$prefix_resi = 'IPS'; // Izin Penelitian Skripsi
		$kode_resi = $prefix_resi . '-' . date('YmdHis');
		$data_pengajuan = [
			'kode_resi' => $kode_resi,
			'jenis_surat_id' => $jenis_id,
			'prodi_id' => $this->input->post('prodi_id'),
			'nama_mhs' => $this->input->post('nama_mhs'),
			'nim_mhs' => $this->input->post('nim_mhs'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jalan' => $this->input->post('jalan'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kota' => $this->input->post('kota'),
			'semester' => $this->input->post('semester'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email'),
			'tahun_akademik_awal' => $this->input->post('tahun_akademik_awal'),
			'tahun_akademik_akhir' => $this->input->post('tahun_akademik_akhir'),
			'status' => 'menunggu verifikasi',
			'created_at' => date('Y-m-d H:i:s'),
		];
		$this->db->insert('pengajuan_surat', $data_pengajuan);
		$pengajuan_id = $this->db->insert_id();

		// Simpan judul proposal dan tempat penelitian ke detail_pengajuan_surat_pra_penelitian
		$this->db->insert('detail_pengajuan_surat_izin_penelitian_skripsi', [
			'pengajuan_id' => $pengajuan_id,
			'judul_skripsi' => $this->input->post('judul_skripsi'),
			'tempat_penelitian' => $this->input->post('tempat_penelitian')
		]);

		// Simpan log status
		$this->db->insert('log_status_surat', [
			'pengajuan_id' => $pengajuan_id,
			'status' => 'menunggu verifikasi',
			'timestamp' => (new DateTime('now', new DateTimeZone('Asia/Jakarta')))->format('Y-m-d H:i:s'),
			'keterangan' => 'Pengajuan surat izin penelitian skripsi masuk dan menunggu verifikasi admin'
		]);

		// Upload berkas ke pengajuan_berkas
		$allowed_ext = ['pdf', 'jpg', 'jpeg', 'png'];
		$max_size = 2 * 1024 * 1024;
		$nama_mhs = preg_replace('/[^A-Za-z0-9_\-]/', '_', $this->input->post('nama_mhs'));
		$nim_mhs = preg_replace('/[^A-Za-z0-9]/', '', $this->input->post('nim_mhs'));
		$jenis_surat_row = $this->db->get_where('master_jenis_surat', ['id' => $jenis_id])->row_array();
		$nama_surat = isset($jenis_surat_row['jenis_surat']) ? preg_replace('/[^A-Za-z0-9_\-]/', '_', strtolower($jenis_surat_row['jenis_surat'])) : 'surat';
		$folder_upload = './uploads/berkas/' . $nama_surat . '/' . $nama_mhs . '_' . $nim_mhs;
		if (!is_dir($folder_upload)) mkdir($folder_upload, 0755, true);
		if (!empty($_FILES['dokumen']['name']) && is_array($_FILES['dokumen']['name'])) {
			foreach ($_FILES['dokumen']['name'] as $key => $file_name) {
				if (empty($file_name) || $_FILES['dokumen']['error'][$key] == 4) continue;
				$jenis_file = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
				$size = $_FILES['dokumen']['size'][$key];
				$nama_label = $_POST['nama_dokumen'][$key];
				if (!in_array($jenis_file, $allowed_ext) || $size > $max_size) {
					$this->session->set_flashdata('error', "File '$file_name' tidak valid atau melebihi batas ukuran.");
					redirect('layanan_surat/detail/' . $jenis_id);
					return;
				}
				$config['upload_path'] = $folder_upload;
				$config['allowed_types'] = implode('|', $allowed_ext);
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				$_FILES['file_temp'] = [
					'name' => $_FILES['dokumen']['name'][$key],
					'type' => $_FILES['dokumen']['type'][$key],
					'tmp_name' => $_FILES['dokumen']['tmp_name'][$key],
					'error' => $_FILES['dokumen']['error'][$key],
					'size' => $_FILES['dokumen']['size'][$key]
				];
				if ($this->upload->do_upload('file_temp')) {
					$uploaded = $this->upload->data();
					$path_file = 'uploads/berkas/' . $nama_surat . '/' . $nama_mhs . '_' . $nim_mhs . '/' . $uploaded['file_name'];
					$berkas = [
						'pengajuan_id' => $pengajuan_id,
						'nama_file' => $nama_label,
						'path_file' => $path_file,
						'jenis_file' => $jenis_file
					];
					$this->db->insert('pengajuan_berkas', $berkas);
				} else {
					$error = $this->upload->display_errors('', '');
					$this->session->set_flashdata('error', "Gagal upload file '$file_name': $error");
					redirect('layanan_surat/detail/' . $jenis_id);
					return;
				}
			}
		}

		// Commit transaksi kalau semua sukses
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$this->session->set_flashdata('error', 'Terjadi kesalahan, pengajuan dibatalkan.');
			redirect('layanan_surat/detail/' . $jenis_id);
		} else {
			$this->db->trans_commit();
			// Kirim WhatsApp ke admin untuk surat izin penelitian skripsi
			$admin_wa = '6281536821587'; // Ganti dengan nomor admin
			$nama = $this->input->post('nama_mhs');
			$nim = $this->input->post('nim_mhs');
			$judul = $this->input->post('judul_skripsi');
			$pesan = "Ada pengajuan surat izin penelitian skripsi baru dari $nama ($nim)\nJudul: $judul. Silakan cek aplikasi SIPENA STAIN KEPRI.";
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => 'https://api.fonnte.com/send',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS => http_build_query([
					'target' => $admin_wa,
					'message' => $pesan,
				]),
				CURLOPT_HTTPHEADER => array(
					'Authorization: AQwMuBduYAVKPG4KQi9d', // Ganti dengan token Fonnte Anda
				),
			));
			$response = curl_exec($curl);
			file_put_contents(APPPATH.'logs/fonnte_wa_log.txt', date('Y-m-d H:i:s')."\n".$response."\n\n", FILE_APPEND);
			curl_close($curl);
			$this->session->set_flashdata('sukses', "Pengajuan berhasil! Kode Resi Anda: <strong>{$kode_resi}</strong>");
			redirect('layanan_surat/hasil_pengajuan');
		}
	}

		
}
