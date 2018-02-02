<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_direktur extends CI_Controller {
public function Home(){
		$this->load->view('direktur/headerdirektur');
		$this->load->view('Utama/footer');
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


}