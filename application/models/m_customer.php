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

	function detail($where,$table){		
		return $this->db->get_where($table,$where);
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

	function delete_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function updateProfile($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function check_regis($username){
		$this->db->where('username', $username);
		return $this->db->get('customer');
	}

	function getCurrentPass($username){
		$query = $this->db->where(['username'=>$username]) ->get('customer');
		if($query->num_rows() > 0) {
			return $query->row();
		}
	}

	function update_password($new_password,$uname){
		$data = array (
			'password' => md5($new_password)
		);

		return $this->db->where('username',$uname)
		->update('customer',$data);
	}

}

