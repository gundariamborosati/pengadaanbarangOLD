<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_logistik extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_logistik');
	}

	public function home(){
		$this->load->view('logistik/header_log');
		$this->load->view('utama/home');
		$this->load->view('utama/footer');
	}

	public function view_akun(){
		$data['logistik']=$this->m_logistik->detail($this->session->userdata('username'))->result();
		$this->load->view('logistik/header_log');
		$this->load->view('logistik/view_akun', $data);
		$this->load->view('utama/footer');
	}

	

}
