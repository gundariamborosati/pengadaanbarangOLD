<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_progress extends CI_Model {

	

	function viewProgress(){
	return $this->db->get('progress_pengadaan');
		}
	
     function inputProgress($data,$table){
        $this->db->insert($table,$data);
    }
    
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
    function update_progress($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	// function cetak(){
 //        return $this->db->get("progress_pengadaan");
        
 //    }




      function delete($where,$table){
       $this->db->where($where);
       $this->db->delete($table);
    }

  //   function ambilDataPermintaanbyID($no_pesanan){
  //    $this->db->where('no_pesanan', $no_pesanan);
  //    $query = $this->db->get('progress_pengadaan');
  //    if($query->num_rows()>0)
  //    {
  //      return $query->row();
  //    }
  //    else
  //    {
  //      return false;
  //    }
  // }


  // function simpanDataIdentifikasi(){
  //    $no_pesanan = $this->input->post('no_pesanan');
  //   $identifikasi = $this->input->post('txt_identifikasi');
    // $tanggal = $this->input->post('txt_tanggal_identifikasi');
    

    // $data = array(
    //    'no_pesanan'=> $no_pesanan,
    //   'identifikasi' => $identifikasi
    //   );
    // $this->db->insert('progress_pengadaan', $data);
  //   if($this->db->affected_rows() > 0){
  //     $this->updateStatusPekerjaan($id,'On Progress');
  //     return true;
  //   }
  //   else {
  //     return false;
  //   }
  // }




    


}
