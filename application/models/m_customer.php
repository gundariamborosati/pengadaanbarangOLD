<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_customer extends CI_Model{
	
	public function insert($data){
		$this->db->insert('customer',$data);
		return $data;
	}

    function cek($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		return $this->db->get('customer');
	}
	function view_cus (){
		return $this->db->get('customer');
	}

	function cekRegistrasi($username){
		$this->db->where('username', $username);
		return $this->db->get('customer');
	}

	function getAllCustomer(){
		 return $this->db->get('customer');
		

	}

	function profileCustomer ($username){

		if($username) {
			$sql = "SELECT * FROM customer WHERE username = ?";
			$query = $this->db->query($sql, array($username));
			$result = $query->result_array();

			return $result;
		}

	}

	// function updateProfil($username){
	// 		$username = $this->input->post('txt_username');
	// 		$nama_perusahaan= $this->input->post('txt_name');
	// 		$data = array(
	// 			'username' => $username,
	// 			'nama_perusahaan' => $nama_perusahaan
	// 		);
	//     $this->db->where('username', $username);
	// 		$this->db->update('customer', $data);
	// 		if($this->db->affected_rows() > 0){
	// 			$this->session->set_userdata('username', $username);
	// 			$this->session->set_userdata('nama_perusahaan', $nama_perusahaan);
	//  			return true;
	//  		} else {
	//  			return false;
	//  		}
	//    }
	   
	function updateprofil($username,$data){
        
	$this->db->where('username',$username);
	$this->db->update('customer',$data);

	return $this->db->last_query();

	
}
}

