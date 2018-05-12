<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_suratKeluar extends CI_Model {



    function viewSuratKeluar($where,$table){
    return $this->db->get_where($table,$where);
  }

  
	
  function ambilDataUsernameDirektur(){
    $this->db->order_by('username','asc');
    $query = $this->db->get('direktur');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }


  function ambilDataUsernameLogistik(){
      $this->db->order_by('username','asc');
      $query = $this->db->get('logistik');
      if($query->num_rows()>0)
      {
        return $query->result();
      }
      else
      {
        return false;
      }
    }

    function ambilDataUsernameCustomer(){
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


function edit_data($where,$table){    
    return $this->db->get_where($table,$where);
  }
  function update_status($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

 	
     function inputSuratKeluar($data,$table){
        $this->db->insert($table,$data);
    }



   function insertData($data,$table){
        $this->db->insert($table,$data);
    }

  function ambilSPPHbyID($id_surat){
     $this->db->where('id_surat', $id_surat);
     $query = $this->db->get('surat_keluar');
     if($query->num_rows()>0)
     {
       return $query->row();
     }
     else
     {
       return false;
     }
  }


}

