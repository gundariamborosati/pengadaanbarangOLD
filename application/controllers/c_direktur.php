<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_direktur extends CI_Controller {

	public function home(){
		// $this->load->view('vendor/header_ven');
		$this->load->view('template/header'); // default template
		$this->load->view('direktur/dashboard'); // dashboard vendornya
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

	function insert_user(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$data=array(
			
            'username'=>$username,
            'password'=>$password
			);

		$this->m_user->insert_user($data,'user');
		redirect('c_user/view_user');
	} 
	 public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}


}