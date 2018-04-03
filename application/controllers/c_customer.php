<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_customer extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_customer');

		
	}
		 //call model
	public function home(){
		$this->load->view('template/header'); // default template
		$this->load->view('customer/dashboard'); // dashboard vendornya
		$this->load->view('template/footer'); 
	}

	
	public function add(){		
		$this->load->view('customer/registrasiCustomer');
	}

	public function detail_user($username){
		$where = array('username' => $username);
		$data['customer'] = $this->m_customer->detail($where,'customer')->result();
		$this->load->view('template/header');
		$this->load->view('logistik/detail_customer',$data);
		$this->load->view('template/footer');
	}

	publIC function edit_user($username){
		$where = array('username' => $username);
		$data['user'] = $this->m_customer->detail($where,'customer')->result();
		$this->load->view('template/header');
		$this->load->view('logistik/edit_customer',$data);
		$this->load->view('template/footer');
	}

	public function update_user($username){
		$status=$this->input->post('status');
		$data=array(
			'status'=>$status
			);
		$where=array(
			'username'=>$username
			);
		$this->m_customer->updateProfile($where,$data,'customer');
		print_r($status);
		print_r($username);
	}

	function delete_user($username){
		$where=array(
            'username'=>$username
		);
		$this->m_vendor->delete_user($where,'customer');
		redirect('c_logistik/kelola_user');
	}

	public function registrasicustomer(){
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('contact', 'Contact','required|numeric');

	if ($this->form_validation->run() == TRUE){
		$dataCustomerAda=$this->m_customer->check_regis($this->input->post('username'));
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
		$this->load->view('template/header');
 	    $this->load->view('customer/kelola_profile',$data); 
 	    $this->load->view('template/footer');

    }

 

    function updateProfile(){

			$this->form_validation->set_rules('email', 'Email','required|valid_email');
		    $this->form_validation->set_rules('contact', 'Contact','required|numeric');
			$nama_perusahaan=$this->input->post('nama_perusahaan');
			$alamat_perusahaan=$this->input->post('alamat_perusahaan');
			if($this->form_validation->run() == TRUE) {
			$email=$this->input->post('email');
			$contact=$this->input->post('contact');			

			$data=array(
                'nama_perusahaan'=>$nama_perusahaan,
                'alamat_perusahaan'=>$alamat_perusahaan,
                'email'=>$email,
                'contact'=>$contact                
				);

			$where=array(
			     'username'=>$this->session->userdata('username')
			  );  
			$this->m_customer->updateProfile($where,$data,'customer');  		
			$this->viewProfile();
		} else {
			$this->viewProfile();
		}
	}

function updatePassword(){
        $username = $this->session->userdata['username'];

        $this->form_validation->set_rules('pw_baru','password baru','required');
        $this->form_validation->set_rules('cpw_baru','password kedua','required|matches[pw_baru]');

        $this->form_validation->set_error_delimiters('<p class="alert">','</p>');

        if( $this->form_validation->run() == FALSE ){
            $this->load->view('customer/kelola_profile');
   } else {
            $post = $this->input->post();
            
            $data = array(
                'password' => md5($post['pw_baru']),
            );

            $this->m_customer->update($username, $data, 'customer');
            $this->viewProfile();

            $this->m_customer->updatePassword($username, $data, 'customer');


        }
  }

 public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}
