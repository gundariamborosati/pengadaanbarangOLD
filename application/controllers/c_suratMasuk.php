<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_suratMasuk extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_suratMasuk');
	
		
		
	}
		 //call model
	public function home(){
		$this->load->view('template/header'); // default template
		$this->load->view('customer/dashboard'); // dashboard vendornya
		$this->load->view('template/footer'); 
	}


	public function surat_masukDirektur(){  //dihalaman direktur
		$data ['surat_masuk'] = $this->m_suratMasuk->kotak_masuk($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('direktur/view_suratmasuk',$data);
		$this->load->view('template/footer'); 
	
	}
	
	 public function approve_direktur ($id_surat){ //dihalaman direktur approve
	 	$where = array('id_surat' => $id_surat);
	 	$data['approve'] = $this->m_suratMasuk->edit_data($where,'surat_keluar')->result();
	 	 	$this->load->view('template/header');
	 $this->load->view('direktur/approve', $data);
	  	$this->load->view('template/footer');
	 }

	 public function simpan_approve($id_surat){	//aksi
	
	 	$status_approve=$this->input->post('status_approve');

	 	$data=array(
			
	 		'status_approve'=>$status_approve
	 		);
	 	$where=array(
	 		'id_surat' => $id_surat
	 		);
	 	$this->m_suratMasuk->update_data($where,$data,'surat_keluar');
	
	 	      redirect('c_suratMasuk/surat_masukDirektur');
	 }



	function hapusSuratMasukDirektur($id_surat){
        $where=array('id_surat' => $id_surat);
        $this->m_suratMasuk->delete($where,'surat_keluar');
        redirect('c_suratMasuk/surat_masukDirektur');
        }


	public function surat_masukLogistik($status_approve1="YA" ){ //dihalaman logitik
		$data ['surat_masuk'] = $this->m_suratMasuk->kotak_masuk($this->session->userdata('username'));

		 $where = array('status_approve' => $status_approve1);

	   $data ['surat_approve'] = $this->m_suratMasuk->getApprove($where,'surat_keluar')->result();



		$this->load->view('template/header');
		$this->load->view('logistik/view_suratmasuk',$data);
		$this->load->view('template/footer'); 
	
	}


	// public function surat_masukApprove(){ //dihalaman logistik
	// 	$data ['surat_approve'] = $this->m_suratMasuk->approveDirektur($this->session->userdata('username'));
	// 	$this->load->view('template/header');
	// 	$this->load->view('logistik/view_suratmasuk',$data);
	// 	$this->load->view('template/footer'); 
	// 	print_r($data);
	
	// }

	 
	 	public function surat_masukCustomer(){ //dihalaman customer
		$data ['surat_masuk'] = $this->m_suratMasuk->kotak_masuk($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('customer/view_suratmasuk',$data);
		$this->load->view('template/footer'); 
  }

  
}
 
 

