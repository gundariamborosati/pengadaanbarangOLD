<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_logistik extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_logistik');
		$this->load->model('m_direktur');
		$this->load->model('m_customer');
		$this->load->model('m_vendor');
	}

	public function home(){
		$this->load->view('template/header');
		$this->load->view('logistik/dashboard');
		$this->load->view('template/footer');
	}

	public function kelola_user(){
		$getVendor = $this->m_vendor->getAllVendor()->result();
		$getCustomer = $this->m_customer->getAllCustomer()->result();
		$getDirektur = $this->m_direktur->getAllDirektur()->result();
		$getLogistik = $this->m_logistik->getAllLogistik()->result();

		$data = array();
		array_push($data,$getVendor);
		array_push($data,$getCustomer);
		array_push($data,$getDirektur);
		array_push($data,$getLogistik);

		print_r($data);
		//print_r($getVendor->result());
		//print_r($getCustomer->result());
		//print_r($getDirektur->result());
		//print_r($getLogistik->result());
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}

	public function view_akun(){
		$data['logistik']=$this->m_logistik->detail($this->session->userdata('username'))->result();
		$this->load->view('logistik/header_log');
		$this->load->view('logistik/view_akun', $data);
		$this->load->view('utama/footer');
	}

	

}
