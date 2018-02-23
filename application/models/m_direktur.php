<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_direktur extends CI_Model {

	function __construct() {
        parent::__construct();
    }
	
	function cek($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('direktur');
	}
}
