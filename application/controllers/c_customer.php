<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_customer extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_customer');
	}
		 //call model
	public function home(){
		// $this->load->view('vendor/header_ven');
		$this->load->view('template/header'); // default template
		$this->load->view('customer/dashboard'); // dashboard vendornya
		$this->load->view('template/footer'); 
	}

	
	public function add(){
		//$this->load->view('utama/header');
		//$this->load->view('customer/register_cust');
		//$this->load->view('utama/footer');
		$this->load->view('customer/registrasiCustomer');
	}

	public function registrasi(){
		//$this->load->view('utama/header');
		print_r($this->input->post('username'));
		$dataCustomerAda=$this->m_customer->cekRegistrasi($this->input->post('username'));
		if($dataCustomerAda->num_rows() == 1){
			?>
                <script type=text/javascript>alert("Username sudah ada");</script>

        	<?php
        	$this->load->view('vendor/registrasiCustomer');
		}else{

					$config['upload_path']   = './npwp/'; 
					$config['allowed_types'] = 'gif|jpg|png'; 
					$config['max_size']      = 10000; 
					$config['max_width']     = 1024; 
					$config['max_height']    = 768;
					$this->load->library('upload',$config);  				
				if ( ! $this->upload->do_upload('npwp')) {
		        	$error = array('error' => $this->upload->display_errors()); 		        	
		        	?>
                     <script type=text/javascript>alert("File tidak sesuai");</script>

		        	<?php
		        	$this->load->view('vendor/registrasiCustomer');
		        	//redirect('c_customer/add');
		        }else { 
		        	$upload=$this->upload->data();		       				        
		       		$data = array(
						  'hak_akses' =>'customer',
						  'npwp' => $upload['file_name'],
						  'nama_perusahaan' => $this->input->post('namaperusahaan'),
						  'alamat_perusahaan' => $this->input->post('alamatperusahaan'),
						  'contact' => $this->input->post('contact'),
						  'email' => $this->input->post('email'),
						  'username' => $this->input->post('username'),
						  'password' => md5($this->input->post('password'))
						  );					
		 			$this->m_customer->insert($data); 
		 			//$this->load->view('utama/v_login');		 			
		        } 
		        redirect('Login/index');
			//$this->load->view('utama/footer');
			}
	}
 
 public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}
