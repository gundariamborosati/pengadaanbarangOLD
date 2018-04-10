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

	public function add_barang(){
		$this->form_validation->set_rules('namabarang', 'Nama Barang','required|alpha_numeric_spaces');
		if ($this->form_validation->run() == TRUE){	
			$config['upload_path']   = 'asset/img/barang/'; 
			$config['allowed_types'] = 'gif|jpg|png'; 
			$config['max_size']      = 100; 
			$config['max_width']     = 1024; 
			$config['max_height']    = 768;
			$this->load->library('upload',$config); 
			if(! $this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors()); 
		        ?>
                     <script type=text/javascript>alert("File tidak sesuai format");</script>
        		<?php
        		$this->load->view('template/header');		
        		$this->load->view('vendor/add_barang');
				$this->load->view('template/footer');        		
			}else{
				$upload=$this->upload->data();			      
				$data = array(
					'idbarang' => $this->input->post('idbarang'),
					'namabarang' => $this->input->post('namabarang'),
					'gambar' => $upload['file_name'],
					'jenis' => $this->input->post('jenis'),
					'username' => $this->session->userdata('username')
				);
				$this->m_barang->insert_barang($data);
				$this->load->view('template/header');	
				$this->load->view('vendor/add_barang');	 
				$this->load->view('template/footer');
			}
		}else{
			$this->load->view('template/header');		
			$this->load->view('vendor/add_barang');
			$this->load->view('template/footer');		
		}
	}

}
