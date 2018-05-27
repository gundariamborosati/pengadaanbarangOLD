<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_suratMasuk extends CI_Model {

 function kotak_masuk_direktur($kotak_masuk){
    if($kotak_masuk) {
      $sql = "SELECT * FROM surat_keluar WHERE tujuan_direktur = ?";
      $query = $this->db->query($sql, array($kotak_masuk));
      $result = $query->result_array();

      return $result;
    }
  }
  
  function kotak_masuk_customer($kotak_masuk){
    if($kotak_masuk) {
      $sql = "SELECT * FROM surat_keluar WHERE tujuan_customer = ?";
      $query = $this->db->query($sql, array($kotak_masuk));
      $result = $query->result_array();

      return $result;
    }
  }

    function kotak_masuk_logistik($kotak_masuk){
    if($kotak_masuk) {
      $sql = "SELECT * FROM surat_keluar WHERE tujuan_logistik = ?";
      $query = $this->db->query($sql, array($kotak_masuk));
      $result = $query->result_array();

      return $result;
    }
  }

    function kotak_masuk_vendor($kotak_masuk){
    if($kotak_masuk) {
      $sql = "SELECT * FROM surat_keluar WHERE tujuan_vendor = ?";
      $query = $this->db->query($sql, array($kotak_masuk));
      $result = $query->result_array();

      return $result;
    }
  }

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

