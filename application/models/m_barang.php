<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_barang extends CI_Model {

	function __construct() {
        parent::__construct();
    }

	//untuk logistik 
	function getAllBarang(){
		$hasil = $this->db->get('barang');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}

	function insert_barang($data){
		$query = $this->db->insert('barang',$data);
		return $query;
	}

	//untuk vendor
	function getBarang($where,$table){
		return $this->db->get_where($table,$where);
	}

	function cek_id($idbarang){
		$this->db->select('idbarang');
		$this->db->from('barang');
		$this->db->order_by('idbarang', 'DESC');
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
