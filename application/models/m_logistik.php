<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_logistik extends CI_Model {

	function detail($username){
		$this->db->where('username',$username);
		return $this->db->get('user');
	}
}
