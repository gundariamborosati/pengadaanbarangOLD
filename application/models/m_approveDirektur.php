<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_approveDirektur extends CI_Model {



    function simpanDataApproveDirektur($data,$table){
         $this->db->insert($table,$data);
     }



  //   function viewSuratApprove($where,$table){
  //   return $this->db->get_where($table,$where);
  // }
function viewSuratApprove(){
		return $this->db->get('approve_direktur');
	}
  	
}