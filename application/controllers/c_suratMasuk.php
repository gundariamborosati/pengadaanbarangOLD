<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_suratMasuk extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_suratMasuk');
		$this->load->model('m_direktur');
		 $this->load->model('m_logistik');
		
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

	public function surat_masukLogistik(){ //dihalaman logitik
		$data ['surat_masuk'] = $this->m_suratMasuk->kotak_masuk($this->session->userdata('username'));
			// $data ['surat_approve'] = $this->m_suratMasuk->approveDirektur($this->session->userdata('username'));
		$data ['surat_approve'] = $this->m_suratMasuk->getApprove()->result();



		$this->load->view('template/header');
		$this->load->view('logistik/view_suratmasuk',$data);
		$this->load->view('template/footer'); 
	
	}


	public function surat_masukApprove(){ //dihalaman logistik
		$data ['surat_approve'] = $this->m_suratMasuk->approveDirektur($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('logistik/view_suratmasuk',$data);
		$this->load->view('template/footer'); 
		print_r($data);
	
	}

	 
	 	public function surat_masukCustomer(){ //dihalaman customer
		$data ['surat_masuk'] = $this->m_suratMasuk->kotak_masuk($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('customer/view_suratmasuk',$data);
		$this->load->view('template/footer'); 
  }

  
}
 
 

