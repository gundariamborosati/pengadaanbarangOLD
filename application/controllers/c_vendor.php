<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_vendor extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_vendor');
	}

	public function home(){
		$this->load->view('template/header'); // default template
		$this->load->view('vendor/dashboard'); // dashboard vendornya
		$this->load->view('template/footer'); // default template
	}

	public function add(){
		$this->load->view('vendor/registrasiVendor');
	}

	public function viewProfile(){
		$data ['profile'] = $this->m_vendor->profileVendor($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('vendor/newProf',$data);
		$this->load->view('template/footer');
		//$this->load->view('vendor/profile',$data);
	}

	public function setting(){
		$data ['profile'] = $this->m_vendor->profileVendor($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('vendor/kelola_profil',$data);
		$this->load->view('template/footer');
	}

	function updateProfile(){
			$nama_perusahaan=$this->input->post('nama_perusahaan');
			$alamat_perusahaan=$this->input->post('alamat_perusahaan');
			$email=$this->input->post('email');
			$contact=$this->input->post('contact');
			$username=$this->input->post('username');

			$data=array(
                'nama_perusahaan'=>$nama_perusahaan,
                'alamat_perusahaan'=>$alamat_perusahaan,
                'email'=>$email,
                'contact'=>$contact,
                'username'=>$username
				);

			$where=array(
			     'username'=>$username
			  );  
			$this->m_vendor->updateProfile($where,$data,'vendor');  
			$this->load->view('template/header');
			$this->load->view('vendor/dashboard');
			$this->load->view('template/footer');
	}


	public function registrasiVendor(){
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('contact', 'Contact','required|numeric');

		if ($this->form_validation->run() == TRUE){
			$dataVendorAda=$this->m_vendor->check_regis($this->input->post('username'));		
			if($dataVendorAda->num_rows() == 1){
				?>
	                <script type=text/javascript>alert("Username sudah tersedia");</script>
	        	<?php
	        	$this->load->view('vendor/registrasiVendor');
			}else{				
					$config['upload_path']   = './akte/'; 
					$config['allowed_types'] = 'gif|jpg|png'; 
					$config['max_size']      = 10000; 
					$config['max_width']     = 1024; 
					$config['max_height']    = 768;
					$this->load->library('upload',$config);  				
				if ( ! $this->upload->do_upload('akte_pendiri')) {
		        	$error = array('error' => $this->upload->display_errors()); 
		        	?>
                     <script type=text/javascript>alert("File tidak sesuai format");</script>
        			<?php
        			$this->load->view('vendor/registrasiVendor');
		        }else { 
		        	$upload=$this->upload->data();			      
						$data = array(
							  'hak_akses' => 'vendor',
							  'akte_pendiri' => $upload['file_name'],
							  'nama_perusahaan' => $this->input->post('nama_perusahaan'),
							  'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
							  'contact' => $this->input->post('contact'),
							  'email' => $this->input->post('email'),
							  'username' => $this->input->post('username'),
							  'password' => md5($this->input->post('password'))
							  );					
			 			$this->m_vendor->insert($data);		
			     } 						   
		        redirect('Login/index');
			}
		}else {
			$this->load->view('vendor/registrasiVendor');
		}
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}

