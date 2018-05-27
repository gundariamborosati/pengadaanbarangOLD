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

		$data['pesanan'] = $this->m_pesanan->joinPesananDetil();

		$this->load->view('template/header');
		$this->load->view('logistik/list_pesanan' , $data);
		$this->load->view('template/footer');
	}

	// ini untuk detil
	public function detil_pesanan($id){
		$data['detil_pesan'] = $this->m_detil_pesanan->getDetilPesanan($id);
		//print_r($data);
		$this->load->view('template/header');
		$this->load->view('logistik/list_detil_pesanan' , $data);
		$this->load->view('template/footer');
	}



}