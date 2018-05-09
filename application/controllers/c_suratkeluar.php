<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_suratKeluar extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_suratKeluar');
		$this->load->model('m_direktur');
		 $this->load->model('m_logistik');
		  $this->load->model('m_customer');
		   $this->load->model('m_vendor');
		
	}
		 //call model
	public function home(){
		$this->load->view('template/header'); // default template
		$this->load->view('customer/dashboard'); // dashboard vendornya
		$this->load->view('template/footer'); 
	}

	 public function viewSuratKeluarCustomer(){
		$where = array('username' => $this->session->userdata('username'));
		$data ['surat_keluar'] = $this->m_suratKeluar->viewSuratKeluar($where,'surat_keluar')->result();
		$this->load->view('template/header');
		$this->load->view('customer/view_suratKeluar',$data);
		$this->load->view('template/footer'); 
		
	}


	function inputSuratDirektur()
	{
			$data = array(
				'username' => $this->m_suratKeluar->ambilDataUsernameDirektur(),
				// 'hak_akses' => $this->m_suratkeluarcust->ambilDataUsernameLogist(),
				
			);

		$this->load->view('template/header');
		$this->load->view('customer/input_suratKeluarDirekt', $data);
		$this->load->view('template/footer');
	}

	
	function inputSuratKeluarDirektur(){
		

    $username = $this->input->post('tujuan');
    $jenis_surat = $this->input->post('jenis_surat');
    $no_surat = $this->input->post('no_surat');
    $tgl_surat =$this->input->post('tgl_surat');
    $pesan = $this->input->post('pesan');
    $config['upload_path'] 		= 'asset/upload/surat_keluar';
		$config['allowed_types'] 	= 'gif|jpg|png|pdf|doc|docx';
		$config['max_size']			= '2000';
		$config['max_width']  		= '3000';
		$config['max_height'] 		= '3000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('file');
	      $upload	 	= $this->upload->data();
				
    $data = array(
    
      'tujuan' => $username,
      'jenis_surat' => $jenis_surat,
      'no_surat' => $no_surat,
      'tgl_surat' => $tgl_surat,
       'file' => $upload['file_name'],
      'pesan' => $pesan,
      'username' => $this->session->userdata('username')
      
      );

     $this->m_suratKeluar->insertData($data, 'surat_keluar');
   redirect(base_url('c_suratKeluar/viewSuratKeluarCustomer'));
  }


	function inputSuratLogistik()
		{
			$data = array(
				'username' => $this->m_suratKeluar->ambilDataUsernameLogistik(),
				// 'hak_akses' => $this->m_suratkeluarcust->ambilDataUsernameLogist(),
				
			);

		$this->load->view('template/header');
		$this->load->view('customer/input_suratKeluarLogist', $data);
		$this->load->view('template/footer');
	}

	
	function inputSuratKeluarLogistik(){
		

    $username = $this->input->post('tujuan');
    $jenis_surat = $this->input->post('jenis_surat');
    $no_surat = $this->input->post('no_surat');
    $tgl_surat =$this->input->post('tgl_surat');
    $pesan = $this->input->post('pesan');
    $config['upload_path'] 		= 'asset/upload/surat_keluar';
		$config['allowed_types'] 	= 'gif|jpg|png|pdf|doc|docx';
		$config['max_size']			= '2000';
		$config['max_width']  		= '3000';
		$config['max_height'] 		= '3000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('file');
	      $upload	 	= $this->upload->data();
				
    $data = array(
    
      'tujuan' => $username,
      'jenis_surat' => $jenis_surat,
      'no_surat' => $no_surat,
      'tgl_surat' => $tgl_surat,
       'file' => $upload['file_name'],
      'pesan' => $pesan,
      'username' => $this->session->userdata('username')
      
      );

     $this->m_suratKeluar->insertData($data, 'surat_keluar');
   redirect(base_url('c_suratKeluar/viewSuratKeluarCustomer'));
  }

  
// diatas adalah view input surat di menu customer


// DIBAWAH ADA DIHALAMAN LOGISTIK

   public function viewSuratKeluarLogistik(){ // ini ada di menu surat keluar logistik
		$where = array('username' => $this->session->userdata('username'));
		$data ['surat_keluar'] = $this->m_suratKeluar->viewSuratKeluar($where,'surat_keluar')->result();
		$this->load->view('template/header');
		$this->load->view('logistik/view_suratKeluar',$data);
		$this->load->view('template/footer'); 
		
	}

	function inputSuratCustomer()
		{
			$data = array(
				'username' => $this->m_suratKeluar->ambilDataUsernameCustomer(),
				// 'hak_akses' => $this->m_suratkeluarcust->ambilDataUsernameLogist(),
				
			);

		$this->load->view('template/header');
		$this->load->view('logistik/input_suratKeluarCust', $data);
		$this->load->view('template/footer');
	}

	function inputSuratKeluarCustomer(){
		

    $username = $this->input->post('tujuan');
    $jenis_surat = $this->input->post('jenis_surat');
    $no_surat = $this->input->post('no_surat');
    $tgl_surat =$this->input->post('tgl_surat');
    $pesan = $this->input->post('pesan');
    $config['upload_path'] 		= 'asset/upload/surat_keluar';
		$config['allowed_types'] 	= 'gif|jpg|png|pdf|doc|docx';
		$config['max_size']			= '2000';
		$config['max_width']  		= '3000';
		$config['max_height'] 		= '3000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('file');
	      $upload	 	= $this->upload->data();
				
    $data = array(
    
      'tujuan' => $username,
      'jenis_surat' => $jenis_surat,
      'no_surat' => $no_surat,
      'tgl_surat' => $tgl_surat,
       'file' => $upload['file_name'],
      'pesan' => $pesan,
      'username' => $this->session->userdata('username')
      
      );

     $this->m_suratKeluar->insertData($data, 'surat_keluar');
    redirect(base_url('c_suratKeluar/viewSuratKeluarLogistik'));
  }


  }
 
 
	