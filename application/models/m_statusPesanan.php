<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_statusPesanan extends CI_Model {

	

    function viewStatus($username){
    if($username) {
      $sql = "SELECT * FROM status_pesanan WHERE username = ?";
      $query = $this->db->query($sql, array($username));
      $result = $query->result_array();

      return $result;
    }
  }

  function viewStatuslog(){
  return $this->db->get('status_pesanan');
    }
  
  function ambilDataUsername(){
    $this->db->order_by('username','asc');
    $query = $this->db->get('customer');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

 
   function insertData($data,$table){
        $this->db->insert($table,$data);
    }


	
     // function inputStatusPesanan($data,$table){
     //     $this->db->insert($table,$data);
     // }
 
	
   function delete($where,$table){
       $this->db->where($where);
       $this->db->delete($table);
    }


    function getIdPesanan(){
    $this->db->select('RIGHT(status_pesanan.no_pesanan,4) as no', FALSE);
    $this->db->order_by('no_pesanan','DESC');    
    $this->db->limit(1);    
      $query = $this->db->get('status_pesanan');    
      if($query->num_rows() <> 0){            
       $data = $query->row();      
       $kode = intval($data->no) + 1;    
      }
      else {            
       $kode = 1;    
      }
      $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
      $kodejadi = "PESANAN-".$kodemax;    
      return $kodejadi;
  }

  function edit_data($where,$table){    
    return $this->db->get_where($table,$where);
  }
  function update_status($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }
    

}
