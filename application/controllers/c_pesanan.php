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


	public function coba(){
		$this->load->view('logistik/index' );	
	}
	

	//form add barang
	public function formadd(){

		$data = array(
				'nama_perusahaan' => $this->m_customer->getNamaPerusahaan(),
				'nama_vendor' => $this->m_vendor->getNamaVendor()
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
					'vendor' => $this->input->post('vendor'),
					'nama_pesanan' => $this->input->post('nama_pesanan'),
					'no_surat' => '/LOG-BUT/',
					'tanggal' => date('Y-m-d')
				);
		$this->m_pesanan->insert_pesanan($data);
		redirect(base_url('c_detilpesanan/form_addpesanan'));
				
	}

	public function update_pesanan($id_pesanan){
		$data = array(
				'nama_perusahaan' => $this->m_customer->getNamaPerusahaan(),
				'nama_vendor' => $this->m_vendor->getNamaVendor()
		);
		$nama_pesanan=$this->input->post('nama_pesanan');
		$username=$this->input->post('username');
		$vendor=$this->input->post('vendor');
		$data=array(
			'nama_pesanan'=>$nama_pesanan,
			'username'=>$username,
			'vendor'=>$vendor			
			);
		$where=array(
			'id_pesanan'=>$id_pesanan
			);
		$this->m_pesanan->updatePesanan($where,$data,'pesanan');
		redirect(base_url('c_pesanan/listPesanan'));
	}

}