<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_progress extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_progress');

		
	}
		 //call model
	public function home(){
		$this->load->view('template/header'); // default template
		$this->load->view('logistik/dashboard'); // dashboard vendornya
		$this->load->view('template/footer'); 
	}

	public function viewProgress(){
		$data ['progress'] = $this->m_progress->viewProgress($this->session->userdata('no_pesanan'));
		$this->load->view('template/header');
		$this->load->view('progress/view_progress',$data);
		$this->load->view('template/footer'); 
	}

	
 public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}
