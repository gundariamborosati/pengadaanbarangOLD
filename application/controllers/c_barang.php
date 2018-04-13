<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_barang extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_barang');
	}

	public function view_AllBarang(){
		$data['barang'] = $this->m_barang->getAllBarang('barang')->result();
		$this->load->view('template/header');
		$this->load->view('logistik/view_barang',$data);
		$this->load->view('template/footer');
	}
	
	public function view_barang(){
		$where = array('username' => $this->session->userdata('username'));
		$data['barang'] = $this->m_barang->getBarang($where,'barang')->result();
		$this->load->view('template/header');
		$this->load->view('vendor/view_barang',$data);
		$this->load->view('template/footer');
	}

	function delete_barang($idbarang){
		$where=array(
            'idbarang'=>$idbarang
		);
		$this->m_barang->delete_barang($where,'barang');
		$this->view_barang();
	}

	public function edit_barang($idbarang){
		$where = array('idbarang' => $idbarang);
		$data['barang'] = $this->m_barang->detail($where,'barang')->result();
		$this->load->view('template/header');
		$this->load->view('vendor/edit_barang',$data);
		$this->load->view('template/footer');
	}

	public function update_barang($idbarang){	
		$namabarang=$this->input->post('namabarang');
		$jenis=$this->input->post('jenis');
		$gambar=$this->input->post('gambar');

		$data=array(
			'namabarang' => $namabarang,
			'jenis'=>$jenis,
			'gambar'=>$gambar
			);
		$where=array(
			'idbarang'=>$idbarang
			);
		$this->m_barang->update_barang($where,$data,'barang');
		//$this->load->view('c_vendor/home');		
	}

	public function form_add(){
		$this->load->view('template/header');
		$this->load->view('vendor/add_barang');
		$this->load->view('template/footer');
	}

	// public function add_barang(){
	// 	$this->form_validation->set_rules('namabarang', 'Nama Barang','required|alpha_numeric_spaces');
	// 	if ($this->form_validation->run() == TRUE){	
	// 		$config['upload_path']   = 'asset/img/barang/'; 
	// 		$config['allowed_types'] = 'gif|jpg|png'; 
	// 		$config['max_size']      = 100; 
	// 		$config['max_width']     = 1024; 
	// 		$config['max_height']    = 768;
	// 		$this->load->library('upload',$config); 
	// 		if(! $this->upload->do_upload('gambar')){
	// 			$error = array('error' => $this->upload->display_errors()); 
	// 	 
 //                     <script type=text/javascript>alert("File tidak sesuai format");</script>
 //        		<?php
 //        		$this->load->view('template/header');		
 //        		$this->load->view('vendor/add_barang');
	// 			$this->load->view('template/footer');        		
	// 		}else{
	// 			$upload=$this->upload->data();			      
	// 			$data = array(
	// 				'idbarang' => $this->input->post('idbarang'),
	// 				'namabarang' => $this->input->post('namabarang'),
	// 				'gambar' => $upload['file_name'],
	// 				'jenis' => $this->input->post('jenis'),
	// 				'username' => $this->session->userdata('username')
	// 			);
	// 			$this->m_barang->insert_barang($data);
	// 			$this->load->view('template/header');	
	// 			$this->load->view('vendor/add_barang');	 
	// 			$this->load->view('template/footer');
	// 		}
	// 	}else{
	// 		$this->load->view('template/header');		
	// 		$this->load->view('vendor/add_barang');
	// 		$this->load->view('template/footer');		
	// 	}
	// }

	// public function add_barang(){
	// 	$this->form_validation->set_rules('namabarang', 'Nama Barang','required|alpha_numeric_spaces');
	// 	$cek = $this->m_barang->cek_id();
	// 	$jumlah = $cek->num_rows();
	// 	foreach ($cek->result() as $ck){
	// 		$idbarang = $ck->idbarang;	
	// 	}

	// 	if ($jumlah<>0){
	// 		$id = intval($idbarang)+1;
	// 	}else{
	// 		$id = 1;
	// 	}

	// 	$idmax=str_pad($idbarang,10,"BARANG0000", STR_PAD_LEFT);

	// 	if ($this->form_validation->run() == TRUE){	
	// 		$config['upload_path']   = 'asset/img/barang/'; 
	// 		$config['allowed_types'] = 'gif|jpg|png'; 
	// 		$config['max_size']      = 100; 
	// 		$config['max_width']     = 1024; 
	// 		$config['max_height']    = 768;
	// 		$this->load->library('upload',$config); 
	// 		if(! $this->upload->do_upload('gambar')){
	// 			$error = array('error' => $this->upload->display_errors()); 
	// 	        
 //                     <script type=text/javascript>alert("File tidak sesuai format");</script>
 //        		<?php
 //        		$this->load->view('template/header');		
 //        		$this->load->view('vendor/add_barang');
	// 			$this->load->view('template/footer');        		
	// 		}else{
	// 			$upload=$this->upload->data();			      
	// 			$data = array(
	// 				'idbarang' => $idmax,
	// 				'namabarang' => $this->input->post('namabarang'),
	// 				'gambar' => $upload['file_name'],
	// 				'jenis' => $this->input->post('jenis'),
	// 				'username' => $this->session->userdata('username')
	// 			);
	// 			$this->m_barang->insert_barang($data);
	// 			$this->load->view('template/header');	
	// 			$this->load->view('vendor/add_barang');	 
	// 			$this->load->view('template/footer');
	// 		}
	// 	}else{
	// 		$this->load->view('template/header');		
	// 		$this->load->view('vendor/add_barang');
	// 		$this->load->view('template/footer');		
	// 	}
	// }

	public function add_barang(){
		$cek = mysqli_query("SELECT idbarang FROM barang ORDER BY idbarang DESC");
		$id_barang=mysqli_fetch_array($cek);	
		$id=$id_barang['idbarang'];
		$urut = substr($id, 6, 4);		
		$tambah =(int) $urut + 1;		

		if (strlen($tambah) == 1){
			$format ="BARANG"."000".$tambah;
		}else if (strlen($tambah) == 2) {
			$format ="BARANG"."00".$tambah;
		}else if (strlen($tambah) == 3) {
			$format ="BARANG"."0".$tambah;
		}else{
			$format ="BARANG".$tambah;
		}
			$data = array(
					'idbarang' => $format,
					'namabarang' => $this->input->post('namabarang'),					
					'jenis' => $this->input->post('jenis'),
					'username' => $this->session->userdata('username')
			);
		$this->m_barang->insert_barang($data);
		$this->load->view('template/header');	
		$this->load->view('vendor/add_barang');	 
		$this->load->view('template/footer');
	}

	// public function add_barang(){
	// 	$cek = $this->m_barang->cek_id($idbarang);
	// 	if($cek->num_rows() == 0){
	// 		$angka=mysqli_num_rows()+1;
	// 		$uname= $this->session->userdata('username');
	// 		$format= $uname.$angka;		
	// 	}		
	// 		$data = array(
	// 				'idbarang' => $format,
	// 				'namabarang' => $this->input->post('namabarang'),					
	// 				'jenis' => $this->input->post('jenis'),
	// 				'username' => $this->session->userdata('username')
	// 		);
	// 	$this->m_barang->insert_barang($data);
	// 	$this->load->view('template/header');	
	// 	$this->load->view('vendor/add_barang');	 
	// 	$this->load->view('template/footer');
	// }
}
