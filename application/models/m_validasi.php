<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_validasi extends CI_Model {

	

  function simpanDataIdentifikasi(){
    $no_pesanan = $this->input->post('no_pesanan');
    $identifikasi = $this->input->post('txt_identifikasi');
    $tanggal = $this->input->post('txt_tanggal_identifikasi');
    

    $data = array(
      'no_pesanan'=> $no_pesanan,
      'identifikasi' => $identifikasi,
      'tanggal' => $tanggal
      );
    $this->db->insert('progress_pengadaan', $data);
  //   if($this->db->affected_rows() > 0){
  //     $this->updateStatusPekerjaan($id,'On Progress');
  //     return true;
  //   }
  //   else {
  //     return false;
  //   }
  // }


}
