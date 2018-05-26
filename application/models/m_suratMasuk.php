<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_suratMasuk extends CI_Model {


 function kotak_masuk($kotak_masuk){
    if($kotak_masuk) {
      $sql = "SELECT * FROM surat_keluar WHERE tujuan = ?";
      $query = $this->db->query($sql, array($kotak_masuk));
      $result = $query->result_array();

      return $result;
    }
  }
  //  function  getApprove($status_approve){
  //   if($status_approve) {
  //     $sql = "SELECT * FROM surat_keluar  WHERE status_approve >= '$ya' AND status_approve <= '$tidak' ";
  //     $query = $this->db->query($sql, array($kotak_masuk));
  //     $result = $query->result_array();

  //     return $result;
  //   }
  // }

  //     function getApprove(){
  //   return $this->db->get('surat_keluar');
  // }


     function getApprove($where,$table){
     return $this->db->get_where($table,$where);
   }
   
 function edit_data($where,$table){   
    return $this->db->get_where($table,$where);
  }
  function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

    function delete($where,$table){
       $this->db->where($where);
       $this->db->delete($table);
    }
  
}

