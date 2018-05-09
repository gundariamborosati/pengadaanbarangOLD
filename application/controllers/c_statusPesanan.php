<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_statusPesanan extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		$this->load->model('m_customer');
		 $this->load->model('m_statusPesanan');
	}

	public function home(){
		$this->load->view('template/header'); // default template
		$this->load->view('logistik/dashboard'); // dashboard vendornya
		$this->load->view('template/footer'); 
	}



	public function viewStatuslog(){
		
		 $data ['status'] = $this->m_statusPesanan->viewStatuslog()->result();
		$this->load->view('template/header');
		$this->load->view('logistik/view_statuslog',$data);
		$this->load->view('template/footer'); 
	}


	
	public function viewStatusPesanan(){
		$data ['status'] = $this->m_statusPesanan->viewStatus($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('customer/view_status',$data);
		$this->load->view('template/footer'); 
	
	}
	 

function input()
	{
			$data = array(
				'username' => $this->m_statusPesanan->ambilDataUsername(),
				'no' => $this->m_statusPesanan->getIdPesanan(),
			);

		$this->load->view('template/header');
		$this->load->view('logistik/input_statuspesanan', $data);
		$this->load->view('template/footer');
	}

	
	function inputStatusPesanan(){
    $no = $this->input->post('txt_id');
    $username = $this->input->post('username');
    $tanggal = $this->input->post('txt_tgl');
      $status = $this->input->post('status');
       $catatan = $this->input->post('catatan');

    $data = array(
      'no_pesanan'=> $no,
      'username' => $username,
      'tanggal' => $tanggal,
      'status' => $status,
          'catatan' => $catatan,
      );

    $this->m_statusPesanan->insertData($data, 'status_pesanan');
   
     redirect(base_url('c_statusPesanan/viewStatuslog'));
  }

  public function edit($no_pesanan){
		$where = array('no_pesanan' => $no_pesanan);
		$data['status'] = $this->m_statusPesanan->edit_data($where,'status_pesanan')->result();
		$this->load->view('template/header');
		$this->load->view('logistik/edit_status',$data);
		$this->load->view('template/footer');
	}

	public function updateStatus($no_pesanan){	
		$tanggal=$this->input->post('tanggal');
		$status=$this->input->post('status');
		$catatan=$this->input->post('catatan');

		$data=array(
			'tanggal' => $tanggal,
			'status'=>$status,
			'catatan'=>$catatan
			);
		$where=array(
			'no_pesanan' => $no_pesanan
			);
		$this->m_statusPesanan->update_status($where,$data,'status_pesanan');
	
		     redirect('c_statusPesanan/viewStatuslog');
	}

	

  public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}
