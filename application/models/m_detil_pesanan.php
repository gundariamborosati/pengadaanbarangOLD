<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_detil_pesanan extends CI_Model {

	function __construct() {
        parent::__construct();
    }

	// //untuk logistik 
	// function getDetilPesanan(){
	// 	$hasil = $this->db->get('detil_pesanan');
	// 	if($hasil->num_rows() > 0){
	// 		return $hasil->result();
	// 	} else {
	// 		return array();
	// 	}
	// }

	function insertDetilPesanan($data){
		$query = $this->db->insert('detil_pesanan',$data);
		return $query;
	}

	//untuk vendor
	function getDetilPesanan($id){

		//$query = $this->db->get_where($table, $where); 
		return $this->db->select('*')->where('id_pesanan',$id)->get('detil_pesanan')->result();
		
	}

	function cek_id($idbarang){
		$this->db->select('idbarang');
		$this->db->from('barang');
		$this->db->order_by('idbarang', 'DESC');
	}
	
	function deleteDetilPesanan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function detail($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function updateDetilPesanan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function getIDDetilPesanan(){
		$this->db->select('RIGHT(detil_pesanan.id_detil_pesanan,8) as id', FALSE);
		$this->db->order_by('id_detil_pesanan','DESC');    
		$this->db->limit(1);    
		  $query = $this->db->get('detil_pesanan');    
		  if($query->num_rows() <> 0){      		  
		   $data = $query->row();      
		   $kode = intval($data->id) + 1;    
		  }
		  else {      		  
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 8, "0", STR_PAD_LEFT);
		  $kodejadi = "DETILPESAN-".$kodemax;    
		  return $kodejadi;
	}
	
}
