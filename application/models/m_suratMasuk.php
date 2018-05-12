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

 function approveDirektur($approve){
    if($approve) {
      $sql = "SELECT * FROM approve_direktur WHERE jenis_surat = ?";
      $query = $this->db->query($sql, array($approve));
      $result = $query->result_array();

      return $result;
    }
  }
  function getApprove(){
		return $this->db->get('approve_direktur');
	}
  	
}


