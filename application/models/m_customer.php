<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_customer extends CI_Model{
	
	public function insert($data){
		$this->db->insert('customer',$data);
		return $data;
	}

	function cek($username, $password){
		$this->db->where('username',$username);
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
}

