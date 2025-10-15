

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {


    public function dokumen()
    {
        $data['title'] = 'Dokumen';

        //mengambil data dari session 
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();

        $data['dokumen'] = $this->db->get('dokumen')->result_array();
        
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('master/dokumen',$data);
        $this->load->view('templates/admin_footer',$data);
    }

        // Fungsi upload dokumen
    public function upload_dokumen()
    {
        // Validasi input
        $kategori = $this->input->post('kategori');
        $title = $this->input->post('title');
        if (empty($kategori) || empty($title)) {
            $this->session->set_flashdata('error', 'Kategori dan Judul wajib diisi.');
            redirect('master/dokumen');
            return;
        }

        // Konfigurasi upload
        $config['upload_path'] = './uploads/dokumen/';
        $config['allowed_types'] = 'pdf|docx|xlsx';
        $config['max_size'] = 4096; // 4MB
        $config['encrypt_name'] = TRUE;

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0755, true);
        }

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('filename')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('master/dokumen');
            return;
        }

        $fileData = $this->upload->data();
        $file_name = $fileData['file_name'];
        $file_path = 'uploads/dokumen/' . $file_name;
        $file_size = $fileData['file_size'];

        // Simpan ke database dokumen
        $data = [
            'kategori' => $kategori,
            'title' => $title,
            'file_path' => $file_path,
            'file_type' => $fileData['file_ext'],
            'file_size' => $file_size,
            'uploaded_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('dokumen', $data);

        $this->session->set_flashdata('message', 'Dokumen berhasil diupload.');
        redirect('master/dokumen');
    }

        // Fungsi edit dokumen
    public function edit_dokumen($id)
    {
        $dokumen = $this->db->get_where('dokumen', ['id' => $id])->row_array();
        if (!$dokumen) {
            $this->session->set_flashdata('error', 'Dokumen tidak ditemukan.');
            redirect('master/dokumen');
            return;
        }

        $kategori = $this->input->post('kategori');
        $title = $this->input->post('title');
        $update_data = [
            'kategori' => $kategori,
            'title' => $title
        ];

        // Jika ada file baru diupload
        if (!empty($_FILES['filename']['name'])) {
            $config['upload_path'] = './uploads/dokumen/';
            $config['allowed_types'] = 'pdf|docx|xlsx';
            $config['max_size'] = 4096;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('filename')) {
                $fileData = $this->upload->data();
                $update_data['file_path'] = $fileData['file_name'];
                $update_data['file_type'] = $fileData['file_ext'];
                $update_data['file_size'] = $fileData['file_size'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('master/dokumen');
                return;
            }
        }

        $this->db->where('id', $id);
        $this->db->update('dokumen', $update_data);
        $this->session->set_flashdata('message', 'Dokumen berhasil diupdate.');
        redirect('master/dokumen');
    }

    // Fungsi hapus dokumen
    public function delete_dokumen($id)
    {
        $dokumen = $this->db->get_where('dokumen', ['id' => $id])->row_array();
        if (!$dokumen) {
            $this->session->set_flashdata('error', 'Dokumen tidak ditemukan.');
            redirect('master/dokumen');
            return;
        }
        // Hapus file fisik jika ada
        $relative_path = $dokumen['file_path'];
        if (strpos($relative_path, 'uploads/dokumen/') === 0) {
            $file_path = FCPATH . $relative_path;
        } else {
            $file_path = FCPATH . 'uploads/dokumen/' . $relative_path;
        }
        if (file_exists($file_path) && !empty($dokumen['file_path'])) {
            unlink($file_path);
        }
        $this->db->delete('dokumen', ['id' => $id]);
        $this->session->set_flashdata('message', 'Dokumen berhasil dihapus.');
        redirect('master/dokumen');
    }

        // Download dokumen dengan nama sesuai title
    public function download_dokumen($id)
    {
        $dokumen = $this->db->get_where('dokumen', ['id' => $id])->row_array();
        if (!$dokumen || empty($dokumen['file_path'])) {
            show_404();
            return;
        }
        // Update download_count
        $this->db->set('download_count', 'download_count+1', FALSE);
        $this->db->where('id', $id);
        $this->db->update('dokumen');

        // Pastikan path file benar
        $relative_path = $dokumen['file_path'];
        if (strpos($relative_path, 'uploads/dokumen/') === 0) {
            $file_path = FCPATH . $relative_path;
        } else {
            $file_path = FCPATH . 'uploads/dokumen/' . $relative_path;
        }
        if (!file_exists($file_path)) {
            show_404();
            return;
        }
        $ext = pathinfo($file_path, PATHINFO_EXTENSION);
        $download_name = url_title($dokumen['title'], 'underscore', TRUE) . '.' . $ext;
        $this->load->helper('download');
        // Baca isi file dan kirim dengan nama sesuai title
        $data = file_get_contents($file_path);
        force_download($download_name, $data);
    }

    public function berita(){
        $data['title'] = 'Kelola Berita';

        //mengambil data dari session 
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();

        $data['berita'] = $this->db->get('informasi')->result_array();
        
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('master/berita',$data);
        $this->load->view('templates/admin_footer',$data);
    }

    public function tambah_berita()
    {
        $data['title'] = 'Tambah Berita';

        //mengambil data dari session 
        $data['user'] = $this->db->get_where('users',['username' =>
        $this->session->userdata('username')])->row_array();

        if ($this->input->post()) {
            $judul = $this->input->post('judul');
            $kategori = $this->input->post('kategori');
            $isi = $this->input->post('isi');
            // $tanggal_posting = $this->input->post('tanggal_posting');
            $submit_type = $this->input->post('submit_type');
            $status = ($submit_type == 'publish') ? 'publish' : 'draft';
            if (empty($judul) || empty($kategori) || empty($isi)) {
                $this->session->set_flashdata('error', 'Semua field wajib diisi!');
                redirect('master/tambah_berita');
                return;
            }

            // Upload gambar utama
            $gambar_path = '';
            if (!empty($_FILES['gambar']['name'])) {
                $config['upload_path'] = './uploads/berita/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 2048;
                $config['encrypt_name'] = TRUE;
                if (!is_dir($config['upload_path'])) {
                    mkdir($config['upload_path'], 0755, true);
                }
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $gambarData = $this->upload->data();
                    $gambar_path = 'uploads/berita/' . $gambarData['file_name'];
                }
            }

            // Simpan berita utama
            $data_insert = [
                'judul' => $judul,
                'kategori' => $kategori,
                'isi' => $isi,
                'gambar' => $gambar_path,
                'status' => $status,
                'tanggal_posting' => date('Y-m-d H:i:s')
            ];
            $this->db->insert('informasi', $data_insert);
            $berita_id = $this->db->insert_id();

            // Multi upload lampiran
            if (!empty($_FILES['lampiran']['name'][0])) {
                $lampiran_count = count($_FILES['lampiran']['name']);
                $lampiran_path = './uploads/berita/lampiran/';
                if (!is_dir($lampiran_path)) {
                    mkdir($lampiran_path, 0755, true);
                }
                for ($i = 0; $i < $lampiran_count; $i++) {
                    $_FILES['file_lampiran']['name']     = $_FILES['lampiran']['name'][$i];
                    $_FILES['file_lampiran']['type']     = $_FILES['lampiran']['type'][$i];
                    $_FILES['file_lampiran']['tmp_name'] = $_FILES['lampiran']['tmp_name'][$i];
                    $_FILES['file_lampiran']['error']    = $_FILES['lampiran']['error'][$i];
                    $_FILES['file_lampiran']['size']     = $_FILES['lampiran']['size'][$i];

                    $config2['upload_path'] = $lampiran_path;
                    $config2['allowed_types'] = 'pdf|doc|docx|xls|xlsx|zip|rar|jpg|jpeg|png';
                    $config2['max_size'] = 4096;
                    $config2['encrypt_name'] = TRUE;
                    $this->load->library('upload');
                    $this->upload->initialize($config2);
                    if ($this->upload->do_upload('file_lampiran')) {
                        $lampiranData = $this->upload->data();
                        $lampiran_file = 'uploads/berita/lampiran/' . $lampiranData['file_name'];
                        $lampiran_type = $lampiranData['file_ext'];
                        $lampiran_size = $lampiranData['file_size'];
                        $this->db->insert('berita_lampiran', [
                            'berita_id' => $berita_id,
                            'file_path' => $lampiran_file,
                            'file_type' => $lampiran_type,
                            'file_size' => $lampiran_size,
                            'uploaded_at' => date('Y-m-d H:i:s')
                        ]);
                    } else {
                        $error_msg = $this->upload->display_errors();
                        $this->session->set_flashdata('error', 'Gagal upload lampiran: ' . $error_msg);
                    }
                }
            }

            $this->session->set_flashdata('message', 'Berita berhasil ditambahkan.');
            redirect('master/berita');
        }

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('master/tambah_berita', $data);
        $this->load->view('templates/admin_footer', $data);
    }

        // Fungsi edit berita
    public function edit_berita($id)
    {
        $data['title'] = 'Edit Berita';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $berita = $this->db->get_where('informasi', ['id' => $id])->row_array();
        if (!$berita) {
            $this->session->set_flashdata('error', 'Berita tidak ditemukan.');
            redirect('master/berita');
            return;
        }
        $data['berita'] = $berita;
        // Lampiran diambil dari kolom lampiran pada tabel informasi
        $lampiran = [];
        if (!empty($berita['lampiran'])) {
            // Jika lampiran berupa string path, bisa langsung dipakai
            // Jika lampiran berupa json, decode dulu
            if (is_string($berita['lampiran']) && substr($berita['lampiran'], 0, 1) == '[') {
                $lampiran = json_decode($berita['lampiran'], true);
            } else {
                $lampiran[] = ['file_path' => $berita['lampiran']];
            }
        }
        $data['lampiran'] = $lampiran;

        if ($this->input->post()) {
            $judul = $this->input->post('judul');
            $kategori = $this->input->post('kategori');
            $isi = $this->input->post('isi');
            $submit_type = $this->input->post('submit_type');
            $status = ($submit_type == 'publish') ? 'publish' : 'draft';
            if (empty($judul) || empty($kategori) || empty($isi)) {
                $this->session->set_flashdata('error', 'Semua field wajib diisi!');
                redirect('master/edit_berita/' . $id);
                return;
            }

            // Upload gambar utama jika ada
            $gambar_path = $berita['gambar'];
            if (!empty($_FILES['gambar']['name'])) {
                $config['upload_path'] = './uploads/berita/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 2048;
                $config['encrypt_name'] = TRUE;
                if (!is_dir($config['upload_path'])) {
                    mkdir($config['upload_path'], 0755, true);
                }
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $gambarData = $this->upload->data();
                    $gambar_path = 'uploads/berita/' . $gambarData['file_name'];
                    // Hapus gambar lama jika ada
                    if (!empty($berita['gambar']) && file_exists(FCPATH . $berita['gambar'])) {
                        unlink(FCPATH . $berita['gambar']);
                    }
                }
            }

            // Update berita utama
            $data_update = [
                'judul' => $judul,
                'kategori' => $kategori,
                'isi' => $isi,
                'gambar' => $gambar_path,
                'status' => $status
            ];
            $this->db->where('id', $id);
            $this->db->update('informasi', $data_update);

            // Multi upload lampiran baru
            if (!empty($_FILES['lampiran']['name'][0])) {
                $lampiran_count = count($_FILES['lampiran']['name']);
                $lampiran_path = './uploads/berita/lampiran/';
                if (!is_dir($lampiran_path)) {
                    mkdir($lampiran_path, 0755, true);
                }
                for ($i = 0; $i < $lampiran_count; $i++) {
                    $_FILES['file_lampiran']['name']     = $_FILES['lampiran']['name'][$i];
                    $_FILES['file_lampiran']['type']     = $_FILES['lampiran']['type'][$i];
                    $_FILES['file_lampiran']['tmp_name'] = $_FILES['lampiran']['tmp_name'][$i];
                    $_FILES['file_lampiran']['error']    = $_FILES['lampiran']['error'][$i];
                    $_FILES['file_lampiran']['size']     = $_FILES['lampiran']['size'][$i];

                    $config2['upload_path'] = $lampiran_path;
                    $config2['allowed_types'] = 'pdf|doc|docx|xls|xlsx|zip|rar|jpg|jpeg|png';
                    $config2['max_size'] = 4096;
                    $config2['encrypt_name'] = TRUE;
                    $this->load->library('upload');
                    $this->upload->initialize($config2);
                    if ($this->upload->do_upload('file_lampiran')) {
                        $lampiranData = $this->upload->data();
                        $lampiran_file = 'uploads/berita/lampiran/' . $lampiranData['file_name'];
                        $lampiran_type = $lampiranData['file_ext'];
                        $lampiran_size = $lampiranData['file_size'];
                        $this->db->insert('berita_lampiran', [
                            'berita_id' => $id,
                            'file_path' => $lampiran_file,
                            'file_type' => $lampiran_type,
                            'file_size' => $lampiran_size,
                            'uploaded_at' => date('Y-m-d H:i:s')
                        ]);
                    } else {
                        $error_msg = $this->upload->display_errors();
                        $this->session->set_flashdata('error', 'Gagal upload lampiran: ' . $error_msg);
                    }
                }
            }

            $this->session->set_flashdata('message', 'Berita berhasil diupdate.');
            redirect('master/berita');
        }

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('master/edit_berita', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function mou() {
		$data['title'] = 'MOU dan Kerjasama';
		$this->load->view('templates/navbar');
		$this->load->view('mou/index',$data);
		$this->load->view('templates/footer');
	}

    

    
}
