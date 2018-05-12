<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_approveDirektur extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_suratKeluar');
		$this->load->model('m_suratMasuk');
		$this->load->model('m_direktur');
		$this->load->model('m_logistik');
		 $this->load->model('m_customer');
		 $this->load->model('m_vendor');
		$this->load->model('m_approveDirektur');
	}
		 //call model
	public function home(){
		$this->load->view('template/header'); // default template
		$this->load->view('customer/dashboard'); // dashboard vendornya
		$this->load->view('template/footer'); 
	}

	
 public function viewSuratApprove(){
		// $where = array('username' => $this->session->userdata('username'));
		$data ['surat_approve'] = $this->m_approveDirektur->viewSuratApprove()->result();
		$this->load->view('template/header');
		$this->load->view('direktur/view_suratApprove',$data);
		$this->load->view('template/footer'); 
		
	}


	function approve_direktur($id){
		$data = $this->m_suratKeluar->ambilSPPHbyID($id);	
		
		$this->load->view('template/header');
		$this->load->view('direktur/approve', $data);
		$this->load->view('template/footer');

	}


	function simpan_approve(){

		   $id_surat = $this->input->post('id_approve');
        $username = $this->input->post('dari_customer');
		 $jenis_surat = $this->input->post('jenis_surat');
		 $no_surat = $this->input->post('no_surat');
		 $tgl_surat = $this->input->post('tgl_surat');
		 $file = $this->input->post('file');
		 $pesan = $this->input->post('pesan');
		$status_approve = $this->input->post('status_approve');
	

		$data = array(
			    'id_approve'=> $id_surat,
			'dari_customer' => $username,
			'jenis_surat' => $jenis_surat,
			'no_surat' => $no_surat,
			'tgl_surat' => $tgl_surat,
			'file' => $file,
			'status_approve' => $status_approve
			
			);
		$this->m_approveDirektur->simpanDataApproveDirektur($data, 'approve_direktur');
		
     redirect(base_url('c_approveDirektur/viewSuratApprove'));
	
	}



  

  }
 
 
	