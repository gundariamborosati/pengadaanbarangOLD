<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_barang extends CI_Controller {

	public function form_add(){
		$this->load->view('vendor/header_ven');
		$this->load->view('vendor/form_addbarang');
		$this->load->view('utama/footer');
	}

}
