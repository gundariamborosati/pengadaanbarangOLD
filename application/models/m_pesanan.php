<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pesanan extends CI_Model {

	function __construct() {
        parent::__construct();
    }

	//untuk logistik 
	function getAllPesanan(){
		$hasil = $this->db->get('pesanan');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}

	function joinPesananDetil(){
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('customer', 'customer.username = pesanan.username');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		} else {
			return array();
		} 

	}

	function getDetilPesanan($id){

		$this->db->select('*');
		$this->db->from('pesanan a');
		 $this->db->join('customer b', 'b.username = a.username');
		 $this->db->join('detil_pesanan c', 'c.id_pesanan = a.id_pesanan');
		$this->db->join('vendor d', 'd.username = a.vendor');
		 $this->db->where('a.id_pesanan' , $id);
		$query = $this->db->get();
		//print_r(	$id);
		//print_r($query->result());
		//return $query;
		if($query->num_rows() > 0){
			return $query->result();
		} else {
			return array();
		} 
	}

	function insert_pesanan($data){
		$query = $this->db->insert('pesanan',$data);
		return $query;
	}

	//untuk vendor
	function getPesanan($where,$table){
		return $this->db->get_where($table,$where);
	}

	function cek_id($idbarang){
		$this->db->select('idbarang');
		$this->db->from('barang');
		$this->db->order_by('idbarang', 'DESC');
	}
	function deletePesanan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function detail($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function updatePesanan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function getIDPesanan(){
		$this->db->select('RIGHT(pesanan.id_pesanan,5) as id', FALSE);
		$this->db->order_by('id_pesanan','DESC');    
		$this->db->limit(1);    
		  $query = $this->db->get('pesanan');    
		  if($query->num_rows() <> 0){      		  
		   $data = $query->row();      
		   $kode = intval($data->id) + 1;    
		  }
		  else {      		  
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT);
		  $kodejadi = "PESAN-".$kodemax;    
		  return $kodejadi;
	}
	
}
