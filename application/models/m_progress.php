<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_progress extends CI_Model {

	

	function viewProgress($no_pesanan){
		if($no_pesanan){
			$sql = "SELECT * FROM progress_pengadaan WHERE no_pesanan = ?";
			$query = $this->db->query($sql,array($no_pesanan));
			$result = $query->result_array();
			return $result;
		}
	}



}
