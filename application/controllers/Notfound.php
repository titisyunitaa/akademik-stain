<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {

	public function index()
	{
        $this->output->set_status_header('404');
        $this->load->view('errors/html/error_404');
	}
    
}
