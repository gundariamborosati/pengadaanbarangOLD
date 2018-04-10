<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_progress extends CI_Model {

	

	function viewProgress(){
	return $this->db->get('progress_pengadaan');
		}
	
     function inputProgress($data,$table){
        $this->db->insert($table,$data);
    }
    


}
