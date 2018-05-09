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


	public function surat_masukDirektur(){
		$data ['surat_masuk'] = $this->m_suratMasuk->kotak_masuk($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('direktur/view_suratmasuk',$data);
		$this->load->view('template/footer'); 
	
	}

	public function surat_masukLogistik(){
		$data ['surat_masuk'] = $this->m_suratMasuk->kotak_masuk($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('logistik/view_suratmasuk',$data);
		$this->load->view('template/footer'); 
	
	}

	 
	 	public function surat_masukCustomer(){
		$data ['surat_masuk'] = $this->m_suratMasuk->kotak_masuk($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('customer/view_suratmasuk',$data);
		$this->load->view('template/footer'); 
  }

  
}
 
 

