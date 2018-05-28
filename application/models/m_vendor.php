<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_vendor extends CI_Model {

	public function insert($data){
		$this->db->insert('vendor',$data);
		return $data;
	}

	function detail($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function profileVendor($username){
		if($username){
			$sql = "SELECT * FROM vendor WHERE username = ?";
			$query = $this->db->query($sql,array($username));
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

	function cek($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		return $this->db->get('vendor');
	}

	function check_regis($username){
		$this->db->where('username', $username);
		return $this->db->get('vendor');
	}

	function getAllVendor(){
		return $this->db->get('vendor');
	}

	function getCurrentPass($username){
		$query = $this->db->where(['username'=>$username])
							->get('vendor');
		if($query->num_rows() > 0) {
			return $query->row();
		}
	}

	function update_password($new_password,$uname){
		$data = array (
			'password' => md5($new_password)
		);

		return $this->db->where('username',$uname)
		->update('vendor',$data);
	}

	// nama perusahaaan untuk pesanan
	function getNamaVendor(){
    	$this->db->order_by('nama_perusahaan','asc');
    	$query = $this->db->get('vendor');
    	if($query->num_rows()>0){
      		return $query->result();
    	}else{
      		return false;
    	}
	}

}
