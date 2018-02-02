<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_vendor');
              
    }

	public function home(){
		$this->load->view('utama/header');
		$this->load->view('utama/home');
		$this->load->view('utama/footer');
	}

	public function login(){
		$this->load->view('utama/header');
		$this->load->view('utama/v_login');

		$username =$this->input->post('username');
		$password =$this->input->post('password');
	
		
		$cek = $this->m_user->cek($username, $password);
		$cekVendor = $this->m_vendor->cek($username, $password);

		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['username'] = $data->username;
				$sess_data['password'] = $data->password;
				$sess_data['hak_akses'] = $data->hak_akses;
				$this->session->set_userdata($sess_data);
			}
		

			if($this->session->userdata('hak_akses') == 'logistik')
			{
				redirect('c_logistik/home');
			}else{
				$_SESSION['pesan'] = 'Maaf, kombinasi username dengan password salah.';
				$this->session->mark_as_flash('pesan');
			}
		}else if($cekVendor->num_rows() == 1)
		{
			foreach($cekVendor->result() as $data){
				$sess_data['username'] = $data->username;
				$sess_data['password'] = $data->password;
				$sess_data['hak_akses'] = $data->hak_akses;
				$this->session->set_userdata($sess_data);
			}
		

			if($this->session->userdata('hak_akses') == 'vendor')
			{
				redirect('c_vendor/home');
			}else{
				$_SESSION['pesan'] = 'Maaf, kombinasi username dengan password salah.';
				$this->session->mark_as_flash('pesan');
			}
		}

		$this->load->view('utama/footer');
	}

	function keluar()
	{
		$this->session->sess_destroy();
		redirect('c_user/home');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
