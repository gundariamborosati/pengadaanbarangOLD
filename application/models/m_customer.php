<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_customer extends CI_Model{
	
	public function insert($data){
		$this->db->insert('customer',$data);
		return $data;
	}

    function cek($username, $password){
	 	$this->db->where('username', $username);
	 	$this->db->where('password', md5($password));
	 	return $this->db->get('customer');
	 }
	function view_cus (){
		return $this->db->get('customer');
	}

	function cekRegistrasi($username){
 	$this->db->where('username', $username);
	 	return $this->db->get('customer');
	 }

	function getAllCustomer(){
		 return $this->db->get('customer');
		
	}

	function profileCustomer ($username){

		if($username) {
			$sql = "SELECT * FROM customer WHERE username = ?";
			$query = $this->db->query($sql, array($username));
			$result = $query->result_array();

			return $result;
		}

	}
	function updateProfile($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function update($username,$data,$table)
    {
         //id apa yang mau di update, lalu DATA apa yang mau dikirim ke tabel di database
        $this->db->where('username',$username);
        $this->db->update($table,$data);
    }

 public function cek_old()
  {
   $old = md5($this->input->post('old'));    
   $this->db->where('username',$old);
   $query = $this->db->get('customer');
      return $query->result();
     }
	  
	

}

