<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_ulasan extends CI_Model {

	
	function viewUlasanlog(){
	return $this->db->get('ulasan');
		}
	
	 	function viewUlasan($where,$table){
		return $this->db->get_where($table,$where);
	}
	
     function inputUlasan($data,$table){
        $this->db->insert($table,$data);
    }


      function delete($where,$table){
       $this->db->where($where);
       $this->db->delete($table);
    }


}
