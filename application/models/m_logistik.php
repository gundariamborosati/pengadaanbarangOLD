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

	function profileLogistik($username){
		if($username){
			$sql = "SELECT * FROM logistik WHERE username = ?";
			$query = $this->db->query($sql,array($username));
			$result = $query->result_array();
			return $result;
		}
	}

	function getAllLogistik(){
		return $this->db->get('logistik');
	}

}
