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
		$this->db->from('pesanan');
		$this->db->join('customer', 'customer.username = pesanan.username');
		$this->db->join('detil_pesanan', 'detil_pesanan.id_pesanan = pesanan.id_pesanan');
		$this->db->where('id_pesanan' , $id);
		$query = $this->db->get();

		print_r($query);
		return $query;
		// if($query->num_rows() > 0){
		// 	return $query->result();
		// } else {
		// 	return array();
		// } 
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

	function updateGambar(){
				//$relative_url = './avatar/'. $this->upload->file_name;
				//check if password was updated
				
 				$id = 'idbarang';
				$this->db->where('idbarang', $id);
				$this->db->update('barang', $data);
				if($this->db->affected_rows() > 0){					
					return true;
		 		} else {
		 			return false;
		 		}
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
