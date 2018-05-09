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


}
