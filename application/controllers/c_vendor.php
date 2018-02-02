<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_vendor extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('m_vendor');
	}

	public function home(){
		$this->load->view('vendor/header_ven');
		$this->load->view('utama/home');
		$this->load->view('utama/footer');
	}

	public function add(){
		$this->load->view('utama/header');
		$this->load->view('vendor/registrasi');
		$this->load->view('utama/footer');
	}

	public function registrasi(){
		$this->load->view('utama/header');				
					$config['upload_path']   = './akte/'; 
					$config['allowed_types'] = 'gif|jpg|png'; 
					$config['max_size']      = 10000; 
					$config['max_width']     = 1024; 
					$config['max_height']    = 768;
					$this->load->library('upload',$config);  				
				if ( ! $this->upload->do_upload('akte_pendiri')) {
		        	$error = array('error' => $this->upload->display_errors()); 
		        	print_r($error);
		        }else { 
		        	$upload=$this->upload->data();		       				        
		       		$data = array(
						  'hak_akses' => $this->input->post('hak_akses'),
						  'akte_pendiri' => $upload['file_name'],
						  'nama_perusahaan' => $this->input->post('nama_perusahaan'),
						  'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
						  'contact' => $this->input->post('contact'),
						  'username' => $this->input->post('username'),
						  'password' => md5($this->input->post('password'))
						  );					
		 			$this->m_vendor->insert($data);
		 			$this->load->view('utama/v_login');		 			
		        } 

		$this->load->view('utama/footer');
	}

	public function view_akun(){

		$data['vendor']=$this->m_vendor->detail($this->session->userdata('username'))->result();
		$this->load->view('vendor/header_ven');
		$this->load->view('vendor/view_akun', $data);
		$this->load->view('utama/footer');
	}

}

