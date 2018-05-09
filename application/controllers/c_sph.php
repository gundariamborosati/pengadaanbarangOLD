<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_sph extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_templeteSph');

		
	}
		 //call model
	public function home(){
		$this->load->view('template/header'); // default template
		$this->load->view('customer/dashboard'); // dashboard vendornya
		$this->load->view('template/footer'); 
	}

	

	

	
	 public function input(){		
	 	$this->load->view('template/header');
		$this->load->view('logistik/templete_sph');
		$this->load->view('template/footer');
	}
	function inputSph(){
		  $nomor = $this->input->post('nomor');
         $lampiran  = $this->input->post('lampiran');
         $tgl_surat  = $this->input->post('tgl_surat');
         $perihal  = $this->input->post('perihal');
         $kepada = $this->input->post('kepada');
        $data = array(
        'nomor' => $nomor,
        'lampiran' => $lampiran,
        'tgl_surat' => $tgl_surat,
        'perihal' => $perihal,
        'kepada' => $kepada
        );
        $this->m_templeteSph->inputSph($data, 'templete_sph');
        // redirect('c_sph/viewSph');   
       }
 


 public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}
