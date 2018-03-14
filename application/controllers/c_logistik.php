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

	public function viewProfile(){
		$data ['profile'] = $this->m_logistik->profileLogistik($this->session->userdata('username'));

		$this->load->view('logistik/profile',$data);
	}

	public function kelola_user(){		
		$data['vendor'] = $this->m_vendor->getAllVendor()->result();
		$data['customer'] = $this->m_customer->getAllCustomer()->result();
		$data['direktur'] = $this->m_direktur->getAllDirektur()->result();
		$data['logistik'] = $this->m_logistik->getAllLogistik()->result();

		//$data = array();
		//array_push($data,$getVendor);
		//array_push($data,$getCustomer);
		//array_push($data,$getDirektur);
		//array_push($data,$getLogistik);
		//print_r($data[0]);
		//print_r($data);
		$this->load->view('template/header');
		$this->load->view('logistik/kelola_user',$data);
		$this->load->view('template/footer');

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
}
