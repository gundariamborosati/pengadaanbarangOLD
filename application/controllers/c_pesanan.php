<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pesanan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pesanan');
		$this->load->model('m_detil_pesanan');
		$this->load->model('m_customer');
		$this->load->model('m_vendor');

	}

	// lihat detail pesanan dari table
	public function listPesanan(){

		$data['pesanan'] = $this->m_pesanan->joinPesananDetil();

		$this->load->view('template/header');
		$this->load->view('logistik/list_pesanan' , $data);
		$this->load->view('template/footer');
	}

	//form add barang
	public function formadd(){

		$data = array(
				'nama_perusahaan' => $this->m_customer->getNamaPerusahaan()
		);
		$this->load->view('template/header');
		$this->load->view('logistik/form_addpesanan',$data);
		$this->load->view('template/footer');	
	}

	//aksi tambah data pesanan
	public function add_pesanan(){
		$id = $this->m_pesanan->getIDPesanan();
		$data = array(
					'id_pesanan' => $id,
					'username' => $this->input->post('username'),
					// 'vendor' => $this->input->post('vendor'),
					'nama_pesanan' => $this->input->post('nama_pesanan'),
					'tanggal' => $this->input->post('tanggal')
				);
		$this->m_pesanan->insert_pesanan($data);
		// redirect(base_url('c_pesanan/form_adddetail'));
				
	}

}