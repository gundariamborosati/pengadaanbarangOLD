<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_vendor extends CI_Model {

	public function insert($data){
		$this->db->insert('vendor',$data);
		return $data;
	}

	function detail($username){
		$this->db->where('username',$username);
		return $this->db->get('vendor');
	}

	function cek($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		return $this->db->get('vendor');
	}

	function check_regis($username){
		$this->db->where('username', $username);
		return $this->db->get('vendor');
	}

	function get_vendor(){
		return $this->db->get('vendor');
	}
}
