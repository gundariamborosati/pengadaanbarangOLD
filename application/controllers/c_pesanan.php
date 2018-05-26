<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pesanan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pesanan');
		$this->load->model('m_detil_pesanan');

	}

	// lihat detail pesanan dari table
	public function listPesanan(){
		$this->load->view('utama/header');
		$this->load->view('logistik/list_pesanan');
		$this->load->view('utama/footer');
	}



}