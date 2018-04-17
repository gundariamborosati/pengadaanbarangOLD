<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_progress extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_progress');

		
	}
		 //call model
	public function home(){
		$this->load->view('template/header'); // default template
		$this->load->view('logistik/dashboard'); // dashboard vendornya
		$this->load->view('template/footer'); 
	}

	public function viewProgress(){
		$data ['progress'] = $this->m_progress->viewProgress()->result();
		$this->load->view('template/header');
		$this->load->view('logistik/view_progress',$data);
		$this->load->view('template/footer'); 
	}

	public function viewProgress_direktur(){
		$data ['progress'] = $this->m_progress->viewProgress()->result();
		$this->load->view('template/header');
		$this->load->view('direktur/view_progress_direct',$data);
		$this->load->view('template/footer'); 
	}

	 // function cetakpdf(){
  //     $this->load->model("m_progress");
  //        $data['progress'] = $this->m_progress->cetak()->result();
        
  //       $this->load->view('direktur/vcetaklaporan',$data);
  //    }

	
	 function input(){
         $this->load->view('template/header');
		$this->load->view('logistik/input_progress');
		$this->load->view('template/footer');
    }  
	function inputProgress(){
         $no_pesanan  = $this->input->post('no_pesanan');
        $tanggal     = $this->input->post('tanggal');
        $nama_customer = $this->input->post('nama_customer');
        $nama_vendor = $this->input->post('nama_vendor');
        $status      = $this->input->post('status');
        $kendala     = $this->input->post('kendala');
        
        $data = array(
        'no_pesanan' => $no_pesanan,
        'tanggal'     => $tanggal,
        'nama_customer' => $nama_customer,
        'nama_vendor' =>$nama_vendor,
        'status'      =>$status,
        'kendala'     =>$kendala
        );
        $this->m_progress->inputProgress($data, 'progress_pengadaan');
        redirect('c_progress/viewProgress');   
       }

	

       public function edit($no_pesanan){
		$where = array('no_pesanan' => $no_pesanan);
		$data['progress'] = $this->m_progress->edit_data($where,'progress_pengadaan')->result();
		$this->load->view('template/header');
		$this->load->view('logistik/edit_progress',$data);
		$this->load->view('template/footer');
	}

	public function updateProgress($no_pesanan){	
		$status=$this->input->post('status');
		$kendala=$this->input->post('kendala');

		$data=array(
			'status' => $status,
			'kendala'=>$kendala
			);
		$where=array(
			'no_pesanan' => $no_pesanan
			);
		$this->m_progress->update_progress($where,$data,'progress_pengadaan');
	
		     redirect('c_progress/viewProgress');
	}

	function hapusProgress($no_pesanan){
        $where=array('no_pesanan' => $no_pesanan);
        $this->m_progress->delete($where,'progress_pengadaan');
        redirect('c_progress/viewProgress');
        }

function cetakpdf() {
        $query['data1'] = $this->m_progress->ToExcelAll();
        $this->load->view('laporanpembelian/vcetaklaporan',$query);

    }



       

	
 public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}
