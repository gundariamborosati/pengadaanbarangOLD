<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_barang extends CI_Model {

	function __construct() {
        parent::__construct();
    }
	
	function insert_barang($data){
		$this->db->insert('barang',$data);
		return $data;
	}

	function getBarang(){
		return $this->db->get('barang');
	}

	function delete_barang($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function detail($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_barang($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
}
