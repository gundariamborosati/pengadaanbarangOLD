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
	function updateProfile($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	// function updateProfile($username){
	// 		// echo $id;
	// 		$nama_perusahaan = $this->input->post('nama_perusahaan');
	// 		$alamat_perusahaan= $this->input->post('alamat_perusahaan');
	// 		$contact= $this->input->post('contact');
	// 		$email= $this->input->post('email');
	// 		$password= $this->input->post('password');
	// 		$data = array(
	// 			'nama_perusahaan' => $nama_perusahaan,
	// 			'alamat_perusahaan' => $alamat_perusahaan,
	// 			'contact' => $contact,
	// 			'email' => $email,
	// 			'password' => md5($password)
	// 		);
	//     $this->db->where('username', $username);
	// 		$this->db->update('customer', $data);
	// 		if($this->db->affected_rows() > 0){
	// 			$this->session->set_userdata('nama_perusahaan', $nama_perusahaan);
	// 			$this->session->set_userdata('alamat_perusahaan', $alamat_perusahaan);
	// 			$this->session->set_userdata('contact', $contact);
	// 			$this->session->set_userdata('email', $email);
	// 		    $this->session->set_userdata('password', $password);
	//  			return true;
	//  		} else {
	//  			return false;
	//  		}
	//    }


}

