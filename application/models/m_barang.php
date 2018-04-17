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

	function getIdBarang(){
		$this->db->select('RIGHT(barang.idbarang,4) as id', FALSE);
		$this->db->order_by('idbarang','DESC');    
		$this->db->limit(1);    
		  $query = $this->db->get('barang');    
		  if($query->num_rows() <> 0){      		  
		   $data = $query->row();      
		   $kode = intval($data->id) + 1;    
		  }
		  else {      		  
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		  $kodejadi = "BARANG-".$kodemax;    
		  return $kodejadi;
	}
	
}
