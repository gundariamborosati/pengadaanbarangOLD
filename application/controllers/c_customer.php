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
		$this->load->view('customer/registrasiCustomer');
	}

	public function registrasicustomer(){
		//$this->load->view('utama/header');
		// print_r($this->input->post('username'));
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('contact', 'Contact','required|numeric');

	if ($this->form_validation->run() == TRUE){
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
		        	$this->load->view('customer/registrasiCustomer');
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
						  'password' => md5($this->input->post('password')),
						  'status' =>'aktif'
						);					
		 			$this->m_customer->insert($data); 
		 			//$this->load->view('utama/v_login');		 			
		        } 
		        redirect('Login/index');
			//$this->load->view('utama/footer');
			}
		}else {
			$this->load->view('customer/registrasiCustomer');
		}
	}

 public function viewProfile(){
 	 

		 $data['profile'] = $this->m_customer->profileCustomer($this->session->userdata('username'));


   
        // print_r($data);
 	 $this->load->view('customer/profilecustomer',$data); 

    }

  function update_profile(){
    $hasil = $this->m_customer->updateProfile($this->session->userdata('username'));
    // if($hasil){
    //   $this->session->set_flashdata('psn_sukses','Data telah diubah');
    // }
    // else {
    //   $this->session->set_flashdata('psn_error','Gagal mengubah data ');
    // }
     $this->load->view('customer/updateprofile');
  }

// function update_profile() {
//     $data = array(
//      'nama_perusahaan' => $this->input->post('nama_perusahaan'),
//      'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
//      'contact' => $this->input->post('contact')
//     );
//     $this->load->model('m_customer');
//     if($this->m_customer->updateProfile($data));
    
//      $this->load->view('customer/updateprofile');
//     }

 public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}
