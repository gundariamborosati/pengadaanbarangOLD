<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_direktur extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_barang');
	}


	public function home(){
		// $this->load->view('vendor/header_ven');
		$data['barang'] = $this->m_barang->getAllBarang('barang');
		$this->load->view('template/header'); // default template
		$this->load->view('direktur/dashboard',$data); // dashboard vendornya
		$this->load->view('template/footer'); 
	}
		
	public function viewProfile(){
		  $this->load->library('session');
		$this->load->model('m_direktur');
         

		 $data['profile'] = $this->m_direktur->profildirektur($this->session->userdata('username'));


   
        
      $this->load->view('direktur/profileDirektur',$data); 
	}


	function edit_direktur($username){
	$this->load->view('direktur/headerdirektur');
		$where=array(
            'password'=>$password
		);
		$data['user']=$this->m_login->edit_direktur($where,'user')->result();

		$this->load->view('direktur/form_add',$data);
		$this->load->view('Utama/footer');

	}

	


	
	 public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}


}