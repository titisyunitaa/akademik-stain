<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Survey_model');
    }

    public function simpan() {
        // Ambil data dari form
        $data = [
            'pengajuan_id' => $this->input->post('pengajuan_id'),
            'kualitas'  => $this->input->post('kualitas'),
            'kecepatan' => $this->input->post('kecepatan'),
            'kemudahan' => $this->input->post('kemudahan'),
            'kejelasan' => $this->input->post('kejelasan'),
            'keandalan' => $this->input->post('keandalan'),
            'kepuasan'  => $this->input->post('kepuasan'),
            'saran'     => $this->input->post('saran'),
            'created_at'=> date('Y-m-d H:i:s')
        ];

        // Simpan ke database
        if ($this->Survey_model->insert($data)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }

    public function index(){

    $data['title'] = 'Data Survey Kepuasan';

    //mengambil data dari session 
    $data['user'] = $this->db->get_where('users',['username' =>
    $this->session->userdata('username')])->row_array();
        

    $data['survey_kepuasan'] = $this->Survey_model->getAllSurveys();
    $data['distribusi_chart'] = $this->Survey_model->getDistribusiChart();

    $this->load->view('templates/admin_header',$data);
    $this->load->view('templates/admin_topbar',$data);
    $this->load->view('templates/admin_sidebar',$data);
    $this->load->view('survey/index',$data);
    $this->load->view('templates/admin_footer',$data);
    }

}
