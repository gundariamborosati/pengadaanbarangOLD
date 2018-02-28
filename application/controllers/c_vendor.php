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

	// unge nambahi tapi belum berhasil
	public function kelolaProfil ($username){
		$row= $this->m_vendor->detail('username');
		if($row){
			$data= array(
				'hak_akses' => $row->hak_akses,
				'akte_pendiri' => $row->akte_pendiri,
				'nama_perusahaan' => $row->nama_perusahaan,
				'alamat_perusahaan' => $row->alamat_perusahaan,
				'contact' => $row->contact,
				'email' => $row->email,
	            'username'=>$row->username,
	            'password'=>$row->password
			);			
			print_r($data);
		}
		//$this->load->view('logistik/profile',$data);
	}

	public function registrasiVendor(){
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
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}

