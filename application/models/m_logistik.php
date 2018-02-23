<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_logistik extends CI_Model {

	function detail($username){
		$this->db->where('username',$username);
		return $this->db->get('user');
	}

	function cek($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('logistik');
	}

	function getAllLogistik(){
		return $this->db->get('logistik');
	}

}
