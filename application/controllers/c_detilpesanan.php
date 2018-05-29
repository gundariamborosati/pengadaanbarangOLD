<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_detilpesanan extends CI_Controller {

	function __construct(){
		parent::__construct();			
		$this->load->model('m_detil_pesanan');	;

	}

	// ini untuk detil
	public function detil_pesanan($id){
		$data['detil_pesan'] = $this->m_detil_pesanan->getDetilPesanan($id);
		$this->load->view('template/header');
		$this->load->view('logistik/list_detil_pesanan' , $data);
		$this->load->view('template/footer');
	}

	//edit pesanan 
	public function edit_detail_pesanan($id_detil_pesanan){
		$where = array('id_detil_pesanan' => $id_detil_pesanan);
		$data['pesanan'] = $this->m_detil_pesanan->detail($where,'detil_pesanan')->result();
	}

	public function update_detilpesanan($id_detil_pesanan){	
		//print_r(	$id_detil_pesanan);
		//$id_pesan = $this->uri->segment(3);
		$id_detil_pesanan = $this->input->post('id_detil_pesanan'); //dari form hidden di viewnya
		$nama_barang=$this->input->post('nama_barang');
		$spesifikasi_barang=$this->input->post('spesifikasi_barang');
		$volume_barang=$this->input->post('volume_barang');
		$satuan=$this->input->post('satuan');
		$data=array(
			'nama_barang'=>$nama_barang,
			'spesifikasi_barang'=>$spesifikasi_barang,
			'volume_barang'=>$volume_barang,
			'satuan'=>$satuan
			);
		$where=array(
			'id_detil_pesanan'=>$id_detil_pesanan
			);
		$this->m_detil_pesanan->updateDetilPesanan($where,$data,'detil_pesanan');

		// redirect
		// get id 
		
		//print_r($id_pesan);
		$idPesan = $this->input->get('id_pesan'); //ambil si ?
		print_r($idPesan);
		redirect(base_url('c_detilpesanan/detil_pesanan/'.$idPesan));		
	}

	//form add detil pesanan
	// public function form_addpesanan(){

	// 	$data = array(
	// 			'nama_perusahaan' => $this->m_customer->getNamaPerusahaan()
	// 	);
	// 	$this->load->view('template/header');
	// 	$this->load->view('logistik/form_addpesanan',$data);
	// 	$this->load->view('template/footer');	
	// }

	public function form_addpesanan(){
		$this->load->view('template/header');
		$this->load->view('logistik/coba' );	
		$this->load->view('template/footer');
	}	

	//aksi tambah detil pesanan
	public function add_detailpesanan(){
		$id = $this->m_pesanan->getIDPesanan();
		$data = array(
					'id_pesanan' => $id,
					'username' => $this->input->post('username'),					
					'nama_pesanan' => $this->input->post('nama_pesanan'),
					'tanggal' => $this->input->post('tanggal')
				);
		$this->m_pesanan->insert_pesanan($data);
		redirect(base_url('c_pesanan/form_adddetail'));
				
	}

}